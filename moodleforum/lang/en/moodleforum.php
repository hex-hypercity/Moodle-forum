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
 * English strings for moodleforum
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package   mod_moodleforum
 * @copyright 2017 Kennet Winter <k_wint10@uni-muenster.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Default strings that moodle forum uses.
$string['modulename']             = 'Forum';
$string['modulenameplural']       = 'moodleforums';
$string['modulename_help']        = 'The forum activity allows students and teachers to exchange ideas by posting comments as part of a thread. Files such as images and media maybe included in forum posts. The teacher can choose to rate forum posts and it is also possible to give students permission to rate each others posts.A student can upvote or Downvote another students post .';
$string['moodleforumfieldset'] = 'Custom example fieldset';
$string['moodleforumname']     = 'Forum';
$string['moodleforum']         = 'Forum';
$string['pluginadministration']   = 'Forum';
$string['pluginname']             = 'Forum';

// Capabilities.
$string['moodleforum:addinstance']         = 'Add a new moodleforum instance';
$string['moodleforum:allowforcesubscribe'] = 'Allow forced subscription';
$string['moodleforum:createattachment']    = 'Create attachments';
$string['moodleforum:managesubscriptions'] = 'Manage subscriptions';
$string['moodleforum:ratehelpful']         = 'Mark a post as helpful';
$string['moodleforum:ratepost']            = 'Rate a post';
$string['moodleforum:viewanyrating']       = 'View ratings';
$string['moodleforum:deleteanypost']       = 'Delete posts';
$string['moodleforum:deleteownpost']       = 'Delete own posts';
$string['moodleforum:editanypost']         = 'Edit posts';
$string['moodleforum:startdiscussion']     = 'Start a discussion';
$string['moodleforum:replypost']           = 'Reply in discussion';
$string['moodleforum:viewdiscussion']      = 'View discussion';
$string['moodleforum:view']                = 'View discussionlist';
$string['moodleforum:marksolved']          = 'Mark a post as solved';
$string['nowallsubscribed']                   = 'All forums in {$a} are subscribed.';
$string['nowallunsubscribed']                 = 'All forums in {$a} are unsubscribed.';

// Strings used in the view.php.
$string['noviewdiscussionspermission'] = 'You do not have the permission to view discussions in this forum';

// Strings fused in the locallib.php.
$string['addanewdiscussion']    = 'Add a new discussion topic';
$string['nodiscussions']        = 'There are no discussion topics yet in this forum.';
$string['headerdiscussion']     = 'Discussion';
$string['headerstartedby']      = 'Started by';
$string['headerreplies']        = 'Replies';
$string['headerlastpost']       = 'Last post';
$string['headerunread']         = 'Unread';
$string['headervotes']          = 'Votes';
$string['headerstatus']         = 'Status';
$string['markallread']          = 'Mark read';
$string['markallread']          = 'Mark all posts in this discussion read.';
$string['delete']               = 'Delete';
$string['parent']               = 'Show parent';
$string['markread']             = 'Mark read';
$string['markunread']           = 'Mark unread';
$string['permalink']            = 'Permalink';
$string['postbyuser']           = '{$a->post} by {$a->user}';
$string['bynameondate']         = 'by {$a->name}  - {$a->date}';
$string['bynameondatenorating'] = 'by {$a->name} - {$a->date}';
$string['deletesure']           = 'Are you sure you want to delete this post?';
$string['deletesureplural']     = 'Are you sure you want to delete this post and all replies? ({$a} posts)';

// Strings used in settings.php.
$string['configmanydiscussions']     = 'Maximum number of discussions shown in a moodleforum instance per page';
$string['manydiscussions']           = 'Discussions per page';
$string['maxattachmentsize']         = 'Maximum attachment size';
$string['maxattachmentsize_help']    = 'This setting specifies the largest size of file that can be attached to a forum post.';
$string['configmaxbytes']            = 'Default maximum size for all forum attachments on the site (subject to course limits and other local settings)';
$string['maxattachments']            = 'Maximum number of attachments';
$string['maxattachments_help']       = 'This setting specifies the maximum number of files that can be attached to a forum post.';
$string['configmaxattachments']      = 'Default maximum number of attachments allowed per post.';
$string['maxeditingtime']            = 'Maximum amount of time during which a post can be edited by its owner (sec)';
$string['configmaxeditingtime']      = 'Default maximum seconds are 3600 (= one hour).';
$string['configoldpostdays']         = 'Number of days old any post is considered read.';
$string['oldpostdays']               = 'Read after days';
$string['trackingoff']               = 'Off';
$string['trackingon']                = 'Forced';
$string['trackingoptional']          = 'Optional';
$string['trackingtype']              = 'Read tracking';
$string['configtrackingtype']        = 'Default setting for read tracking.';
$string['trackmoodleforum']       = 'Track unread posts';
$string['configtrackmoodleforum'] = 'Set to \'yes\' if you want to track read/unread for each user.';
$string['forcedreadtracking']        = 'Allow forced read tracking';
$string['configforcedreadtracking']  = 'Allows moodleforums to be set to forced read tracking. Will result in decreased performance for some users, particularly on courses with many moodleforums and posts. When off, any moodleforums previously set to Forced are treated as optional.';
$string['cleanreadtime']             = 'Mark old posts as read hour';
$string['configcleanreadtime']       = 'The hour of the day to clean old posts from the \'read\' table.';

$string['votescalevote']               = 'Reputation: Vote.';
$string['configvotescalevote']         = 'The amount of reputation voting gives.';
$string['votescaledownvote']           = 'Reputation: Downvote';
$string['configvotescaledownvote']     = 'The amount of reputation a downvote for your post gives.';
$string['votescaleupvote']             = 'Reputation: Upvote';
$string['configvotescaleupvote']       = 'The amount of reputation an upvote for your post gives.';
$string['votescalesolved']             = 'Reputation: Solved';
$string['configvotescalesolved']       = 'The amount of reputation a mark as solved on your post gives.';
$string['votescalehelpful']            = 'Reputation: Helpful';
$string['configvotescalehelpful']      = 'The amount of reputation a mark as helpful on your post gives.';
$string['reputationnotnegative']       = 'Reputation just positive?';
$string['configreputationnotnegative'] = 'Prohibits the users reputation being negative.';
$string['allowcoursereputation']       = 'Sum reputation within a course.';
$string['configallowcoursereputation'] = 'Allow to sum the reputation of all instances of the current course?';
$string['maxmailingtime']              = 'Maximal mailing time';
$string['configmaxmailingtime'] = 'Posts older than this number of hours will not be mailed to the users. This will help to avoid problems where the cron has not been running for a long time.';

// Strings for the post.php.
$string['invalidmoodleforumid'] = 'Forum ID was incorrect';
$string['invalidparentpostid']     = 'Parent post ID was incorrect';
$string['notpartofdiscussion']     = 'This post is not part of a discussion!';
$string['noguestpost']             = 'Sorry, guests are not allowed to post.';
$string['nopostmoodleforum']    = 'Sorry, you are not allowed to post to this forum.';
$string['yourreply']               = 'Your reply';
$string['re']                      = 'Re:';
$string['invalidpostid']           = 'Invalid post ID - {$a}';
$string['cannotfindparentpost']    = 'Could not find top parent of post {$a}';
$string['edit']                    = 'Edit';
$string['cannotreply']             = 'You cannot reply to this post';
$string['cannotcreatediscussion']  = 'Could not create new discussion';
$string['couldnotadd']             = 'Could not add your post due to an unknown error';
$string['postaddedsuccess']        = 'Your post was successfully added.';
$string['postaddedtimeleft']       = 'You have {$a} to edit it if you want to make any changes.';
$string['cannotupdatepost']        = 'You can not update this post';
$string['couldnotupdate']          = 'Could not update your post due to an unknown error';
$string['editedpostupdated']       = '{$a}\'s post was updated';
$string['postupdated']             = 'Your post was updated';
$string['editedby']                = 'Edited by {$a->name} - original submission {$a->date}';
$string['cannotdeletepost']        = 'You can\'t delete this post!';
$string['couldnotdeletereplies']   = 'Sorry, that cannot be deleted as people have already responded to it';
$string['errorwhiledelete']        = 'An error occurred while deleting record.';
$string['couldnotdeletereplies']   = 'Sorry, that cannot be deleted as people have already responded to it';

// Strings for the classes/mod_form.php.
$string['subject']                     = 'Subject';
$string['reply']                       = 'Comment';
$string['replyfirst']                  = 'Answer';
$string['message']                     = 'Message';
$string['discussionsubscription']      = 'Discussion subscription';
$string['discussionsubscription_help'] = 'Subscribing to a discussion means you will receive notifications of new posts to that discussion.';
$string['posttomoodleforum']        = 'Post to forum';
$string['posts'] = 'Posts';
$string['erroremptysubject']           = 'Post subject cannot be empty.';
$string['erroremptymessage']           = 'Post message cannot be empty';
$string['yournewtopic']                = 'Your new discussion topic';

// Strings for the classes/ratings.php.
$string['postnotexist']             = 'Requested post does not exist';
$string['noratemoodleforum']     = 'Sorry, you are not allowed to vote in this forum.';
$string['configallowratingchange']  = 'Can a user change its ratings?';
$string['allowratingchange']        = 'Allow rating changes';
$string['configpreferteachersmark'] = 'The answer marked as solved by a course owner are prioritized over the answer marked as helpful by the starter of the discussion.';
$string['preferteachersmark']       = 'Prefer course owners\' marks?';
$string['noratingchangeallowed']    = 'You are not allowed to change your ratings.';
$string['invalidratingid']          = 'The submitted rating is neither an upvote nor a downvote.';
$string['notstartuser']             = 'Only the user who started the discussion can mark an answer as helpful.';
$string['notteacher']               = 'Only course owners can do this.';
$string['ratingtoold']              = 'Ratings can only be changed within 30 minutes after the first vote. ';

// Strings for the discussion.php.
$string['invaliddiscussionid']         = 'Discussion ID was incorrect';
$string['notexists']                   = 'Discussion no longer exists';
$string['discussionname']              = 'Discussion name';
$string['discussionlocked']            = 'This discussion has been locked so you can no longer reply to it.';
$string['hiddenmoodleforumpost']    = 'Hidden forum post';
$string['moodleforumsubjecthidden'] = 'Subject (hidden)';
$string['moodleforumauthorhidden']  = 'Author (hidden)';
$string['moodleforumbodyhidden']    = 'This post cannot be viewed by you, probably because you have not posted in the discussion, the maximum editing time hasn\'t passed yet, the discussion has not started or the discussion has expired.';
$string['addanewreply']                = 'Add a new answer';
$string['ratingfailed']                = 'Rating failed. Try again.';
$string['rateownpost']                 = 'You cannot rate your own post.';
$string['marksolved']                  = 'Mark as Solved';
$string['marknotsolved']               = 'Not Solved';
$string['markhelpful']                 = 'Mark as Helpful';
$string['marknothelpful']              = 'Not Helpful';

// Strings for the readtracking.php.
$string['markreadfailed']                   = 'A post of the discussion could not be marked as read.';
$string['markdiscussionreadsuccessful']     = 'The discussion has been marked as read.';
$string['markmoodleforumreadsuccessful'] = 'All posts have been marked as read.';
$string['noguesttracking']                  = 'Sorry, guests are not allowed to set tracking options.';

// OTHER.
$string['messageprovider:posts']        = 'Notification of new posts';
$string['unknownerror']                 = 'This is not expected to happen.';
$string['crontask']                     = 'moodleforum maintenance jobs';
$string['taskcleanreadrecords']         = 'moodleforum maintenance job to clean old read records';
$string['tasksendmails']                = 'moodleforum maintenance job to send mails';
$string['nopermissiontosubscribe']      = 'You do not have the permission to view subscribers';
$string['subscribeenrolledonly']        = 'Sorry, only enrolled users are allowed to subscribe to post notifications.';
$string['everyonecannowchoose']         = 'Everyone can now choose to be subscribed';
$string['noonecansubscribenow']         = 'Subscriptions are now disallowed';
$string['invalidforcesubscribe']        = 'Invalid force subscription mode';
$string['nownotsubscribed']             = '{$a->name} will NOT be notified of new posts in \'{$a->moodleforum}\'';
$string['cannotunsubscribe']            = 'Could not unsubscribe you from that forum';
$string['discussionnownotsubscribed']   = '{$a->name} will NOT be notified of new posts in \'{$a->discussion}\' of \'{$a->moodleforum}\'';
$string['disallowsubscribe']            = 'Subscriptions not allowed';
$string['noviewdiscussionspermission']  = 'You do not have the permission to view discussions in this forum';
$string['nowsubscribed']                = '{$a->name} will be notified of new posts in \'{$a->moodleforum}\'';
$string['discussionnowsubscribed']      = '{$a->name} will be notified of new posts in \'{$a->discussion}\' of \'{$a->moodleforum}\'';
$string['unsubscribe']                  = 'Unsubscribe from this forum';
$string['subscribe']                    = 'Subscribe to this forum';
$string['confirmunsubscribediscussion'] = 'Do you really want to unsubscribe from discussion \'{$a->discussion}\' in moodleforum \'{$a->moodleforum}\'?';
$string['confirmunsubscribe']           = 'Do you really want to unsubscribe from moodleforum \'{$a}\'?';
$string['confirmsubscribediscussion']   = 'Do you really want to subscribe to discussion \'{$a->discussion}\' in forum \'{$a->moodleforum}\'?';
$string['confirmsubscribe']             = 'Do you really want to subscribe to forum \'{$a}\'?';
$string['postmailsubject']              = '{$a->courseshortname}: {$a->subject}';
$string['smallmessage']                 = '{$a->user} posted in {$a->moodleforumname}';
$string['moodleforums']              = 'moodleforums';
$string['postmailinfolink']             = 'This is a copy of a message posted in {$a->coursename}.

To reply click on this link: {$a->replylink}';
$string['unsubscribelink']              = 'Unsubscribe from this forum: {$a}';
$string['unsubscribediscussionlink']    = 'Unsubscribe from this discussion: {$a}';
$string['postincontext']                = 'See this post in context';
$string['unsubscribediscussion']        = 'Unsubscribe from this discussion';
$string['nownottracking']               = '{$a->name} is no longer tracking \'{$a->moodleforum}\'.';
$string['nowtracking']                  = '{$a->name} is now tracking \'{$a->moodleforum}\'.';
$string['cannottrack']                  = 'Could not stop tracking that forum';
$string['notrackmoodleforum']        = 'Don\'t track unread posts';
$string['trackmoodleforum']          = 'Track unread posts';
$string['discussions']                  = 'Discussions';
$string['subscribed']                   = 'Subscribed';
$string['unreadposts']                  = 'Unread posts';
$string['unreadpostsnumber']            = '{$a} unread posts';
$string['unreadpostsone']               = '1 unread post';
$string['tracking']                     = 'Track';
$string['allsubscribe']                 = 'Subscribe to all forums';
$string['allunsubscribe']               = 'Unsubscribe from all forums';
$string['generalmoodleforums']       = 'Forums in this course';
$string['subscribestart']               = 'Send me notifications of new posts in this forum';
$string['subscribestop']                = 'I don\'t want to be notified of new posts in this forum';
$string['everyoneisnowsubscribed']      = 'Everyone is now subscribed to this forum';
$string['everyoneissubscribed']         = 'Everyone is subscribed to this forum';
$string['mailindexlink']                = 'Change your forum preferences: {$a}';
$string['gotoindex']                    = 'Manage preferences';
$string['areaattachment']               = 'Attachments';
$string['areapost']                     = 'Messages';


// EVENTS.
$string['eventdiscussioncreated']             = 'Discussion created';
$string['eventdiscussiondeleted']             = 'Discussion deleted';
$string['eventdiscussionviewed']              = 'Discussion viewed';
$string['eventratingcreated']                 = 'Rating created';
$string['eventratingupdated']                 = 'Rating updated';
$string['eventratingdeleted']                 = 'Rating deleted';
$string['eventpostcreated']                   = 'Post created';
$string['eventpostupdated']                   = 'Post updated';
$string['eventpostdeleted']                   = 'Post deleted';
$string['eventdiscussionsubscriptioncreated'] = 'Discussion subscription created';
$string['eventdiscussionsubscriptiondeleted'] = 'Discussion subscription deleted';
$string['eventsubscriptioncreated']           = 'Subscription created';
$string['eventsubscriptiondeleted']           = 'Subscription deleted';
$string['eventreadtrackingdisabled']          = 'Read tracking disabled';
$string['eventreadtrackingenabled']           = 'Read tracking enabled';


$string['subscriptiontrackingheader']   = 'Subscription and tracking';
$string['subscriptionmode']             = 'Subscription mode';
$string['subscriptionmode_help']        = 'When a participant is subscribed to a forum it means they will receive forum post notifications. There are 4 subscription mode options:

* Optional subscription - Participants can choose whether to be subscribed
* Forced subscription - Everyone is subscribed and cannot unsubscribe
* Auto subscription - Everyone is subscribed initially but can choose to unsubscribe at any time
* Subscription disabled - Subscriptions are not allowed

Note: Any subscription mode changes will only affect users who enrol in the course in the future, and not existing users.';
$string['subscriptionoptional']         = 'Optional subscription';
$string['subscriptionforced']           = 'Forced subscription';
$string['subscriptionauto']             = 'Auto subscription';
$string['subscriptiondisabled']         = 'Subscription disabled';
$string['trackingoff']                  = 'Off';
$string['trackingon']                   = 'Forced';
$string['trackingoptional']             = 'Optional';
$string['trackingtype']                 = 'Read tracking';
$string['trackingtype_help']            = 'Read tracking enables participants to easily check which posts they have not yet seen by highlighting any new posts.

If set to optional, tracking is turned on by default but participants can turn tracking off.

If \'Allow forced read tracking\' is enabled in the site administration, then a further option is available - forced. This means that tracking is always on.';
$string['ratingheading']                = 'Rating and reputation';
$string['starterrating']                = 'Helpful';
$string['teacherrating']                = 'Solved';
$string['ratingpreference']             = 'Display first';
$string['ratingpreference_help']        = 'Answers can be marked as solved and helpful. This option decides which of these will be pinned as the first answer of the discussion. There are 2 options:

* Heplful - A topic starter\'s helpful mark will be pinned at the top of the discussion
* Solved - A teacher\'s solved mark will be pinned at the top of the discussion';
$string['allownegativereputation']      = 'Allow negative reputation?';
$string['allownegativereputation_help'] = 'If set to yes, the users reputation within a course or within a module can be negative. If set to no, the reputation will stop to decrease at zero.';
$string['coursewidereputation']         = 'Cross module reputation?';
$string['coursewidereputation_help']    = 'If set to yes, the users reputations of all moodleforum modules in this course will be summed.';
$string['clicktounsubscribe']           = 'You are subscribed to this discussion. Click to unsubscribe.';
$string['clicktosubscribe']             = 'You are not subscribed to this discussion. Click to subscribe.';
$string['attachment']                   = 'Attachment';
$string['attachments']                  = 'Attachments';
$string['attachment_help']              = 'You can optionally attach one or more files to a forum post. If you attach an image, it will be displayed after the message.';

// Templates.
$string['helpfulanswer'] = 'The question owner accepted this as the best answer.';
$string['solvedanswer']  = 'This post is marked as solved.';
$string['bestanswer']    = 'The question owner and a course owner accepted this as the best answer.';
$string['reputation'] = 'Reputation';
$string['upvote'] = 'Upvote';
$string['upvotenotchangeable'] = 'Upvote (not changeable)';
$string['noupvote'] = 'No upvote';
$string['downvote'] = 'Downvote';
$string['downvotenotchangeable'] = 'Downvote (not changeable)';
$string['nodownvote'] = 'No downvote';

// Privacy.
$string['privacy:metadata:core_files'] = 'moodleforum stores files which have been uploaded by the user to form part of a forum post.';
$string['privacy:metadata:moodleforum_discussions'] = 'Information about forum discussions. This includes which discussions a user has started.';
$string['privacy:metadata:moodleforum_discussions:name'] = 'The name of the discussion.';
$string['privacy:metadata:moodleforum_discussions:userid'] = 'The ID of the user who started the discussion.';
$string['privacy:metadata:moodleforum_discussions:timemodified'] = 'The time when the discussion (e.g. a post) was last modified.';
$string['privacy:metadata:moodleforum_discussions:usermodified'] = 'The ID of the last user who modified the discussion';

$string['privacy:metadata:moodleforum_posts'] = 'Information about forum posts. This includes data of posts a user has written.';
$string['privacy:metadata:moodleforum_posts:discussion'] = 'The ID of the discussion this post is contributing to.';
$string['privacy:metadata:moodleforum_posts:parent'] = 'The ID of the post this post is referring to.';
$string['privacy:metadata:moodleforum_posts:userid'] = 'The ID of the user who submitted this post.';
$string['privacy:metadata:moodleforum_posts:created'] = 'The date this post was created.';
$string['privacy:metadata:moodleforum_posts:modified'] = 'The last date this post was modified.';
$string['privacy:metadata:moodleforum_posts:message'] = 'The text of this post.';

$string['privacy:metadata:moodleforum_read'] = 'Information about read tracking of posts. This includes when posts were read by a user.';
$string['privacy:metadata:moodleforum_read:userid'] = 'The ID of the user who read the post.';
$string['privacy:metadata:moodleforum_read:discussionid'] = 'The ID of the discussion the read post belongs to,';
$string['privacy:metadata:moodleforum_read:postid'] = 'The ID of the post that has been read.';
$string['privacy:metadata:moodleforum_read:firstread'] = 'The date the post was read the first time.';
$string['privacy:metadata:moodleforum_read:lastread'] = 'The date the post was read the last time by the user.';

$string['privacy:metadata:moodleforum_subscriptions'] = 'Information about subscriptions to forums. This includes which forums a user has subscribed.';
$string['privacy:metadata:moodleforum_subscriptions:userid'] = 'The ID of the user who has subscribed a forum.';
$string['privacy:metadata:moodleforum_subscriptions:moodleforum'] = 'The ID of the moodleforum forum the user has subscribed.';

$string['privacy:metadata:moodleforum_discuss_subs'] = 'Information about the subscriptions to individual forum discussions. This includes when a user has chosen to subscribe to a discussion or to unsubscribe from one where they would otherwise be subscribed.';
$string['privacy:metadata:moodleforum_discuss_subs:userid'] = 'The ID of the user who changed the subscription settings.';
$string['privacy:metadata:moodleforum_discuss_subs:discussion'] = 'The ID of the discussion that was subscribed / unsubscribed.';
$string['privacy:metadata:moodleforum_discuss_subs:preference'] = 'The start time of the subscription.';

$string['privacy:metadata:moodleforum_ratings'] = 'Information about ratings of posts. This includes when a user has rated a post and its specific rating.';
$string['privacy:metadata:moodleforum_ratings:userid'] = 'The ID of the user who submitted the rating.';
$string['privacy:metadata:moodleforum_ratings:postid'] = 'The ID of the post that was rated.';
$string['privacy:metadata:moodleforum_ratings:discussionid'] = 'The ID of the discussion the rated post is part of.';
$string['privacy:metadata:moodleforum_ratings:moodleforumid'] = 'The ID of the moodleforum forum that contains the rated post.';
$string['privacy:metadata:moodleforum_ratings:rating'] = 'The submitted rating. 0 = neutral, 1 = negative, 2 = positive, 3 = helpful, 4 = solved';
$string['privacy:metadata:moodleforum_ratings:firstrated'] = 'The date the rating was submitted.';
$string['privacy:metadata:moodleforum_ratings:lastchanged'] = 'The date the rating was changed the last time.';

$string['privacy:metadata:moodleforum_tracking'] = 'Information about the tracking of forums. This includes which forums a user does not track.';
$string['privacy:metadata:moodleforum_tracking:userid'] = 'The ID of the user who does not track the forum.';
$string['privacy:metadata:moodleforum_tracking:moodleforumid'] = 'The ID of the moodleforum forum that is not tracked by the user.';

$string['privacy:anonym_discussion_name'] = 'Anonymized discussion name';
$string['privacy:anonym_post_message'] = 'This content has been deleted.';
$string['privacy:anonym_user_name'] = 'Anonym';

$string['privacy:subscribedtoforum'] = 'You are subscribed to this forum.';
$string['privacy:discussionsubscriptionpreference'] = 'You have chosen the following discussion subscription preference for this forum: "{$a->preference}"';
$string['privacy:readtrackingdisabled'] = 'You have chosen to not track which posts that you have read within this forum.';
$string['privacy:postwasread'] = 'This post was first read on {$a->firstread} and most recently read on {$a->lastread}';
