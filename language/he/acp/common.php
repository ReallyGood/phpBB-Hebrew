<?php
/** 
*
* acp common [Hebrew]
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'מנהלים ראשיים',
	'ACP_ADMIN_LOGS'			=> 'מעקב אחר פעולות מנהלים ראשיים',
	'ACP_ADMIN_ROLES'			=> 'תפקידי מנהלים ראשיים',
	'ACP_ATTACHMENTS'			=> 'קבצים מצורפים',
	'ACP_ATTACHMENT_SETTINGS'	=> 'הגדרות צירוף קבצים',
	'ACP_AUTH_SETTINGS'			=> 'אימות',
	'ACP_AUTOMATION'			=> 'מיכון',
	'ACP_AVATAR_SETTINGS'		=> 'הגדרות סמל אישי',

	'ACP_BACKUP'				=> 'גיבוי',
	'ACP_BAN'					=> 'חסימה',
	'ACP_BAN_EMAILS'			=> 'חסימת כתובות דואר אלקטרוני',
	'ACP_BAN_IPS'				=> 'חסימת כתובות IP',
	'ACP_BAN_USERNAMES'			=> 'חסימת שמות משתמשים',
	'ACP_BBCODES'				=> 'תגי BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'הגדרות מערכת',
	'ACP_BOARD_FEATURES'		=> 'מאפייני מערכת',
	'ACP_BOARD_MANAGEMENT'		=> 'ניהול מערכת',
	'ACP_BOARD_SETTINGS'		=> 'הגדרות מערכת',
	'ACP_BOTS'					=> 'עכבישים/רובוטים',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',
	'ACP_CAT_CUSTOMISE'			=> 'Customise',

	'ACP_CAT_DATABASE'			=> 'בסיס נתונים',
	'ACP_CAT_DOT_MODS'			=> 'מודים',
	'ACP_CAT_FORUMS'			=> 'פורומים',
	'ACP_CAT_GENERAL'			=> 'כללי',
	'ACP_CAT_MAINTENANCE'		=> 'תחזוקה',
	'ACP_CAT_PERMISSIONS'		=> 'הרשאות',
	'ACP_CAT_POSTING'			=> 'הודעות',
	'ACP_CAT_STYLES'			=> 'עיצובים',
	'ACP_CAT_SYSTEM'			=> 'מערכת',
	'ACP_CAT_USERGROUP'			=> 'משתמשים וקבוצות',
	'ACP_CAT_USERS'				=> 'משתמשים',
	'ACP_CLIENT_COMMUNICATION'	=> 'תקשורת לקוחות',
	'ACP_COOKIE_SETTINGS'		=> 'הגדרות עוגייה',
	'ACP_CRITICAL_LOGS'			=> 'מעקב אחר שגיאות',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'שדות פרופיל מותאמים אישית',
	
	'ACP_DATABASE'				=> 'ניהול בסיס נתונים',
	'ACP_DISALLOW'				=> 'לא מורשה',
	'ACP_DISALLOW_USERNAMES'	=> 'שמות משתמשים לא מורשים',
	
	'ACP_EMAIL_SETTINGS'		=> 'הגדרות דואר אלקטרוני',
	'ACP_EXTENSION_GROUPS'		=> 'Manage attachment extension groups',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Extension management',
	'ACP_EXTENSIONS'			=> 'Extensions',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'הרשאות לפי פורומים',
	'ACP_FORUM_LOGS'				=> 'מעקב אחר פעולות בפורומים',
	'ACP_FORUM_MANAGEMENT'			=> 'ניהול פורומים',
	'ACP_FORUM_MODERATORS'			=> 'מנהלי פורומים',
	'ACP_FORUM_PERMISSIONS'			=> 'הרשאות פורומים',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'העתק הרשאות פורום',
	'ACP_FORUM_ROLES'				=> 'תפקידי פורומים',

	'ACP_GENERAL_CONFIGURATION'		=> 'הגדרות כלליות',
	'ACP_GENERAL_TASKS'				=> 'משימות כלליות',
	'ACP_GLOBAL_MODERATORS'			=> 'מנהלים גלובליים',
	'ACP_GLOBAL_PERMISSIONS'		=> 'הרשאות גלובליות',
	'ACP_GROUPS'					=> 'קבוצות',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'הרשאות פורום של קבוצה',
	'ACP_GROUPS_MANAGE'				=> 'ניהול קבוצות',
	'ACP_GROUPS_MANAGEMENT'			=> 'ניהול קבוצה',
	'ACP_GROUPS_PERMISSIONS'		=> 'הרשאות של קבוצה',
	'ACP_GROUPS_POSITION'			=> 'Manage group positions',
	
	'ACP_ICONS'					=> 'סמלי נושאים',
	'ACP_ICONS_SMILIES'			=> 'סמלי/סמיילים של נושאים',
	'ACP_INACTIVE_USERS'		=> 'משתמשים לא פעילים',
	'ACP_INDEX'					=> 'עמוד ניהול ראשי',
	
	'ACP_JABBER_SETTINGS'		=> 'הגדרות Jabber',
	
	'ACP_LANGUAGE'				=> 'ניהול שפות',
	'ACP_LANGUAGE_PACKS'		=> 'חבילות שפה',
	'ACP_LOAD_SETTINGS'			=> 'הגדרות כלליות',
	'ACP_LOGGING'				=> 'מתחבר',
	
	'ACP_MAIN'					=> 'עמוד ניהול ראשי',
	'ACP_MANAGE_ATTACHMENTS'			=> 'ניהול קבצים מצורפים',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'כאן אתה יכול לנהל ולמחוק קבצים שצורפו להודעות ולהודעות פרטיות.',
	
	'ACP_MANAGE_EXTENSIONS'		=> 'ניהול סיומות קבצים מצורפים',
	'ACP_MANAGE_FORUMS'			=> 'ניהול פורומים',
	'ACP_MANAGE_RANKS'			=> 'ניהול דירוגים',
	'ACP_MANAGE_REASONS'		=> 'ניהול סיבות דיווח/חסימה',
	'ACP_MANAGE_USERS'			=> 'ניהול משתמשים',
	'ACP_MASS_EMAIL'			=> 'שולח הדואר',
	'ACP_MESSAGES'				=> 'הודעות',
	'ACP_MESSAGE_SETTINGS'		=> 'הגדרות הודעות פרטיות',
	'ACP_MODULE_MANAGEMENT'		=> 'ניהול מודולים',
	'ACP_MOD_LOGS'				=> 'מעקב אחר פעולות מנהלים',
	'ACP_MOD_ROLES'				=> 'תפקידי מנהלים',
	
	'ACP_NO_ITEMS'				=> 'אין פריטים כרגע.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'קבצים מצורפים ללא שולח',
	
	'ACP_PERMISSIONS'			=> 'הרשאות',
	'ACP_PERMISSION_MASKS'		=> 'משימות הרשאה',
	'ACP_PERMISSION_ROLES'		=> 'תפקידי הרשאה',
	'ACP_PERMISSION_TRACE'		=> 'מעקב הרשאה',
	'ACP_PHP_INFO'				=> 'פרטי PHP',
	'ACP_POST_SETTINGS'			=> 'הגדרות שליחה',
	'ACP_PRUNE_FORUMS'			=> 'איפוס פורומים',
	'ACP_PRUNE_USERS'			=> 'איפוס משתמשים',
	'ACP_PRUNING'				=> 'איפוס',
	
	'ACP_QUICK_ACCESS'			=> 'הרשאה מהירה',
	
	'ACP_RANKS'					=> 'דירוגים',
	'ACP_REASONS'				=> 'סיבות דיווח/חסימה',
	'ACP_REGISTER_SETTINGS'		=> 'הגדרות רישום משתמש',

	'ACP_RESTORE'				=> 'שחזור',
	'ACP_FEED'					=> 'ניהול הזנות',
	'ACP_FEED_SETTINGS'			=> 'הגדרת הזנות',

	'ACP_SEARCH'				=> 'הגדרות חיפוש',
	'ACP_SEARCH_INDEX'			=> 'טבלאות חיפוש',
	'ACP_SEARCH_SETTINGS'		=> 'הגדרות חיפוש',

	'ACP_SECURITY_SETTINGS'		=> 'הגדרות אבטחה',
	'ACP_SEND_STATISTICS'		=> 'שלח מידע סטטיסטי',
	'ACP_SERVER_CONFIGURATION'	=> 'הגדרות שרת',
	'ACP_SERVER_SETTINGS'		=> 'הגדרות שרת',
	'ACP_SIGNATURE_SETTINGS'	=> 'הגדרות חתימה',
	'ACP_SMILIES'				=> 'סמיילים',
	'ACP_STYLE_MANAGEMENT'		=> 'ניהול עיצובים',
	'ACP_STYLES'				=> 'עיצובים',
	'ACP_STYLES_CACHE'			=> 'Purge Cache',
	'ACP_STYLES_INSTALL'		=> 'Install Styles',
	'ACP_SUBMIT_CHANGES'		=> 'שלח שינויים',
	
	'ACP_TEMPLATES'				=> 'תבניות',
	'ACP_THEMES'				=> 'סגנונות',
	
	'ACP_UPDATE'					=> 'עדכון',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'הרשאות פורום של משתמש',
	'ACP_USERS_LOGS'				=> 'יומן פעולות משתמש',
	'ACP_USERS_PERMISSIONS'			=> 'הרשאות משתמש',
	'ACP_USER_ATTACH'				=> 'קבצים מצורפים',
	'ACP_USER_AVATAR'				=> 'סמל אישי',
	'ACP_USER_FEEDBACK'				=> 'משוב',
	'ACP_USER_GROUPS'				=> 'קבוצות',
	'ACP_USER_MANAGEMENT'			=> 'ניהול משתמשים',
	'ACP_USER_OVERVIEW'				=> 'סקירה כללית',
	'ACP_USER_PERM'					=> 'הרשאות',
	'ACP_USER_PREFS'				=> 'העדפות',
	'ACP_USER_PROFILE'				=> 'פרופיל',
	'ACP_USER_RANK'					=> 'דירוג',
	'ACP_USER_ROLES'				=> 'תפקידי משתמשים',
	'ACP_USER_SECURITY'				=> 'אבטחת משתמשים',
	'ACP_USER_SIG'					=> 'חתימה',

	'ACP_USER_WARNINGS'				=> 'אזהרות',

	'ACP_VC_SETTINGS'					=> 'אמצעים נגד בוטים',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'תצוגה מקדימה לCAPTCHA',
	'ACP_VERSION_CHECK'					=> 'בדוק עדכונים',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'הצגת הרשאות ניהול ראשי',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'הצגת הרשאות ניהול פורום',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'הצגת הרשאות לפי פורום',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'הצגת הרשאות ניהול גלובלי',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'הצגת הרשאות לפי משתמש',
	
	'ACP_WORDS'					=> 'צנזור מילים',

	'ACTION'				=> 'פעולה',
	'ACTIONS'				=> 'פעולות',
	'ACTIVATE'				=> 'הפעל',
	'ADD'					=> 'הוסף',
	'ADMIN'					=> 'ניהול ראשי',
	'ADMIN_INDEX'			=> 'עמוד ניהול ראשי',
	'ADMIN_PANEL'			=> 'לוח בקרה למנהלים ראשיים',
	'ADM_LOGOUT'			=> 'התנתקות מלוח הבקרה',
	'ADM_LOGGED_OUT'		=> 'התנתקת בהצלחה מלוח הבקרה למנהלים ראשיים',

	'BACK'					=> 'חזור',

	'COLOUR_SWATCH'			=> 'מאגר צבעים לשימוש בטוח ברשת',
	'CONFIG_UPDATED'		=> 'ההגדרות עודכנו בהצלחה.',

	'DEACTIVATE'				=> 'הפסק',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'הנתיב שהוזן “%s” אינו קיים.',
	'DIRECTORY_NOT_DIR'			=> 'הנתיב שהוזן “%s” אינו תיקייה.',
	'DIRECTORY_NOT_WRITABLE'	=> 'הנתיב שהוזן “%s” אינו ניתן לכתיבה.',
	'DISABLE'					=> 'כבה',
	'DOWNLOAD'					=> 'הורד',
	'DOWNLOAD_AS'				=> 'הורד בתור',
	'DOWNLOAD_STORE'			=> 'הורד או אחסן קובץ',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'אתה יכול להוריד ישירות את הקובץ או לשמור אותו בתיקייה <samp>store/</samp>.',
	'DOWNLOADS'          		=> 'הורדות',

	'EDIT'					=> 'ערוך',
	'ENABLE'				=> 'הפעל',
	'EXPORT_DOWNLOAD'		=> 'הורד',
	'EXPORT_STORE'			=> 'אחסן',

	'FILES_GONE'			=> 'Some of the attachments you selected for deletion do not exist. They may have been already deleted. Attachments that did exist were deleted.',
	'FILES_STATS_WRONG'		=> 'Your files statistics are probably inaccurate and need to be resynchronised. Actual values: number of attachments = %1$d, total size of attachments = %2$s.',

	'GENERAL_OPTIONS'		=> 'אפשרויות כלליות',
	'GENERAL_SETTINGS'		=> 'הגדרות כלליות',
	'GLOBAL_MASK'			=> 'משימת הרשאה גלובלית',

	'INSTALL'				=> 'התקן',
	'IP'					=> 'IP של משתמש',
	'IP_HOSTNAME'			=> 'כתובות IP או שמות שרתים',

	'LOAD_NOTIFICATIONS'			=> 'Display Notifications',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Display the notifications list on every page (typically in the header).',
	'LOGGED_IN_AS'			=> 'אתה מחובר בתור:',
	'LOGIN_ADMIN'			=> 'כדי לנהל את המערכת אתה חייב להיות משתמש מורשה.',
	'LOGIN_ADMIN_CONFIRM'	=> 'כדי לנהל את המערכת אתה חייב לאמת את עצמך מחדש.',
	'LOGIN_ADMIN_SUCCESS'	=> 'אומתת בהצלחה ותועבר כעת ללוח הבקרה למנהלים ראשיים.',
	'LOOK_UP_FORUM'			=> 'בחר פורום',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'אתה יכול לבחור יותר מפורום אחד.',

	'MANAGE'				=> 'ניהול',
	'MENU_TOGGLE'			=> 'הסתר או הצג את התפריט הצדדי',
	'MORE'					=> 'עוד',			// Not used at the moment
	'MORE_INFORMATION'		=> 'מידע נוסף »',
	'MOVE_DOWN'				=> 'העבר למטה',
	'MOVE_UP'				=> 'העבר למעלה',

	'NOTIFY'				=> 'הודעה',
	'NO_ADMIN'				=> 'אינך מורשה לנהל מערכת זו.',
	'NO_EMAILS_DEFINED'		=> 'לא נמצאו כתובות דואר אלקטרוני חוקיות.',
	'NO_FILES_TO_DELETE'	=> 'הקבצים המצורפים שבחרת למחיקה לא קיימים.',
	'NO_PASSWORD_SUPPLIED'	=> 'אתה צריך להזין את ססמתך כדי לגשת ללוח הבקרה למנהלים ראשיים.',	

	'OFF'					=> 'כבוי',
	'ON'					=> 'פעיל',

	'PARSE_BBCODE'						=> 'פרק BBCode',
	'PARSE_SMILIES'						=> 'פרק סמיילים',
	'PARSE_URLS'						=> 'פרק קישורים',
	'PERMISSIONS_TRANSFERRED'			=> 'ההרשאות עוברו',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'יש לך כרגע את ההרשאות מ־%1$s. אתה יכול לגלוש במערכת עם הרשאות משתמש זה, אבל לא לגשת ללוח הבקרה למנהלים ראשיים מפני שהרשאות הניהול הראשי לא הועברו. אתה יכול <a href="%2$s"><strong>לחזור להרשאות שלך שנקבעו</strong></a> בכל זמן נתון.',
	'PROCEED_TO_ACP'					=> '%sהמשך ללוח הבקרה למנהלים ראשיים%s',

	'REMIND'							=> 'הזכר',
	'RESYNC'							=> 'סנכרון מחדש',
	'RESYNC_FILES_STATS'				=> 'Resynchronise files statistics',
	'RESYNC_FILES_STATS_EXPLAIN'		=> 'Recalculates the total number and size of files attached to posts and private messages.',
	'RETURN_TO'							=> 'חזור אל…',

	'SELECT_ANONYMOUS'		=> 'בחר משתמש אורח',
	'SELECT_OPTION'			=> 'בחר אפשרות',

	'SETTING_TOO_LOW'		=> 'הערך שהוזן עבור ההגדרה “%1$s” קטן מדי. הערך המינימלי המאושר הוא %2$d.',
	'SETTING_TOO_BIG'		=> 'הערך שהוזן עבור ההגדרה “%1$s” גבוה מדי. הערך המקסימלי המאושר הוא %2$d.',
	'SETTING_TOO_LONG'		=> 'הערך שהוזן עבור ההגדרה “%1$s” ארוך מדי. הערך המקסימלי המאושר הוא %2$d.',
	'SETTING_TOO_SHORT'		=> 'הערך שהוזן עבור ההגדרה “%1$s” קצר מדי. הערך המינימלי המאושר הוא %2$d.',
	'SHOW_ALL_OPERATIONS'	=> 'הצג את כל הפעולות',

	'TOTAL_SIZE'      		=> 'Total size',

	'UCP'					=> 'לוח בקרה למשתמש',
	'USERNAMES_EXPLAIN'		=> 'הכנס כל שם משתמש בשורה נפרדת.',
	'USER_CONTROL_PANEL'	=> 'לוח בקרה למשתמש',

	'WARNING'				=> 'אזהרה',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'עמוד זה רושם את המידע לגבי גרסת PHP המותקנת על שרת זה. הוא כולל פרטים על מודולים טעונים, משתנים זמינים והגדרות ברירת מחדל. מידע זה יכול להיות שימושי בעת בעיות אבחון. שים לב שכמה חברות אחסון יגבילו את המידע המוצג כאן מטעמי ביטחון. מומלץ לא למסור שום פרטים מעמוד זה מלבד כאשר אתה מתבקש על־ידי <a href="http://www.phpbb.co.il/about.php">חברי הצוות הרשמיים</a> בפורומי התמיכה.',

	'NO_PHPINFO_AVAILABLE'	=> 'לא ניתן לגלות מידע על הגדרות PHP. Phpinfo() כבוי מטעמי ביטחון.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'עמוד זה רושם את כל הפעולות אשר בוצעו על־ידי המנהלים הראשיים של המערכת. ניתן למיין לפי שם משתמש, תאריך, כתובת IP או פעולה. אם קיימות ההרשאות המתאימות, ניתן להסיר פעולות מסוימות או את מעקב הפעולות בשלמותו.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'עמוד זה רושם את כל הפעולות אשר התבצעו על־ידי המערכת עצמה. מעקב הפעולות מספק מידע אשר יוכל לשמש לפתירת בעיות מסוימות, כגון אי־מסירת הודעות דואר אלקטרוני. ניתן למיין לפי שם משתמש, תאריך, כתובת IP או פעולה. אם קיימות ההרשאות המתאימות, ניתן להסיר פעולות מסוימות או את מעקב הפעולות בשלמותו.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'עמוד זה רושם את כל הפעולות אשר התבצעו בפורומים, נושאים והודעות וגם פעולות שבוצעו על משתמשים על־ידי מנהלים, לרבות חסימתם. ניתן למיין לפי שם משתמש, תאריך, כתובת IP או פעולה. אם קיימות ההרשאות המתאימות, ניתן להסיר פעולות מסוימות או את מעקב הפעולות בשלמותו.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'עמוד זה רושם את כל הפעולות שבוצעו על־ידי משתמשים או על משתמשים (דיווחים, אזהרות והודעות משתמש).',
	'ALL_ENTRIES'				=> 'כל הרישומים',

	'DISPLAY_LOG'	=> 'הצג רישומים קודמים',

	'NO_ENTRIES'	=> 'אין רישומי מעקב פעולות בתקופה זו.',

	'SORT_IP'		=> 'כתובת IP',
	'SORT_DATE'		=> 'תאריך',
	'SORT_ACTION'	=> 'פעולה',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'תודה שבחרת ב־phpBB3 בתור מערכת הפורומים שלך. מסך זה יספק לך סקירה כללית מהירה של כל הסטטיסטיקות השונות של המערכת. הקישורים בתפריט הימני מאפשרים לך לנהל כל חלק במערכת. כל עמוד מכיל את ההוראות שלו על כיצד להשתמש בכלים.',
	'ADMIN_LOG'					=> 'פעולות מנהלים ראשיים הרשומות במעקב הפעולות',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'חלק זה מספק לך סקירה כללית של חמשת הפעולות האחרונות אשר התבצעו על־ידי המנהלים הראשיים של המערכת. עותק מלא של מעקב הפעולות ניתן לצפייה מהקישור הבא:',
	'AVATAR_DIR_SIZE'			=> 'גודל תיקיית הסמלים האישיים',

	'BOARD_STARTED'		=> 'תאריך התקנת המערכת',
	'BOARD_VERSION'		=> 'גרסת המערכת',

	'DATABASE_SERVER_INFO'	=> 'שרת בסיס נתונים',
	'DATABASE_SIZE'			=> 'גודל בסיס נתונים',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'פנקציית overloading הוגדרה לא נכון',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> חייב להיות מוגדר ל0 או ל4. אתה יכול לבדוק את הערך הנוכחי בעמוד <samp>פרטי PHP</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'קידוד תכונת השקיפות הוגדר לא נכון',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> חייב להיות מוגדר ל0. אתה יכול לבדוק את הערך הנוכחי בעמוד <samp>פרטי PHP</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'ממיר תכונת הקלט של HTTP הוגדר לא נכון',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> חייב להיות מוגדר ל־<samp>pass</samp>. אתה יכול לבדוק את הערך הנוכחי בעמוד <samp>פרטי PHP</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'ממיר תכונת הפלט של HTTP הוגדר לא נכון',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> חייב להיות מוגדר ל־<samp>pass</samp>. אתה יכול לבדוק את הערך הנוכחי בעמוד <samp>פרטי PHP</samp>.',

	'FILES_PER_DAY'		=> 'קבצים מצורפים ליום',
	'FORUM_STATS'		=> 'סטטיסטיקות המערכת',

	'GZIP_COMPRESSION'	=> 'דחיסת GZip',

	'NOT_AVAILABLE'		=> 'לא זמין',
	'NUMBER_FILES'		=> 'מספר קבצים מצורפים',
	'NUMBER_POSTS'		=> 'מספר הודעות',
	'NUMBER_TOPICS'		=> 'מספר נושאים',
	'NUMBER_USERS'		=> 'מספר משתמשים',
	'NUMBER_ORPHAN'		=> 'קבצים מצורפים ללא שולח',
	
	'PHP_VERSION_OLD'	=> 'גרסת ה־PHP שבשרת זה לא תתמך על ידי גרסאות עתידיות של phpBB. %sפרטים%s',
	'POSTS_PER_DAY'		=> 'הודעות ליום',

	'PURGE_CACHE'			=> 'טיהור המטמון',
	'PURGE_CACHE_CONFIRM'	=> 'האם אתה בטוח שברצונך לטהר את המטמון?',
	'PURGE_CACHE_EXPLAIN'	=> 'מטהר את כל הרכיבים הקשורים למטמון, אשר כוללים כל קבצי ערכה או שאילתות אשר במטמון.',
	'PURGE_CACHE_SUCCESS'	=> 'המטמון טוהר בהצלחה.',

	'PURGE_SESSIONS'			=> 'טיהור כל החיבורים',
	'PURGE_SESSIONS_CONFIRM'	=> 'האם אתה בטוח שברצונך לטהר את כל החיבורים? כל המשתמשים ינותקו.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'טיהור כל החיבורים. זה ינתק את כל המשתמשים על ידי קיצוץ טבלת החיבורים.',
	'PURGE_SESSIONS_SUCCESS'	=> 'החיבורים טוהרו בהצלחה.',

	'RESET_DATE'					=> 'איפוס תאריך התקנת המערכת',
	'RESET_DATE_CONFIRM'			=> 'אתה בטוח שאתה רוצה לאפס את תאריך התקנת המערכת?',
	'RESET_DATE_SUCCESS'				=> 'תאריך התקנת המערכת אופס',
	'RESET_ONLINE'					=> 'איפוס מספר המשתמשים הרב ביותר שהיה מחובר בו זמנית',
	'RESET_ONLINE_CONFIRM'			=> 'אתה בטוח שאתה רוצה לאפס את מספר המשתמשים הרב ביותר שהיה מחובר בו זמנית?',
	'RESET_ONLINE_SUCCESS'				=> 'Most users ever online reset',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Are you sure you wish to resynchronise files statistics?',
	'RESYNC_POSTCOUNTS'				=> 'סנכרון מוני ההודעות מחדש',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'רק הודעות קיימות יילקחו בחשבון. הודעות שאופסו לא יספרו.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'אתה בטוח שאתה רוצה לסנכרן מחדש את מוני ההודעות?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Resynchronised post counts',
	'RESYNC_POST_MARKING'			=> 'סנכרון מחדש נושאים מסומנים',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'אתה בטוח שאתה רוצה לסנכרן מחדש את הנושאים המסומנים?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'ראשית מבטל את סימון כל הנושאים ואז מסמן נושאים כראוי אשר נראתה בהם כל פעילות במשך שש החודשים האחרונים.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Resynchronised dotted topics',
	'RESYNC_STATS'					=> 'סנכרון מחדש סטטיסטיקות',
	'RESYNC_STATS_CONFIRM'			=> 'אתה בטוח שאתה רוצה לסנכרן מחדש את הסטטיסטיקות?',
	'RESYNC_STATS_EXPLAIN'			=> 'מחשב מחדש את המספר הכולל של ההודעות, הנושאים, המשתמשים והקבצים.',
	'RESYNC_STATS_SUCCESS'			=> 'Resynchronised statistics',
	'RUN'							=> 'הרץ כעת',

	'STATISTIC'					=> 'סטטיסטיקה',
	'STATISTIC_RESYNC_OPTIONS'	=> 'סנכרון מחדש או איפוס הסטטיסטיקות',

	'TIMEZONE_INVALID'	=> 'The timezone you selected is invalid.',
	'TIMEZONE_SELECTED'	=> '(currently selected)',

	'TOPICS_PER_DAY'	=> 'נושאים ליום',

	'UPLOAD_DIR_SIZE'	=> 'גודל הקבצים המצורפים',
	'USERS_PER_DAY'		=> 'משתמשים ליום',

	'VALUE'					=> 'ערך',
	'VERSIONCHECK_FAIL'			=> 'נכשל הניסיון לקבל מידע על הגרסה האחרונה.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'בדיקת גרסה מחדש',
	'VIEW_ADMIN_LOG'		=> 'ראה מעקב אחר פעולות מנהלים ראשיים',
	'VIEW_INACTIVE_USERS'	=> 'ראה משתמשים לא פעילים',

	'WELCOME_PHPBB'			=> 'ברוך הבא ל־phpBB3',
	'WRITABLE_CONFIG'		=> 'קובץ ההגדרות שלך (config.php) ניתן לכתיבה. אנחנו ממליצים לשנות את ההרשאות ל־640 או לפחות ל־644 (לדוגמה: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'תאריך ללא פעילות',
	'INACTIVE_REASON'				=> 'סיבה',
	'INACTIVE_REASON_MANUAL'		=> 'החשבון הופסק על־ידי מנהל ראשי',
	'INACTIVE_REASON_PROFILE'		=> 'פרטי הפרופיל שונו',
	'INACTIVE_REASON_REGISTER'		=> 'חשבון שנרשם לאחרונה',
	'INACTIVE_REASON_REMIND'		=> 'חשבון המשתמש הוכרח לקבל הפעלה מחדש',
	'INACTIVE_REASON_UNKNOWN'		=> 'לא ידוע',
	'INACTIVE_USERS'				=> 'משתמשים לא פעילים',
	'INACTIVE_USERS_EXPLAIN'		=> 'זוהי רשימת המשתמשים הרשומים אשר חשבונם אינו פעיל. אתה יכול להפעיל, למחוק או להזכיר (על־ידי שליחת דואר אלקטרוני) למשתמשים אלו אם תרצה.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'זוהי רשימת 10 המשתמשים האחרונים שנרשמו אשר חשבונם אינו פעיל. חשבונות לא פעילים או בגלל שהפעלת חשבון הופעלה בהגדרות רישום משתמש וחשבונות משתמשים אלו טרם הופעלו, או בגלל שחשבונות אלו בוטלו. רשימה מלאה זמינה על ידי לחיצה על הקישור שמופיע מטה, משם אתה יכול להפעיל, למחוק או להזכיר (על־ידי שליחת דואר אלקטרוני) למשתמשים אלו אם תרצה.',
	'NO_INACTIVE_USERS'	=> 'אין משתמשים לא פעילים',

	'SORT_INACTIVE'		=> 'תאריך ללא פעילות',
	'SORT_LAST_VISIT'	=> 'ביקור אחרון',
	'SORT_REASON'		=> 'סיבה',
	'SORT_REG_DATE'		=> 'תאריך הרשמה',
	'SORT_LAST_REMINDER'=> 'הוזכר לאחרונה',
	'SORT_REMINDER'		=> 'התזכורת נשלחה',

	'USER_IS_INACTIVE'		=> 'המשתמש לא פעיל',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'אנא שלח מידע אודות השרת שלך והגדרות המערכת לphpBB בשביל ניתוח סטטיסטי. כל מידע שיכול לזהות אותך או את האתר שלך הוסר — המידע כולו <strong>אנונימי</strong>. אנו מבססים החלטות אודות גרסאות עתדיות של phpBB על בסיס מידע זה. הסטטיסטיקות יהיו זמינות לציבור. אנו גם משתפים מידע זה עם פרויקט PHP, שפת התיכנות עליה phpBB בנויה.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'בשימוש בכפתור מתחת אתה יכול להציג את כל הערכים שישלחו.',
	'DONT_SEND_STATISTICS'		=> 'חזור ללוח הבקרה למנהל הראשי אם אתה לא רוצה לשלוח מידע סטטיסטי לphpBB.',
	'GO_ACP_MAIN'				=> 'עבור לעמוד הראשי בלוח הבקרה למנהל הראשי',
	'HIDE_STATISTICS'			=> 'הסתר פרטים',
	'SEND_STATISTICS'			=> 'שלח מידע סטטיסטי',
	'SHOW_STATISTICS'			=> 'הצג פרטים',
	'THANKS_SEND_STATISTICS'	=> 'תודה ששלחת את המידע.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>הוסיף או ערך הרשאות משתמש של משתמשים</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>הוסיף או ערך הרשאות משתמש של קבוצות</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>הוסיף או ערך הרשאות מנהל גלובלי של משתמשים</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>הוסיף או ערך הרשאות מנהל גלובלי של קבוצות</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>הוסיף או ערך הרשאות מנהל ראשי של משתמשים</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>הוסיף או ערך הרשאות מנהל ראשי של קבוצות</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>הוסיף או ערך מנהלים ראשיים</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>הוסיף או ערך מנהלים גלובליים</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>הוסיף או ערך הרשאת פורום של משתמשים</strong> מ־%1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>הוסיף או ערך הרשאת מנהל פורום של משתמשים</strong> מ־%1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>הוסיף או ערך הרשאת פורום של קבוצות</strong> מ־%1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>הוסיף או ערך הרשאת מנהל פורום של קבוצות</strong> מ־%1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>הוסיף או ערך מנהלים</strong> מ־%1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>הוסיף או ערך הרשאות פורומים</strong> מ־%1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>הסיר מנהלים ראשיים</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>הסיר מנהלים גלובליים</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>הסיר מנהלים</strong> מ־%1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>הסיר הרשאות פורום משתמש/קבוצה</strong> מ־%1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>הרשאות הועברו מ</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>שיחזר הרשאות לאחר שימוש בהרשאות של המשתמש</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>ניסיון התחברות לניהול ראשי נכשל</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>ניסיון התחברות לניהול ראשי הצליח</strong>',
	
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>הסיר קבצים מצורפים של משתמש</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>הוסיף או ערך סיומת קבצים מצורפים</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>הסיר סיומת קבצים מצורפים</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>עדכן סיומת קבצים מצורפים</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>הוסיף קבוצת סיומות</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>ערך קבוצת סיומות</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>הסיר קבוצת סיומות</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>קובץ ללא שולח צורף להודעה</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>קבצים ללא שולח נמחקו</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>שחרר משתמש מחסימה</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>שחרר IP מחסימה</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL'	=> '<strong>שחרר דואר אלקטרוני מחסימה</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>חסם משתמש</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>חסם IP</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>חסם דואר אלקטרוני</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>שחרר חסימת משתמש</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>שחרר חסימת IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>שחרר חסימת דואר אלקטרוני</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>הוסיף תג BBCode חדש</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>ערך תג BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>מחק תג BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>נוסף בוט חדש</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>מחק בוט</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>בוט קיים עודכן</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>ניקה מעקב אחר פעולות מנהלים ראשיים</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>ניקה מעקב אחר שגיאות</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>ניקה מעקב אחר פעולות מנהלים</strong>',
	'LOG_CLEAR_USER'		=> '<strong>ניקה מעקב אחר פעולות משתמש</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>ניקה מעקב אחר פעולות משתמשים</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>שינה הגדרות צירוף קבצים</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>שינה הגדרות אימות</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>שינה הגדרות סמל אישי</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>שנה הגדרות עוגייה</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>שינה הגדרות דואר אלקטרוני</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>שינה מאפייני מערכת</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>שינה הגדרות כלליות</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>שינה הגדרות הודעות פרטיות</strong>',
	'LOG_CONFIG_POST'			=> '<strong>שינה הגדרות שליחה</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>שינה הגדרות רישום משתמש</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>שינה הגדות הפצה להזנות</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>שינה הגדרות חיפוש</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>שינה הגדרות אבטחה</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>שינה הגדרות שרת</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>שינה הגדרות מערכת</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>שינה הגדרות חתימה</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>שינה הגדרות אנטי־בוט</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>אישר נושא</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>משתמש הקפיץ נושא</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>מחק הודעה “%1$s” שנכתבה על ידי</strong><br />» %2$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>מחק נושא מוצל</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>מחק נושא “%1$s” שנכתב על ידי</strong><br />» %2$s',
	'LOG_FORK'					=> '<strong>העתיק נושא</strong><br />» מ%s',
	'LOG_LOCK'					=> '<strong>נעל נושא</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>נעל הודעה</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>מיזג הודעות</strong> לתוך נושא<br />» %s',
	'LOG_MOVE'					=> '<strong>העביר נושא</strong><br />» מ%1$s ל%2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>סגר דיווח הודעה פרטית</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>מחק דיווח הודעה פרטית</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>אישר הודעה</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>דחה הודעה “%1$s” בגלל הסיבה הבאה</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>ערך הודעה “%1$s” אשר נכתבה על־ידי</strong><br />» %2$s',
	'LOG_POST_RESTORED'			=> '<strong>שיחזר הודעה</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>סגר דיווח</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>מחק דיווח</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>שיחזר נושא “%1$s” שנכתב על ידי</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>מחק מחיקה רכה הודעה “%1$s” שנכתב על ידי</strong><br />» %2$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>מחק מחיקה רכה נושא “%1$s” שנכתב על ידי</strong><br />» %2$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>העביר הודעות מפוצלות</strong><br />» אל %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>פיצל הודעות</strong><br />» מ%s',

	'LOG_TOPIC_APPROVED'		=> '<strong>אישר נושא</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>שיחזר נושא</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>דחה נושא “%1$s” בגלל הסיבה הבאה</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>סינכרן מחדש מוני נושאים</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>שינה סוג נושא</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>פתח נושא</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>פתח הודעה</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>הוסיף שם משתמש לא מורשה</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>מחק שם משתמש לא מורשה</strong>',

	'LOG_DB_BACKUP'			=> '<strong>בסיס נתונים גובה</strong>',
	'LOG_DB_DELETE'			=> '<strong>מחק גיבוי בסיס נתונים</strong>',
	'LOG_DB_RESTORE'		=> '<strong>שחזר גיבוי בסיס נתונים</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>שחרר IP/שם שרת מרשימת הורדה</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>הוסיף IP/שם שרת לרשימת הורדה</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>הסיר IP/שם שרת מרשימת הורדה</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>שגיאת Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>שגיאת דואר אלקטרוני</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>יצר פורום חדש</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>העתיק הרשאות פורום</strong> מ־%1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>מחק פורום</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>מחק פורום ואת תתי־הפורומים שלו</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>מחק פורום והעביר תתי־פורומים</strong> אל %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>מחק פורום והעביר הודעות </strong> אל %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>מחק פורום ואת תתי־הפורומים שלו, העביר הודעות</strong> אל %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>מחק פורום, העביר הודעות</strong> אל %1$s <strong>ותתי־פורומים</strong> אל %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>מחק פורום וההודעות שלו</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>מחק פורום, ההודעות ותתי־הפורומים שלו</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>מחק פורום וההודעות שלו, העביר תתי־פורומים</strong> אל %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>ערך פרטי פורום</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>העביר פורום</strong> %1$s <strong>מתחת</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>העביר פורום</strong> %1$s <strong>מעל</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>סנכרון פורום מחדש</strong><br />» %s',
	'LOG_GENERAL_ERROR'	=> '<strong>התרחשה שגיאה כללית</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>קבוצת משתמשים חדשה נוצרה</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>הקבוצה “%1$s” הוגדרה כברירת מחדל למשתמשים</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>קבוצת משתמשים נמחקה</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>ראשי קבוצה הודחו בקבוצת משתמשים</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>משתמשים קודמו לראשי קבוצה בקבוצת משתמשים</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>משתמשים הוסרו מקבוצת משתמשים</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>פרטי קבוצת משתמשים עודכנו</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>הוסיף ראשי קבוצה חדשים לקבוצת משתמשים</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>הוסיף משתמשים חדשים לקבוצת משתמשים</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>משתמשים מאושרים בקבוצת המשתמשים</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>משתמשים שביקשו להצטרף לקבוצה “%1$s” וצריך לאשר אותם</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>שגיאה בזמן יצירת תיעוד</strong><br />» שגיאה ב־%1$s בשורה %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>הפעיל משתמשים לא פעילים</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>מחק משתמשים לא פעילים</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>שלח תזוכרת בדואר אלקטרוני למשתמשים לא פעילים</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>המיר מ־%1$s ל־phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>התקין את phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>בדיקת חיבור IP/דפדפן/X_FORWARDED_FOR נכשלה</strong><br />»IP של המשתמש “<em>%1$s</em>” נבדק אל מול חיבור IP “<em>%2$s</em>”, מחרוזת דפדפן המשתמש “<em>%3$s</em>” נבדקה אל מול מחרוזת דפדפן המשתמש בחיבור “<em>%4$s</em>” ומחרוזת X_FORWARDED_FOR של המשתמש “<em>%5$s</em>” נבדקה אל מול מחרוזת X_FORWARDED_FOR של החיבור “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>חשבון Jabber שונה</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>ססמת Jabber שונתה</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>חשבון Jabber נרשם</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>הגדרות Jabber שונו</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>מחק חבילת שפה</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>התקין חבילת שפה</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>עדכן פרטי חבילת שפה</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>החליף קובץ שפה</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>שלח קובץ שפה והכניס אותו לתיקייה store</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>שלח בשולח הדואר</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>שינה שולח בנושא “%1$s”</strong><br />» מ־%2$s ל־%3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>מודול כובה</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>מודול הופעל</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>מודול הועבר למטה</strong><br />» %1$s תחת %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>מודול הועבר למעלה</strong><br />» %1$s מעל %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>מודול הוסר</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>מודול נוסף</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>מודול נערך</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>תפקיד מנהל ראשי נוסף</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>תפקיד מנהל ראשי נערך</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>תפקיד מנהל ראשי הוסר</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>תפקיד פורום נוסף</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>תפקיד פורום נערך</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>תפקיד פורום הוסר</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>תפקיד מנהל נוסף</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>תפקיד מנהל נערך</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>תפקיד מנהל הוסר</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>תפקיד משתמש נוסף</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>תפקיד משתמש נערך</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>תפקיד משתמש הוסר</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Unable to open %1$s for tidying, check permissions.</strong><br />Exception: %2$s<br />Trace: %3$s',
	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>שדה פרופיל הופעל</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>שדה פרופיל נוסף</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>שדה פרופיל הופסק</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>שדה פרופיל שונה</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>שדה פרופיל הוסר</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>פורומים אופסו</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>פרומים אופסו אוטומטית</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>משתמשים הופסקו</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>משתמשים אופסו והודעות נמחקו</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>משתמשים אופסו והודעות שוחזרו</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>טיהר מטמון</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>טיהר חיבורים</strong>',

	'LOG_RANK_ADDED'		=> '<strong>הוסיף דירוג חדש</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>הסיר דירוג</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>עדכן דירוג</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>הוסיף סיבת דיווח/חסימה</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>הסיר סיבת דיווח/חסימה</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>עדכן סיבת דיווח/חסימה</strong><br />» %s',

	'LOG_REFERER_INVALID'	=> '<strong>בדיקת דף מפנה נכשלה</strong><br />»הדף המפנה היה “<em>%1$s</em>”. הבקשה נדחתה והחיבור נסגר.',
	'LOG_RESET_DATE'			=> '<strong>תאריך התקנת המערכת אופס</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>מספר המשתמשים הרב ביותר שהיה מחובר בו זמנית אופס</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Files statistics resynchronised</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>מוני הודעות המשתמשים סונכרנו מחדש</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>נושאים מסומנים סונכרנו מחדש</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>סטטיסטיקות הודעות, נושאים ומשתמשים סונכרנו מחדש</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>צור חבילת חיפוש עבור</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>מחק חבילת חיפוש עבור</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx Error</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>הוסיף עיצוב חדש</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>מחק עיצוב</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>ערך עיצוב</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>יצא עיצוב</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>הוסיף ערכה חדשה לבסיס הנתונים</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>הוסיף ערכה חדשה למערכת הקבצים</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>מחק גרסאות מטמון של קבצי ערכה בערכה <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>מחק ערכה</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>ערך ערכה <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>ערך פרטי ערכה</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>יצא ערכה</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>רענן ערכה</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>הוסיף סגנון חדש לבסיס הנתונים</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>הוסיף סגנון חדש למערכת הקבצים</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>סגנון נמחק</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>ערך פרטי סגנון</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>ערך סגנון <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>ערך סגנון <em>%1$s</em></strong><br />» שינה קובץ <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>יצא סגנון</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>רענן סגנון</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>עדכן בסיס נתונים מגרסה %1$s לגרסה %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>עדכן את phpBB מגרסה %1$s לגרסה %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>משתמש הופעל</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>חסם משתמש דרך ניהול משתמשים</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>חסם IP דרך ניהול משתמשים</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>חסם דואר אלקטרוני דרך ניהול משתמשים</strong> מסיבה “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>מחק משתמש</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>הסיר את כל הקבצים המצורפים שנשלחו על־ידי המשתמש</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>הסיר סמל אישי של המשתמש</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>רוקן תיבת דואר יוצא למשתמש</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>הסיר את כל ההודעות שנשלחו על־ידי המשתמש</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>הסיר חתימת משתמש</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>משתמש הופסק</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>העביר הודעות משתמש</strong><br />» הועדות של “%1$s” לפורום “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>שינה ססמת משתמש</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>דרש הפעלת חשבון משתמש מחדש</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>הסיר סימון משתמש שנרשם לאחרונה מהמשתמש</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>המשתמש “%1$s” שינה דואר אלקטרוני</strong><br />» מ־“%2$s” ל־“%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>שינה שם משתמש</strong><br />» מ־“%1$s” ל־“%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>עדכן פרטי משתמש</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>חשבון משתמש הופעל</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>סמל אישי של משתמש הוסר</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>חתימת משתמש הוסרה</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>משוב משתמש נוסף</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>רישום נוסף:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>חשבון משתמש הופסק</strong>',
	'LOG_USER_LOCK'				=> '<strong>משתמש נעל את הנושא שלו</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>העביר את כל ההודעות לפורום</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>דרש הפעלת חשבון משתמש מחדש</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>משתמש פתח את הנושא שלו</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>הוסיף אזהרה למשתמש</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>האזהרה הבאה ניתנה למשתמש זה</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>משתמש שינה קבוצת ברירת מחדל</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>משתמש הודע מראש קבוצת משתמשים</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>משתמש הצטרף לקבוצה</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>משתמש הצטרף לקבוצה וצריך לקבל אישור</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>משתמש ביטל חברות מקבוצה</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>מחק אזהרת משתמש</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>מחק %2$s אזהרות משתמש</strong><br />» %1$s', // לדוגמה: '<strong>מחק 2 אזהרות משתמש</strong><br />» שם משתמש'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>מחק את כל אזהרות המשתמש</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>הוסיף מילה מצונזרת</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>מחק מילה מצונזרת</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>ערך מילה מצונזרת</strong><br />» %s',
));
