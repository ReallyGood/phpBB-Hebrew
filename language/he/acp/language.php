<?php
/** 
*
* acp_language [Hebrew]
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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'קבצי שפה של לוח הבקרה למנהל הראשי',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'כאן אתה יכול להתקין/להסיר חבילות שפה. חבילת השפה ברירת המחדל מסומנת בכוכבית (*).',

	'EMAIL_FILES'			=> 'תבניות דואר אלקטרוני',

	'FILE_CONTENTS'				=> 'תוכן הקובץ',
	'FILE_FROM_STORAGE'			=> 'קובץ מהתיקייה המאחסנת',

	'HELP_FILES'				=> 'קבצי עזרה',

	'INSTALLED_LANGUAGE_PACKS'	=> 'חבילות שפה מותקנות',
	'INVALID_LANGUAGE_PACK'		=> 'חבילת השפה שבחרת איננה תקינה. אנא בדוק את תקינותה והעלה אותה בשנית במקרה הצורך.',
	'INVALID_UPLOAD_METHOD'		=> 'שיטת העלאת הקובץ שבחרת איננה תקינה, בחר בשיטה אחרת.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'פרטי חבילת השפה עודכנו בהצלחה.',
	'LANGUAGE_ENTRIES'					=> 'רישומי שפה',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'כאן אתה יכול לשנות רשומות של חבילות שפה, מתורגמות או לא.<br /> <b>שים לב:</b> ברגע ששינית קובץ שפה השינויים ישמרו בתיקייה נפרדת שאותה אתה צריך להוריד. שינויי השפה לא יוצגו לעיניי המשתמש עד שלא תחליף את הקבצים שהורדת בקבצים הקיימים.',
	'LANGUAGE_FILES'					=> 'קבצי שפה',
	'LANGUAGE_KEY'						=> 'מפתח',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'חבילת השפה כבר מותקנת.',
	'LANGUAGE_PACK_DELETED'				=> 'חבילת השפה <strong>%s</strong> הוסרה בהצלחה, כל המשתמשים אשר השתמשו בה הוגדרו להשתמש בחבילת ברירת המחדל של המערכת.',
	'LANGUAGE_PACK_DETAILS'				=> 'פרטי חבילת שפה',
	'LANGUAGE_PACK_INSTALLED'			=> 'חבילת השפה <strong>%s</strong> הותקנה בהצלחה',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'שמות הזיהוי של שדות הפרופיל המותאמים אישית הועתקו משפת ברירת המחדל. אנא שנה אותם אם נדרש.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'שם מקומי',
	'LANGUAGE_PACK_NAME'				=> 'שם',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'חבילת השפה שנבחרה איננה קיימת.',
	'LANGUAGE_PACK_USED_BY'				=> 'בשימוש על ידי (כולל רובוטים)',
	'LANGUAGE_VARIABLE'					=> 'מחרוזת',
	'LANG_AUTHOR'						=> 'יוצר חבילת השפה',
	'LANG_ENGLISH_NAME'					=> 'שם באנגלית',
	'LANG_ISO_CODE'						=> 'ISO code',
	'LANG_LOCAL_NAME'					=> 'שם מקומי',

	'MISSING_LANGUAGE_FILE'		=> 'קובץ שפה חסר: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'משתני שפה חסרים',
	'MODS_FILES'				=> 'קבצי שפה של מודים',
	'NO_FILE_SELECTED'				=> 'אינך ציינת קובץ שפה.',
	'NO_LANG_ID'					=> 'אינך ציינת חבילת שפות',
	'NO_REMOVE_DEFAULT_LANG'		=> 'אינך יכול למחוק את שפת ברירת המחדל של המערכת. <br />אם אתה באמת רוצה למחוק את החבילה, שנה את חבילת ברירת המחדל של המערכת תחילה.',
	
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'אין חבילות שפה לא מותקנות.',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'מחק מהתיקייה המאחסנת',

	'SELECT_DOWNLOAD_FORMAT'	=> 'בחר פורמט להורדה',
	'SUBMIT_AND_DOWNLOAD'		=> 'אשר והורד את הקובץ',
	'SUBMIT_AND_UPLOAD'			=> 'אשר והעלה את הקובץ',

	'THOSE_MISSING_LANG_FILES'			=> 'קבצי השפה הבאים חסרים מחבילת השפה: %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'משתני השפה הבאים חסרים בחבילת השפות: <strong>%s</strong>',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'חבילות שפה לא מותקנת',

	'UNABLE_TO_WRITE_FILE'		=> 'הקובץ לא יכול היה להכתב ל%s.',
	'UPLOAD_COMPLETED'			=> 'ההעלאה הושלמה בהצלחה.',
	'UPLOAD_FAILED'				=> 'העלאת הקובץ נכשלה מסיבות לא ידועות. ככל הנראה תאלץ להחליף את הקובץ ידנית.',
	'UPLOAD_METHOD'				=> 'שיטת העלאה',
	'UPLOAD_SETTINGS'			=> 'הגדרות העלאה',

	'WRONG_LANGUAGE_FILE'		=> 'קובץ השפה הנבחר אינו תקין.',
));
