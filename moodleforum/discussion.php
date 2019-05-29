<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * File to display a moodleforum discussion.
 *
 * @package   mod_moodleforum
 * @copyright 2017 Kennet Winter <k_wint10@uni-muenster.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Include config and locallib.
require_once('../../config.php');
require_once($CFG->dirroot . '/mod/moodleforum/locallib.php');

// Declare optional parameters.
$d         = required_param('d', PARAM_INT); // The ID of the discussion.
$sesskey   = optional_param('sesskey', null, PARAM_TEXT);
$ratingid  = optional_param('r', 0, PARAM_INT);
$ratedpost = optional_param('rp', 0, PARAM_INT);

// Set the URL that should be used to return to this page.
$PAGE->set_url('/mod/moodleforum/discussion.php', array('d' => $d));

// Check if the discussion is valid.
if (!$discussion = $DB->get_record('moodleforum_discussions', array('id' => $d))) {
    print_error('invaliddiscussionid', 'moodleforum');
}

// Check if the related moodleforum instance is valid.
if (!$moodleforum = $DB->get_record('moodleforum', array('id' => $discussion->moodleforum))) {
    print_error('invalidmoodleforumid', 'moodleforum');
}

// Check if the related moodleforum instance is valid.
if (!$course = $DB->get_record('course', array('id' => $discussion->course))) {
    print_error('invalidcourseid');
}

// Get the related coursemodule and its context.
if (!$cm = get_coursemodule_from_instance('moodleforum', $moodleforum->id, $course->id)) {
    print_error('invalidcoursemodule');
}

$PAGE->requires->js_call_amd('mod_moodleforum/functions',
    'clickevent', array($d, $USER->id));

// Set the modulecontext.
$modulecontext = context_module::instance($cm->id);

// A user must be logged in and enrolled to the course.
require_course_login($course, true, $cm);

// Check if the user has the capability to view discussions.
$canviewdiscussion = has_capability('mod/moodleforum:viewdiscussion', $modulecontext);
if (!$canviewdiscussion) {
    notice(get_string('noviewdiscussionspermission', 'moodleforum'));
}

// Has a request to rate a post (as solved or helpful) or to remove rating been submitted?
if ($ratingid) {
    require_sesskey();

    if (in_array($ratingid, array(RATING_SOLVED, RATING_REMOVE_SOLVED, RATING_HELPFUL, RATING_REMOVE_HELPFUL))) {
        // Rate the post.
        if (!\mod_moodleforum\ratings::moodleforum_add_rating($moodleforum, $ratedpost, $ratingid, $cm)) {
            print_error('ratingfailed', 'moodleforum');
        }

        // Return to the discussion.
        $returnto = new moodle_url('/mod/moodleforum/discussion.php?d=' . $discussion->id . '#p' . $ratedpost);
        redirect($returnto);
    }
}

// Trigger the discussion viewed event.
$params = array(
    'context'  => $modulecontext,
    'objectid' => $discussion->id,
);
$event  = \mod_moodleforum\event\discussion_viewed::create($params);
$event->trigger();

// Unset where the user is coming from.
// Allows to calculate the correct return url later.
unset($SESSION->fromdiscussion);

// Get the parent post.
$parent = $discussion->firstpost;
if (!$post = moodleforum_get_post_full($parent)) {
    print_error("notexists", 'moodleforum', "$CFG->wwwroot/mod/moodleforum/view.php?m=$moodleforum->id");
}

// Has the user the capability to view the post?
if (!moodleforum_user_can_see_post($moodleforum, $discussion, $post, null, $cm)) {
    print_error('noviewdiscussionspermission', 'moodleforum', "$CFG->wwwroot/mod/moodleforum/view.php?m=$moodleforum->id");
}

// Append the discussion name to the navigation.
$forumnode = $PAGE->navigation->find($cm->id, navigation_node::TYPE_ACTIVITY);
if (empty($forumnode)) {
    $forumnode = $PAGE->navbar;
} else {
    $forumnode->make_active();
}

if ($discussion->userid === '0') {
    $discussion->name = get_string('privacy:anonym_discussion_name', 'mod_moodleforum');
}

$node          = $forumnode->add(format_string($discussion->name),
    new moodle_url('/mod/moodleforum/discussion.php', array('d' => $discussion->id)));
$node->display = false;
if ($node AND ($post->id != $discussion->firstpost)) {
    $node->add(format_string($post->subject), $PAGE->url);
}

// Initiate the page.
$PAGE->set_title($course->shortname . ': ' . format_string($discussion->name));
$PAGE->set_heading($course->fullname);

// Include the renderer.
$renderer = $PAGE->get_renderer('mod_moodleforum');

// Start the side-output.
echo $OUTPUT->header();
echo $OUTPUT->heading(format_string($moodleforum->name), 2);
echo $OUTPUT->heading(format_string($discussion->name), 3, 'discussionname');

// Guests and users can not subscribe to a discussion.
if ((!is_guest($modulecontext, $USER) AND isloggedin() AND $canviewdiscussion)) {
    echo '';
}

// Check if the user can reply in this discussion.
$canreply = moodleforum_user_can_post($moodleforum, $USER, $cm, $course, $modulecontext);

// Link to the selfenrollment if not allowed.
if (!$canreply) {
    if (!is_enrolled($modulecontext) AND !is_viewing($modulecontext)) {
        $canreply = enrol_selfenrol_available($course->id);
    }
}

echo "<br><br>";

moodleforum_print_discussion($course, $cm, $moodleforum, $discussion, $post, $canreply);

echo $OUTPUT->footer();