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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'תוסף',
	'EXTENSIONS'				=> 'תוספות',
	'EXTENSIONS_ADMIN'			=> 'מנהל התוספות',
	'EXTENSIONS_EXPLAIN'		=> 'מנהלים התוספות הוא כלי במערכת הphpBB שלך שמאפשרת לך למנהל את כל התוספות שלך, מצבם וצפיה במידע אודותם.',
	'EXTENSION_INVALID_LIST'	=> 'ה “%s” תוספת שבורה.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'התוספת לא מתאימה למערכת, אנא ודא כי גרסת ה-PHP וה-PHPBB תואמות (ראה בעמוד הפירוט של התוספת).',
	'EXTENSION_DIR_INVALID'		=> 'לתוספת מבנה תיקייה שגוי, ועל כן לא ניתן להתקינה.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'לא ניתן להתקין את התוספת, אנא בדוק את דרישות התוספת.',
	'EXTENSION_NOT_INSTALLED'	=> 'ההרחבה %s אינה זמינה. נא לבדוק שהיא אכן הותקנה כראוי.',

	'DETAILS'				=> 'פרטים',

	'EXTENSIONS_DISABLED'	=> 'הפסק תוספות',
	'EXTENSIONS_ENABLED'	=> 'הפעל תוספות',

	'EXTENSION_DELETE_DATA'	=> 'מחק מידע',
	'EXTENSION_DISABLE'		=> 'הפסק',
	'EXTENSION_ENABLE'		=> 'הפעל',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'מחיקת נתוני התוספת ימחק את כל נתוניה והגדרותיה. קבצי התוספת נשמרים כך שניתן להתקינה מחדש.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'הפסקת תוספת שומר על קבציה ונתוניה והגדרותיה, אך מוריד כל פונקציונליות שנוספת על ידי התוספת.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'הפעלת התוספת מאפשר לך להשתמש בה במערכת שלך.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'נתוני התוספת נמחקים. אנא אל תעזוב או תרענן את העמוד עד שהתהליך מסתיים.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'התוספת עוברת כיבוי. אנא אל תעזוב או תרענן את העמוד עד שהתהליך מסתיים.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'התוספת נדלקת, אנא אל תעזוב או תרענן את העמוד עד אשר התהליך יושלם.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'נתוני התוספת נמחקו בהצלחה',
	'EXTENSION_DISABLE_SUCCESS'		=> 'התוספת הופסקה בהצלחה',
	'EXTENSION_ENABLE_SUCCESS'		=> 'התוספת הופעלה בהצלחה',

	'EXTENSION_NAME'			=> 'שם התוסף',
	'EXTENSION_ACTIONS'			=> 'פעולות',
	'EXTENSION_OPTIONS'			=> 'אפשרויות',
	'EXTENSION_INSTALL_HEADLINE'=> 'מתקין תוסף',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>הורד תוסף ממאגר התוספות של phpBB</li>
			<li>חלץ את התוסף והעלה אותו אל תיקית <samp>ext/</samp> של מערכת הפורומים שלך</li>
			<li>אפשר את התוסף, כאן במנהל התוספות</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'עדכון תוספת',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>הפסק את התוספת</li>
			<li>מחק את הקבצים של התוספת מקבצי המערכת</li>
			<li>העלה את הקבצים החדשים</li>
			<li>הפעל את התוספת</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'מחיקה מלאה של תוספת מהמערכת',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>הפסק את התוספת</li>
			<li>מחק את המידע של התוספת</li>
			<li>מחק את הקבצים של התוספת מקבצי המערכת</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'אתה בטוח שברצונך למחוק את המידע המשתייך ל-“%s”?<br /><br />התהליך ישמיד את כל הנתונים וההגדרות של התוספת ולא ניתן יהיה לביטול!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'אתה בטוח שברצונך לכבות את התוספת“%s” ?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'אתה בטוח שאתה רוצה להדליק את התוספת“%s” ?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'אתה בטוח שברצונך להשתמש בגרסה לא יציבה (בטא)?',

	'RETURN_TO_EXTENSION_LIST'	=> 'חזור אל רשימת התוספות',

	'EXT_DETAILS'			=> 'פרטי התוספת',
	'DISPLAY_NAME'			=> 'שם מוצג',
	'CLEAN_NAME'			=> 'שם נקי',
	'TYPE'					=> 'סוג',
	'DESCRIPTION'			=> 'תיאור',
	'VERSION'				=> 'גרסא',
	'HOMEPAGE'				=> 'דף הבית',
	'PATH'					=> 'File Path',
	'TIME'					=> 'זמן שחרור',
	'LICENSE'				=> 'רשיון',

	'REQUIREMENTS'			=> 'דרישות',
	'PHPBB_VERSION'			=> 'גרסת phpBB',
	'PHP_VERSION'			=> 'גרסת PHP',
	'AUTHOR_INFORMATION'	=> 'מידע אודות היוצר',
	'AUTHOR_NAME'			=> 'שם',
	'AUTHOR_EMAIL'			=> 'דואר אלקטורני',
	'AUTHOR_HOMEPAGE'		=> 'דף הבית',
	'AUTHOR_ROLE'			=> 'תפקיד',

	'NOT_UP_TO_DATE'		=> '%s לא מעודכן',
	'UP_TO_DATE'			=> '%s מעודכן',
	'ANNOUNCEMENT_TOPIC'	=> 'הודעת שחרור',
	'DOWNLOAD_LATEST'		=> 'הורד גרסה',
	'NO_VERSIONCHECK'		=> 'לא ניתן מידע לאימות גרסה.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'בדוק שוב את כל הגרסאות',
	'FORCE_UNSTABLE'					=> 'תמיד בדוק גרסאות לא יציבות',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'הגדרות בודק הגרסאות',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'צפה במאגר התוספות',

	'META_FIELD_NOT_SET'	=> 'פרטי מטא חיוניים של%s לא נתנו.',
	'META_FIELD_INVALID'	=> 'פרטי המטא של %s שבורים.',
));
