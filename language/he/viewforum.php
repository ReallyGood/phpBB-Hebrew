<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'נושאים פעילים',
	'ANNOUNCEMENTS'			=> 'הכרזות',

	'FORUM_PERMISSIONS'		=> 'הרשאות הפורום',

	'ICON_ANNOUNCEMENT'		=> 'הכרזה',
	'ICON_STICKY'			=> 'דביק',

	'LOGIN_NOTIFY_FORUM'	=> 'קיבלת התראה אודות פורום זה, אנא התחבר על מנת לצפות בו.',

	'MARK_TOPICS_READ'		=> 'סמן נושאים כנקראו',

	'NEW_POSTS_HOT'			=> 'יש הודעות חדשות [ הודעות חמות ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'יש הודעות חדשות [ הודעות נעולות ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'אין הודעות חדשות [ הודעות חמות ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'אין הודעות חדשות [ הודעות נעולות ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'אין לך את ההרשאות המתאימות על מנת לראות או לקרוא נושאים בפורום זה.',
	'NO_FORUMS_IN_CATEGORY'	=> 'לקטגוריה זו אין פורומים.',
	'NO_UNREAD_POSTS_HOT'		=> 'אין הודעות שלא נקראו [ הודעות חמות ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'אין הודעות שלא נקראו [ הודעות נעולות ]',

	'POST_FORUM_LOCKED'		=> 'הפורום נעול',

	'TOPICS_MARKED'			=> 'הנושאים בפורום זה סומנו כנקראו.',

	'UNREAD_POSTS_HOT'		=> 'הודעות שלא נקראו [ הודעות חמות ]',
	'UNREAD_POSTS_LOCKED'	=> 'הודעות שלא נקראו [ הודעות נעולות ]',

	'VIEW_FORUM'			=> 'צפה בפורום',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d topic',
		2	=> '%d topics',
	),
));
