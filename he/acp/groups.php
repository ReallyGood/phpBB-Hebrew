<?php
/** 
*
* acp_groups [Hebrew]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2008-07-16 - phpBB הישראלי - www.phpBB.co.il
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'בדף זה תוכל לערוך את כל קבוצות המשתמשים הקיימות בפורום שלך, אתה יכול למחוק, ליצור ולערוך קבוצות קיימות. בנוסף, אתה יכול לבחור ראש קבוצה, לשנות את מצב הקבוצה בין פתוח/מוסתר/סגור ולקבוע את שם ותיאור הקבוצה.',
	'ADD_USERS'						=> 'הוסף משתמשים',
	'ADD_USERS_EXPLAIN'				=> 'כאן אתה יכול להוסיף משתמשים חדשים לקבוצה. אתה יכול לבחור אם קבוצה זו תהפוך לברירת המחדל החדשה של המשתמשים שיבחרו. בנוסף באפשרותך להפוך אותם לראשי קבוצה. אנא הכנס כל שם משתמש עם רווח בין שם לשם.',

	'COPY_PERMISSIONS'				=> 'העתק הרשאות מ',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'כשהקבוצה תיווצר הרשאותיה יהיו כהרשאות של הקבוצה שבחרת כאן.',
	'CREATE_GROUP'					=> 'צור קבוצה חדשה',

	'GROUPS_NO_MEMBERS'				=> 'לקבוצה זו אין חברים',
	'GROUPS_NO_MODS'				=> 'לא נבחר ראש קבוצה',
	
	'GROUP_APPROVE'					=> 'אשר חבר',
	'GROUP_APPROVED'				=> 'חברים מאושרים',
	'GROUP_AVATAR'					=> 'הסמל האישי של הקבוצה',
	'GROUP_AVATAR_EXPLAIN'			=> 'תמונה זו תופיע בלוח הבקרה של ניהול הקבוצה.',
	'GROUP_CLOSED'					=> 'נעול',
	'GROUP_COLOR'					=> 'צבע הקבוצה',
	'GROUP_COLOR_EXPLAIN'			=> 'הגדר את צבע הכינויים של חברי הקבוצה, השאר ריק להגדרות הרגילות.',
	'GROUP_CONFIRM_ADD_USER'                => 'האם אתה בטוח שאתה רוצה להוסיף את המשתמש %1$s לקבוצה?',
	'GROUP_CONFIRM_ADD_USERS'               => 'האם אתה בטוח שאתה רוצה להוסיף את המשתמשים %1$s לקבוצה?',
	'GROUP_CREATED'					=> 'הקבוצה נוצרה בהצלחה.',
	'GROUP_DEFAULT'					=> 'צור קבוצת ברירת מחדל לחבר',
	'GROUP_DEFS_UPDATED'			=> 'קבוצת ברירת המחדל מוגדרת לכל המשתמשים שנבחרו.',
	'GROUP_DELETE'					=> 'הסר משתמש מהקבוצה',
	'GROUP_DELETED'					=> 'הקבוצה נמחקה והגדרות קבוצת ברירת המחדל הוגדרה בהצלחה.',
	'GROUP_DEMOTE'					=> 'הדח ראש קבוצה',
	'GROUP_DESC'					=> 'תיאור הקבוצה',
	'GROUP_DETAILS'					=> 'פרטי הקבוצה',
	'GROUP_EDIT_EXPLAIN'			=> 'כאן אתה יכול לערוך קבוצות קיימות. אתה יכול לשנות את שמם, תיאורם וסוגם (פתוח, סגור, וכדומה..). אתה יכול להגידר את גודל הקבוצה או צבע, דירוג, ואפשרויות נוספות השינויים שיבוצעו כאן יעקפו את הגדרות המשתמשים שנמצאים בקבוצה. שים לב חברי הקבוצה יכולים לערוך את סמלם האישי רק אם כן הגדרת הרשאות משתמש תואמים.',
	'GROUP_ERR_USERS_EXIST'			=> 'משתמשים אלו כבר חברים בקבוצה זו.',
	'GROUP_FOUNDER_MANAGE'			=> 'מייסד הקבוצה עורך בלבד',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'הגבל את ניהול קבוצה זו למייסד הקבוצה בלבד. משתמשים שברשותם הרשאות קבוצה עדין יכולים לראות קבוצה זו.',
	'GROUP_HIDDEN'					=> 'הסתר',
	'GROUP_LANG'					=> 'שפת הקבוצה',
	'GROUP_LEAD'					=> 'ראש קבוצה',
	'GROUP_LEADERS_ADDED'			=> 'ראשים נוספים נוספו לקבוצה בהצלחה.',
	'GROUP_LEGEND'					=> 'הצג קבוצה במקרא',
	'GROUP_LIST'					=> 'משתמשים נוכחים',
	'GROUP_LIST_EXPLAIN'			=> 'זוהי רשימה מלאה של כל המשתמשים החברים בקבוצה זו. אתה יכול למחוק חברים (מלבד קבוצות מיוחדות) או להוסיף.',
	'GROUP_MEMBERS'					=> 'חברי הקבוצה',
	'GROUP_MEMBERS_EXPLAIN'			=> 'זוהי הרישמה המלאה של כל המשתמשים החברים בקבוצה זו. כולל רווחים לזיהוי הראשיים, הממתינים והחברים הקיימים. מפה אתה יכול לערוך הכל. בכדי להסיר ראשי אך להשאיר את החברים בקבוצה השתמש בהדחה ולאחר מכן מחק. וההפך השתמש בקידום בכדי להפוך משתמש קיים לראשי קבוצה.',
	'GROUP_MESSAGE_LIMIT'			=> 'ההודעות הפרטיות של הקבוצה מוגבלות בתיקיה אחת',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'הגדרות אלו יעקפו את מגבלת תיקיית ההודעות למשתמש. קבע ערך זה ל0 על מנת שהגדרות ברירת המחדל של המשתמש יהיו בשימוש.',
	'GROUP_MODS_ADDED'				=> 'ראשי קבוצה חדשים נוספו בהצלחה.',
	'GROUP_MODS_DEMOTED'			=> 'ראשי הקבוצה הודחו בהצלחה.',
	'GROUP_MODS_PROMOTED'			=> 'חברי הקבוצה קודמו בהצלחה.',
	'GROUP_NAME'					=> 'שם הקבוצה',
	'GROUP_NAME_TAKEN'				=> 'שם הקבוצה שהכנסת כבר בשימוש, אנא בחר שם אחר.',
	'GROUP_OPEN'					=> 'פתח',
	'GROUP_PENDING'					=> 'משתמשים ממתינים',
	'GROUP_MAX_RECIPIENTS'			=> 'מספר מירבי של נמענים מורשים לכל הודעה פרטית',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'המספר המירבי של נמענים המורשים בהודעה פרטית.קבע ערך זה ל0 על מנת שהגדרות המערכת יהיו בשימוש.',
	'GROUP_OPTIONS_SAVE'			=> 'אפשרויות קבוצה רחבות',
	'GROUP_PROMOTE'					=> 'קדם לראש הקבוצה',
	'GROUP_RANK'					=> 'דירוג הקבוצה',
	'GROUP_RECEIVE_PM'				=> 'הקבוצה יכולה לקבל הודעות פרטיות',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'שים לב קבוצות מוסתרות לא יכולות לקבל הודעות, למרות הגדרות אלו.',
	'GROUP_REQUEST'					=> 'בקש',
	'GROUP_SETTINGS_SAVE'			=> 'הגדרות גודל הקבוצה',
	'GROUP_SKIP_AUTH'				=> 'שחרר את ראש הקבוצה מהרשאות',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'אם מאופשר ראש קבוצה לא יקבל הרשאות מהקבוצה.',
	'GROUP_TYPE'					=> 'סוג הקבוצה',
	'GROUP_TYPE_EXPLAIN'			=> 'יחליט מי יכול להכנס לקבוצה או לראותה.',
	'GROUP_UPDATED'					=> 'אפשרויות הקבוצה עודכנה בהצלחה.',
	
	'GROUP_USERS_ADDED'				=> 'משתמשים חדשים נוספו לקבוצה בהצלחה.',
	'GROUP_USERS_EXIST'				=> 'המשתמשים שנבחרו כבר חברים בקבוצה.',
	'GROUP_USERS_REMOVE'			=> 'המשתמשים הוסרו מהקבוצה והגדרות ברירת המחדל החדשות הוגדרו בהצלחה.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'עשה קבוצת ברירת מחדל לכל המשתמשים',
	'MEMBERS'				=> 'משתמשים',

	'NO_GROUP'					=> 'לא נבחרה קבוצה.',
	'NO_GROUPS_CREATED'			=> 'לא נוצרו כרגע קבוצות.',
	'NO_PERMISSIONS'			=> 'אל תעתיק הרשאות',
	'NO_USERS'					=> 'לא הכנסת אף משתמש.',
	'NO_USERS_ADDED'         => 'לא נוספו משתמשים לקבוצה.',
	'NO_VALID_USERS'         => 'לא הזנת משתמשים מתאימים לפעולה זו.',

	'SPECIAL_GROUPS'			=> 'קבוצות מוגדרות מראש',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'קבוצות מוגדרות מראש הינם קבוצות מיוחדות, לא ניתן למחוק אותם או לשנות באופן ישיר. למרות זאת עדיין תוכל להוסיף משתמשים ולערוך את ההגדרות הבסיסיות.',

	'TOTAL_MEMBERS'				=> 'משתמשים',

	'USERS_APPROVED'				=> 'המשתמשים אושרו בהצלחה.',
	'USER_DEFAULT'					=> 'משתמש ברירת מחדל',
	'USER_DEF_GROUPS'				=> 'קבוצות משתמשים מוגדרות',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'אלו קבוצות אשר נוצרו על ידך או מנהלים ראשים אחרים. אתה יכול לנהל את חברי הקבוצה בנוסף לעריכת הגדרות הקבוצה ואפילו למחוק את הקבוצה.',
	'USER_GROUP_DEFAULT'			=> 'הגדר כקבוצת ברירת המחדל',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'להגיד כן כאן תגדיר את קבוצה זו כברירת המחדל למשתמשים שנוספו.',
	'USER_GROUP_LEADER'				=> 'הגדר כראש הקבוצה',
));

?>