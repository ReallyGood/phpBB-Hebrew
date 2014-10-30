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

	'CC_EMAIL'				=> 'שלח העתק של הדואר האלקטרוני לעצמך.',
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
		1	=> 'משתמש %d',
		2	=> '%d משתמשים',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'המערכת דורשת ממך להיות רשום ומחובר על מנת לצפות ברשימות הצוות.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'המערכת דורשת ממך להיות רשום ומחובר על מנת לגשת לרשימת משתמשים.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'המערכת דורשת ממך להיות רשום ומחובר על מנת לחפש משתמשים.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'המערכת דורשת ממך להיות רשום ומחובר על מנת לצפות בפרופילים.',

	'MORE_THAN'				=> 'יותר מ',

	'NO_CONTACT_FORM'		=> 'טופס יצירת הקשר עם המנהל הראשי לא פעיל.',
	'NO_CONTACT_PAGE'		=> 'עמוד יצירת הקשר עם המנהל הראשי לא פעיל.',
	'NO_EMAIL'				=> 'אינך מורשה לשלוח דואר אלקטרוני למשתמש זה.',
	'NO_VIEW_USERS'			=> 'אין לך הרשאה לצפות ברשימות משתמשים או בפרופילים.',

	'ORDER'					=> 'סדר',
	'OTHER'					=> 'אחר',

	'POST_IP'				=> 'נשלח מהאייפי\דומיין',

	'REAL_NAME'				=> 'שם הנמען',
	'RECIPIENT'				=> 'נמען',
	'REMOVE_FOE'			=> 'הסר נודניק',
	'REMOVE_FRIEND'			=> 'הסר חבר',

	'SELECT_MARKED'			=> 'בחר מסומנים',
	'SELECT_SORT_METHOD'	=> 'בחר שיטת מיון',
	'SENDER_EMAIL_ADDRESS'	=> 'כתובת הדואר האלקטרוני שלך',
	'SENDER_NAME'			=> 'השם שלך',
	'SEND_ICQ_MESSAGE'		=> 'שלח הודעת ICQ',
	'SEND_IM'				=> 'הודעה מיידית',
	'SEND_JABBER_MESSAGE'	=> 'שלח הודעת Jabber',
	'SEND_MESSAGE'			=> 'הודעה',
	'SEND_YIM_MESSAGE'		=> 'שלח הודעת YIM',
	'SORT_EMAIL'			=> 'דואר אלקטרוני',
	'SORT_LAST_ACTIVE'		=> 'פעיל לאחרונה',
	'SORT_POST_COUNT'		=> 'מונה הודעות',

	'USERNAME_BEGINS_WITH'	=> 'שמות משתמש המתחילים באות',
	'USER_ADMIN'			=> 'נהל משתמש',
	'USER_BAN'				=> 'חסימה',
	'USER_FORUM'			=> 'סטטיסטיקת המשתמש',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'לא נשלחו תזכורות בזמן זה',
		1		=> '%1$d נשלחה תזכורת<br />» %2$s',
		2		=> '%1$d נשלחה תזכורת<br />» %2$s',
	),
	'USER_ONLINE'			=> 'מחובר',
	'USER_PRESENCE'			=> 'נוכחות בפורום',
	'USERS_PER_PAGE'		=> 'משתמשים בעמוד',

	'VIEWING_PROFILE'		=> 'צופה בפרופיל - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'View Facebook Profile',
	'VIEW_SKYPE_PROFILE'	=> 'View Skype Profile',
	'VIEW_TWITTER_PROFILE'	=> 'View Twitter Profile',
	'VIEW_YOUTUBE_CHANNEL'	=> 'View YouTube Channel',
	'VIEW_GOOGLEPLUS_PROFILE' => 'View Google+ Profile',
));
