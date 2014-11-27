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
	'ACP_STYLES_EXPLAIN'		=> 'כאן אתה יכול לנהל את העיצובים הזמינים במערכת הפורומים שלך. אתה רשאי לשנות את העיצובים הקיימים, למחוק, לבטל, להפעיל מחדש ולהתקין חדשים. אתה יכול גם לראות איך עיצוב מסוים ייראה באמצעות פונקצית התצוגה המקדימה. כמו כן תוכל לראות כמה משתמשים בכל עיצוב, שים לב שעיצובים אלו לא דורסים עיצובים מותאמים אישית של המשתמש.',

	'CANNOT_BE_INSTALLED'		=> 'לא ניתן להתקנה',
	'CONFIRM_UNINSTALL_STYLES'	=> 'אתה בטוח שברצונך להסיר את העיצובים שנבחרו?',
	'COPYRIGHT'					=> 'זכויות יוצרים',

	'DEACTIVATE_DEFAULT'		=> 'אינך יכול להפוך את עיצוב ברירת המחדל ללא לפעיל',
	'DELETE_FROM_FS'			=> 'מחק מקבצי המערכת',
	'DELETE_STYLE_FILES_FAILED'	=> 'שגיאה במחיקת קבצים בסגנון "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'הקבצים של העיצוב "%s" נמחקו.',
	'DETAILS'					=> 'פרטים',

	'INHERITING_FROM'			=> 'יורש מ',
	'INSTALL_STYLE'				=> 'התקן עיצוב',
	'INSTALL_STYLES'			=> 'התקן עיצובים',
	'INSTALL_STYLES_EXPLAIN'	=> 'כאן אתה יכול להתקין עיצובים חדשים.<br />אם אתה לא מוצא עיצוב ספציפי ברשימה שלהלן, בדוק אולי העיצוב כבר מותקן. אם הוא לא מותקן, בדוק אם הוא הועלה בצורה נכונה.',
	'INVALID_STYLE_ID'			=> 'מזהה העיצוב לא תקין.',

	'NO_MATCHING_STYLES_FOUND'	=> 'לא נמצאו עיצובים מתאימים לשאילתה שלך.',
	'NO_UNINSTALLED_STYLE'		=> 'לא אותרו עיצובים לא מותקנים.',

	'PURGED_CACHE'				=> 'זיכרון המטמון נוקה.',

	'REQUIRES_STYLE'			=> 'עיצוב זה דורש את העיצוב "%s" בכדי שיהיה ניתן להתקינו.',

	'STYLE_ACTIVATE'			=> 'הפעל',
	'STYLE_ACTIVE'				=> 'פעיל',
	'STYLE_DEACTIVATE'			=> 'בטל',
	'STYLE_DEFAULT'				=> 'סמן עיצוב ברירת מחדל',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'עליך להפעיל את העיצוב לפני שניתן להפוך אותו לברירת מחדל.',
	'STYLE_ERR_INVALID_PARENT'	=> 'עיצוב הורה לא תקין.',
	'STYLE_ERR_NAME_EXIST'		=> 'עיצוב עם שם זה כבר קיים.',
	'STYLE_ERR_STYLE_NAME'		=> 'אתה מוכרח לציין שם לעיצוב זה.',
	'STYLE_INSTALLED'			=> 'העיצוב "%s" הותקן.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'חזור לרשימת העיצובים המותקנים',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'התקן עוד עיצובים',
	'STYLE_NAME'				=> 'שם העיצוב',
	'STYLE_NAME_RESERVED'		=> 'העיצוב "%s" לא ניתן להתקנה, מכיוון ששם העיצוב שמור.',
	'STYLE_NOT_INSTALLED'		=> 'עיצוב "%s" לא הותקן.',
	'STYLE_PATH'				=> 'נתיב העיצוב',
	'STYLE_UNINSTALL'			=> 'הסר',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'לא ניתן להסיר את העיצוב "%s" מכיוון שיש עיצוב אחד או יותר תחתיו.',
	'STYLE_UNINSTALLED'			=> 'העיצוב "%s" הוסר בהצלחה.',
	'STYLE_USED_BY'				=> 'בשימוש על ידי (כולל רובוטים)',

	'UNINSTALL_DEFAULT'			=> 'אין באפשרותך להסיר את עיצוב ברירת המחדל.',
));
