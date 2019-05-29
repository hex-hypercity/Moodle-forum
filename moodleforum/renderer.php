<?php
// This file is part of a plugin for Moodle - http://moodle.org/
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
 * Renderer definition.
 *
 * @package   mod_moodleforum
 * @copyright 2017 Kennet Winter <k_wint10@uni-muenster.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib.php');
require_once($CFG->libdir . '/weblib.php');

/**
 * Class for rendering moodleforum.
 *
 * @package   mod_moodleforum
 * @copyright 2017 Kennet Winter <k_wint10@uni-muenster.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_moodleforum_renderer extends plugin_renderer_base {

    /**
     * Display the discussion list for the view.php.
     *
     * @param object $data The prepared variables.
     *
     * @return string
     */
    public function render_discussion_list($data) {
        return $this->render_from_template('mod_moodleforum/discussion_list', $data);
    }

    /**
     * Renders a dummy post for users that cannot see the post.
     *
     * @param object $data The submitted variables.
     *
     * @return bool|string
     */
    public function render_post_dummy_cantsee($data) {
        return $this->render_from_template('mod_moodleforum/post_dummy_cantsee', $data);
    }

    /**
     * Renders the starting post of a discussion.
     *
     * @param object $data The submitted variables.
     *
     * @return bool|string
     */
    public function render_question($data) {
        return $this->render_from_template('mod_moodleforum/question', $data);
    }

    /**
     * Renders all answers of a discussion.
     *
     * @param object $data The submitted variables.
     *
     * @return bool|string
     */
    public function render_answer($data) {
        return $this->render_from_template('mod_moodleforum/answer', $data);
    }

    /**
     * Display a moodleforum post in the relevant context.
     *
     * @param \mod_moodleforum\output\moodleforum_email $post The post to display.
     *
     * @return string
     */
    public function render_moodleforum_email(\mod_moodleforum\output\moodleforum_email $post) {
        $data = $post->export_for_template($this, $this->target === RENDERER_TARGET_TEXTEMAIL);

        return $this->render_from_template('mod_moodleforum/' . $this->moodleforum_email_template(), $data);
    }

    /**
     * The template name for this renderer.
     * This method will be overwritten by other classes.
     *
     * @return string
     */
    public function moodleforum_email_template() {
        return null;
    }
}