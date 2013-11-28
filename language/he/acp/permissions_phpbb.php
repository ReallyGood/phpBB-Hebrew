<?php
/**
*
* acp_permissions (phpBB Permission Set) [Hebrew]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @author 2008 - phpBB הישראלי - phpBB.co.il
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'פעולות',
	'ACL_CAT_CONTENT'		=> 'תוכן',
	'ACL_CAT_FORUMS'		=> 'פורומים',
	'ACL_CAT_MISC'			=> 'שונות',
	'ACL_CAT_PERMISSIONS'	=> 'הרשאות',
	'ACL_CAT_PM'			=> 'הודעות פרטיות',
	'ACL_CAT_POLLS'			=> 'סקרים',
	'ACL_CAT_POST'			=> 'הודעה',
	'ACL_CAT_POST_ACTIONS'	=> 'פעולות הודעה',
	'ACL_CAT_POSTING'		=> 'פרסום',
	'ACL_CAT_PROFILE'		=> 'פרופיל',
	'ACL_CAT_SETTINGS'		=> 'הגדרות',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'פעולות נושא',
	'ACL_CAT_USER_GROUP'	=> 'משתמשים וקבוצות',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'רשאי לצפות בפרופילים, רשימת המשתמשים, ורשימת המחוברים',
	'ACL_U_CHGNAME'		=> 'רשאי לשנות שם משתמש',
	'ACL_U_CHGPASSWD'	=> 'רשאי לשנות ססמה',
	'ACL_U_CHGEMAIL'	=> 'רשאי לשנות את כתובת הדואר האלקטרוני',
	'ACL_U_CHGAVATAR'	=> 'רשאי לשנות את תמונת התצוגה',
	'ACL_U_CHGGRP'		=> 'רשאי לשנות את קבוצת ברירת המחדל',
	'ACL_U_CHGPROFILEINFO'	=> 'ראשי לשנות מידע בשדות הפרופיל',

	'ACL_U_ATTACH'		=> 'רשאי לצרף קבצים',
	'ACL_U_DOWNLOAD'	=> 'רשאי להוריד קבצים',
	'ACL_U_SAVEDRAFTS'	=> 'רשאי לשמור טיוטות',
	'ACL_U_CHGCENSORS'	=> 'רשאי לנטרל מילים מצונזרות',
	'ACL_U_SIG'			=> 'רשאי להשתמש בחתימה',

	'ACL_U_SENDPM'		=> 'רשאי לשלוח הודעות פרטיות',
	'ACL_U_MASSPM'		=> 'רשאי לשלוח הודעות לכמה משתמשים',
	'ACL_U_MASSPM_GROUP'=> 'רשאי לשלוח הודעות לקבוצות',
	'ACL_U_READPM'		=> 'רשאי לקרוא הודעות פרטיות',
	'ACL_U_PM_EDIT'		=> 'רשאי לערוך הודעות פרטיות עצמיות',
	'ACL_U_PM_DELETE'	=> 'רשאי למחוק הודעות פרטיות מהתיקייה האישית',
	'ACL_U_PM_FORWARD'	=> 'רשאי להעביר הודעות פרטיות',
	'ACL_U_PM_EMAILPM'	=> 'רשאי לשלוח בדואר אלקטרוני הודעות פרטיות',
	'ACL_U_PM_PRINTPM'	=> 'רשאי להדפיס הודעות פרטיות',
	'ACL_U_PM_ATTACH'	=> 'רשאי לצרף קבצים בהודעות פרטיות',
	'ACL_U_PM_DOWNLOAD'	=> 'רשאי להוריד קבצים בהודעות פרטיות',
	'ACL_U_PM_BBCODE'	=> 'רשאי להשתמש בBBcode בהודעות פרטיות',
	'ACL_U_PM_SMILIES'	=> 'רשאי להשתמש בסמיילים בהודעות פרטיות',
	'ACL_U_PM_IMG'		=> 'רשאי להשתמש בתג [img] בהודעות פרטיות',
	'ACL_U_PM_FLASH'	=> 'רשאי להשתמש בתג [flash] בהודעות פרטיות',

	'ACL_U_SENDEMAIL'	=> 'רשאי לשלוח דואר אלקטרוני',
	'ACL_U_SENDIM'		=> 'רשאי לשלוח הודעות פרטיות',
	'ACL_U_IGNOREFLOOD'	=> 'רשאי להתעלם מהגבלת ההצפה',
	'ACL_U_HIDEONLINE'	=> 'רשאי להסתיר מצב מחובר',
	'ACL_U_VIEWONLINE'	=> 'רשאי לראות משתמשים מוסתרים מחוברים',
	'ACL_U_SEARCH'		=> 'רשאי לחפש בפורום',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'רשאי לראות פורום',
	'ACL_F_READ'		=> 'רשאי לקרוא בפורום',
	'ACL_F_SEARCH'		=> 'רשאי לחפש בפורום',
	'ACL_F_SUBSCRIBE'	=> 'רשאי להרשם לפורום',
	'ACL_F_PRINT'		=> 'רשאי להדפיס נושאים',
	'ACL_F_EMAIL'		=> 'רשאי לשלוח בדואר האלקטרוני נושאים',
	'ACL_F_BUMP'		=> 'רשאי להקפיץ נושאים',
	'ACL_F_USER_LOCK'	=> 'רשאי לנעול נושאים של עצמו',
	'ACL_F_DOWNLOAD'	=> 'רשאי להוריד קבצים',
	'ACL_F_REPORT'		=> 'רשאי לדווח על הודעות',

	'ACL_F_POST'		=> 'רשאי לכתוב נושא חדש',
	'ACL_F_STICKY'		=> 'רשאי לכתוב נושאים דביקים',
	'ACL_F_ANNOUNCE'	=> 'רשאי לכתוב הכרזות',
	'ACL_F_REPLY'		=> 'רשאי להגיב לנושאים',
	'ACL_F_EDIT'		=> 'רשאי לערוך את הודעותיו',
	'ACL_F_DELETE'		=> 'רשאי למחוק את הודעותיו לצמיתות',
	'ACL_F_SOFTDELETE'	=> 'רשאי למחוק מחיקה רכה את הודעותיו<br /><em>מנהלים, בעלי ההרשאה לאשר הודעות, יכולים לשחזר שנמחקו מחיקה רכה.</em>',
	'ACL_F_IGNOREFLOOD' => 'רשאי לבטל הגבלת הצפה',
	'ACL_F_POSTCOUNT'	=> 'ספירת הודעות במונה ההודעות<br /><em>שים לב כי הגדרה זו תחול רק על הודעות חדשות.</em>',
	'ACL_F_NOAPPROVE'	=> 'רשאי לכתוב הודעה ללא אישור',

	'ACL_F_ATTACH'		=> 'רשאי לצרף קבצים',
	'ACL_F_ICONS'		=> 'רשאי להשתמש באייקונים בנושאים/הודעות',
	'ACL_F_BBCODE'		=> 'רשאי להשתמש בBBCode',
	'ACL_F_FLASH'		=> 'רשאי להשתמש בתג [flash]',
	'ACL_F_IMG'			=> 'רשאי להשתמש בתג [img]',
	'ACL_F_SIGS'		=> 'רשאי להשתמש בחתימה',
	'ACL_F_SMILIES'		=> 'רשאי להשתמש בסמיילים',

	'ACL_F_POLL'		=> 'רשאי ליצור סקרים',
	'ACL_F_VOTE'		=> 'רשאי להצביע לסקרים',
	'ACL_F_VOTECHG'		=> 'רשאי לשנות את ההצבעה',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'רשאי לערוך הודעות',
	'ACL_M_DELETE'		=> 'רשאי למחוק הודעות לצמיתות',
	'ACL_M_SOFTDELETE'	=> 'רשאי למחוק הודעות מחיקה רכה<br /><em>מנהלים, בעלי ההרשאה לאשר הודעות, יכולים לשחזר שנמחקו מחיקה רכה.</em>',
	'ACL_M_APPROVE'		=> 'רשאי לאשר הודעות',
	'ACL_M_REPORT'		=> 'רשאי לסגור ולמחוק דיווחים',
	'ACL_M_CHGPOSTER'	=> 'רשאי לשנות את מחבר ההודעה',

	'ACL_M_MOVE'	=> 'רשאי להעביר נושאים',
	'ACL_M_LOCK'	=> 'רשאי לנעול נושאים',
	'ACL_M_SPLIT'	=> 'רשאי לפצל נושאים',
	'ACL_M_MERGE'	=> 'רשאי למזג נושאים',

	'ACL_M_INFO'	=> 'רשאי לראות פרטי הודעה',
	'ACL_M_WARN'	=> 'רשאי להזהיר<br /><em>הגדרה זו נקבעת באופן גלובלי בלבד. היא אינה שייכת לפורום מסוים.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'רשאי לנהל חסימות<br /><em>הגדרה זו נקבעת באופן גלובלי בלבד. היא אינה שייכת לפורום מסוים.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'רשאי לשנות הגדרות מערכת/לבדוק עבור עדכונים',
	'ACL_A_SERVER'		=> 'רשאי לשנות שרת/הגדרות תקשורת',
	'ACL_A_JABBER'		=> 'רשאי לשנות הגדרות Jabber',
	'ACL_A_PHPINFO'		=> 'רשאי לראות הגדרות PHP',

	'ACL_A_FORUM'		=> 'רשאי לנהל פורומים',
	'ACL_A_FORUMADD'	=> 'רשאי להוסיף פורומים חדשים',
	'ACL_A_FORUMDEL'	=> 'רשאי למחוק פורומים',
	'ACL_A_PRUNE'		=> 'רשאי לאפס פורומים',

	'ACL_A_ICONS'		=> 'רשאי לשנות סמיילים ואייקונים לנושא/הודעה',
	'ACL_A_WORDS'		=> 'רשאי לשנות צנזורים',
	'ACL_A_BBCODE'		=> 'רשאי להגדיר תגי BBCode',
	'ACL_A_ATTACH'		=> 'רשאי לשנות הגדרות קובץ מצורף',

	'ACL_A_USER'		=> 'רשאי לנהל משתמשים<br /><em>הגדרה זו כוללת גם צפייה בדפדפן המשתמשים בתוך רשימת המשתמשים המחוברים.</em>.</em>',
	'ACL_A_USERDEL'		=> 'רשאי למחוק/לאפס משתמשים',
	'ACL_A_GROUP'		=> 'רשאי לנהל קבוצות',
	'ACL_A_GROUPADD'	=> 'רשאי להוסיף קבוצות חדשות',
	'ACL_A_GROUPDEL'	=> 'רשאי למחוק קבוצות',
	'ACL_A_RANKS'		=> 'רשאי לנהל דרגות',
	'ACL_A_PROFILE'		=> 'רשאי לנהל שדות מותאמים אישית בפרופיל',
	'ACL_A_NAMES'		=> 'רשאי לנהל שמות משתמש לא מורשים',
	'ACL_A_BAN'			=> 'רשאי לנהל חסימות',

	'ACL_A_VIEWAUTH'	=> 'רשאי לראות הרשאות מוסתרות',
	'ACL_A_AUTHGROUPS'	=> 'רשאי לשנות הרשאות לקבוצות מסוימות',
	'ACL_A_AUTHUSERS'	=> 'רשאי לשנות הרשאות למשתמשים מסוימים',
	'ACL_A_FAUTH'		=> 'רשאי לשנות הרשאות מחלקה לפורום',
	'ACL_A_MAUTH'		=> 'רשאי לשנות הרשאות מחלקה למנהלים',
	'ACL_A_AAUTH'		=> 'רשאי לשנות הרשאות מחלקה למנהל הראשי',
	'ACL_A_UAUTH'		=> 'רשאי לשנות הרשאות מחלקה למשתמש',
	'ACL_A_ROLES'		=> 'רשאי לנהל כללים',
	'ACL_A_SWITCHPERM'	=> 'רשאי להשתמש בהרשאות אחרות',

	'ACL_A_EXTENSIONS'	=> 'רשאי לנהל תוספות',
	'ACL_A_VIEWLOGS'	=> 'רשאי לראות מעקב פעולות',
	'ACL_A_CLEARLOGS'	=> 'רשאי למחוק מעקב פעולות',
	'ACL_A_MODULES'		=> 'רשאי לנהל מודולים',
	'ACL_A_LANGUAGE'	=> 'רשאי לנהל חבילות שפה',
	'ACL_A_EMAIL'		=> 'רשאי להשתמש בשולח הדואר האלקטרוני',
	'ACL_A_BOTS'		=> 'רשאי לנהל רובוטים',
	'ACL_A_REASONS'		=> 'רשאי לנהל סיבות דיווח/חסימה',
	'ACL_A_BACKUP'		=> 'רשאי לגבות/לשחזר בסיס נתונים',
	'ACL_A_SEARCH'		=> 'רשאי לנהל חיפוש מאגר נתונים והגדרות',
));
