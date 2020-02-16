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
	'ABOUT_USER'			=> 'פרופיל',
	'ACTIVE_IN_FORUM'		=> 'פעיל ביותר בפורום',
	'ACTIVE_IN_TOPIC'		=> 'פעיל ביותר בנושא',
	'ADD_FOE'				=> 'הוסף נודניק',
	'ADD_FRIEND'			=> 'הוסף חבר',
	'AFTER'					=> 'לאחר',

	'ALL'					=> 'כולם',

	'BEFORE'				=> 'לפני',

	'CC_SENDER'				=> 'שלח העתק של הדואר האלקטרוני לעצמך.',
	'CONTACT_ADMIN'			=> 'צור קשר עם מנהל ראשי',

	'DEST_LANG'				=> 'שפה',
	'DEST_LANG_EXPLAIN'		=> 'בחר בשפה המתאימה (אם קיימת) עבור הבן אדם שמקבל הודעה זאת.',

	'EDIT_PROFILE'			=> 'ערוך פרופיל',

	'EMAIL_BODY_EXPLAIN'	=> 'הודעה זו תשלח כטקסט נקי, אל תכלול כאו קוד HTML או BBCode. הכתובת לחזרה תיקבע על פי כתובת הדואר אלקטרוני שלך.',
	'EMAIL_DISABLED'		=> 'פונקציית הדואר האלקטרוני איננה פעילה.',
	'EMAIL_SENT'			=> 'הדואר האלקטרוני נשלח.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'הודעה זו תשלח כטקסט נקי, אל תכלול כאו קוד HTML או BBCode. אנא שים לב שפירטי הנושא כבר כלולים בהודעה, הכתובת לחזרה תיקבע על פי כתובת הדואר אלקטרוני שלך.',
	'EMPTY_ADDRESS_EMAIL'	=> 'אתה מוכרח לספק כתובת דואר אלקטרוני תקינה של הנמען.',
	'EMPTY_MESSAGE_EMAIL'	=> 'אתה מוכרח לכתוב את ההודעה שהנך רוצה לשלוח בדואר אלקטרוני.',
	'EMPTY_MESSAGE_IM'		=> 'אתה חייב להזין הודעה לשליחה.',
	'EMPTY_NAME_EMAIL'		=> 'אתה מוכרח לציין שם אמיתי של הנמען.',
	'EMPTY_SENDER_EMAIL'	=> 'אתה מוכרח לציין כתובת דואר אלקטרוני תקינה.',
	'EMPTY_SENDER_NAME'		=> 'אתה מוכרח לציין שם.',
	'EMPTY_SUBJECT_EMAIL'	=> 'אתה מוכרח לציין נושא להודעה.',
	'EQUAL_TO'				=> 'שווה ל',

	'FIND_USERNAME_EXPLAIN'	=> 'תשתמש בטופס זה על מנת לחפש משתמשים מסוימים. אינך מוכרח למלא את כל השדות בטופס. השתמש ב־* בתור תו משלים. בהוספת תאריכים אנא השתמש בפורמט <kbd>YYYY-MM-DD</kbd>, לדוגמה <samp>2004-02-29</samp>. תשתמש בתיבות הבחירה על מנת לבחור שם משתמש אחד או יותר (יותר משם משתמש אחד יתקבל בהתאם לטופס עצמו) ותלחץ על הכפתור בחר מסומנים על מנת לחזור לטופס הקודם.',
	'FLOOD_EMAIL_LIMIT'		=> 'אינך יכול לשלוח דואר אלקטרוני נוסף כרגע, אנא נסה שנית מאוחר יותר.',

	'GROUP_LEADER'			=> 'ראש קבוצה',

	'HIDE_MEMBER_SEARCH'	=> 'הסתר טופס חיפוש משתמש',

	'IM_ADD_CONTACT'		=> 'הוסף איש קשר',
	'IM_DOWNLOAD_APP'		=> 'הורדת היישום',
	'IM_JABBER'				=> 'אנא שים לב שיש משתמשים שבחרו שלא לקבל הודעות ללא הזמנה.',
	'IM_JABBER_SUBJECT'		=> 'זוהי הודעה אוטומטית, אנא אל תגיב לה! הודעה מהמשתמש %1$s בשעה %2$s.',
	'IM_MESSAGE'			=> 'הודעתך',
	'IM_NAME'				=> 'שמך',
	'IM_NO_DATA'			=> 'אין פרטי תוכן מתאימים למשתמש זה.',
	'IM_NO_JABBER'			=> 'סליחה, שליחת הודעה באופן ישיר למשתמש Jabber אינה נתמכת במערכת זו, אתה צריך שתוכנת הJabber תהיה מותקנת אצלך במחשב כדי לשלוח הודעה למשתמש זה.',
	'IM_RECIPIENT'			=> 'נמען',
	'IM_SEND'				=> 'שלח הודעה',
	'IM_SEND_MESSAGE'		=> 'שלח הודעה',
	'IM_SENT_JABBER'		=> 'הודעתך ל־%1$s נשלחה בהצלחה.',
	'IM_USER'				=> 'שלח הודעה מיידית.',

	'LAST_ACTIVE'				=> 'פעיל לאחרונה',
	'LESS_THAN'					=> 'פחות מ',
	'LIST_USERS'				=> array(
		1	=> '%d user',
		2	=> '%d users',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'The board requires you to be registered and logged in to view the team listing.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'The board requires you to be registered and logged in to access the memberlist.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'The board requires you to be registered and logged in to search users.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'The board requires you to be registered and logged in to view profiles.',

	'MANAGE_GROUP'			=> 'Manage Group',
	'MORE_THAN'				=> 'More than',

	'NO_CONTACT_FORM'		=> 'The board administrator contact form has been disabled.',
	'NO_CONTACT_PAGE'		=> 'The board administrator contact page has been disabled.',
	'NO_EMAIL'				=> 'You are not permitted to send email to this user.',
	'NO_VIEW_USERS'			=> 'You are not authorised to view the member list or profiles.',

	'ORDER'					=> 'Order',
	'OTHER'					=> 'Other',

	'POST_IP'				=> 'Posted from IP/domain',

	'REAL_NAME'				=> 'Recipient name',
	'RECIPIENT'				=> 'Recipient',
	'REMOVE_FOE'			=> 'Remove foe',
	'REMOVE_FRIEND'			=> 'Remove friend',

	'SELECT_MARKED'			=> 'Select marked',
	'SELECT_SORT_METHOD'	=> 'Select sort method',
	'SENDER_EMAIL_ADDRESS'	=> 'Your email address',
	'SENDER_NAME'			=> 'Your name',
	'SEND_ICQ_MESSAGE'		=> 'Send ICQ message',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber message',
	'SEND_MESSAGE'			=> 'Message',
	'SEND_YIM_MESSAGE'		=> 'Send YIM message',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Last active',
	'SORT_POST_COUNT'		=> 'Post count',

	'USERNAME_BEGINS_WITH'	=> 'Username begins with',
	'USER_ADMIN'			=> 'Administer user',
	'USER_BAN'				=> 'Banning',
	'USER_FORUM'			=> 'User statistics',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
		2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Board presence',
	'USERS_PER_PAGE'		=> 'Users per page',

	'VIEWING_PROFILE'		=> 'Viewing profile - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'View Facebook Profile',
	'VIEW_SKYPE_PROFILE'	=> 'View Skype Profile',
	'VIEW_TWITTER_PROFILE'	=> 'View Twitter Profile',
	'VIEW_YOUTUBE_CHANNEL'	=> 'View YouTube Channel',
	'VIEW_GOOGLEPLUS_PROFILE' => 'View Google+ Profile',
));
