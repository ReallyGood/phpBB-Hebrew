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
	'ACP_FILES'						=> 'קבצי שפה של לוח הבקרה למנהל הראשי',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'כאן אתה יכול להתקין/להסיר חבילות שפה. חבילת השפה ברירת המחדל מסומנת בכוכבית (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'האם אתה בטוח שברצונך למחוק את “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'חבילות שפה מותקנות',

	'LANGUAGE_DETAILS_UPDATED'			=> 'פרטי חבילת השפה עודכנו בהצלחה.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'חבילת השפה כבר מותקנת.',
	'LANGUAGE_PACK_DELETED'				=> 'חבילת השפה “%s” הוסרה בהצלחה. כל המשתמשים שהשתמשו בחבילה זו הועברו לחבילת ברירת המחדל של המערכת.',
	'LANGUAGE_PACK_DETAILS'				=> 'פרטי חבילת שפה',
	'LANGUAGE_PACK_INSTALLED'			=> 'חבילת השפה “%s” הותקנה בהצלחה.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'שמות הזיהוי של שדות הפרופיל המותאמים אישית הועתקו משפת ברירת המחדל. אנא שנה אותם אם נדרש.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'שם מקומי',
	'LANGUAGE_PACK_NAME'				=> 'שם',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'חבילת השפה שנבחרה איננה קיימת.',
	'LANGUAGE_PACK_USED_BY'				=> 'בשימוש על ידי (כולל רובוטים)',
	'LANGUAGE_VARIABLE'					=> 'מחרוזת',
	'LANG_AUTHOR'						=> 'יוצר חבילת השפה',
	'LANG_ENGLISH_NAME'					=> 'שם באנגלית',
	'LANG_ISO_CODE'						=> 'קוד ISO',
	'LANG_LOCAL_NAME'					=> 'שם מקומי',

	'MISSING_LANG_FILES'		=> 'קבצי שפה חסרים',
	'MISSING_LANG_VARIABLES'	=> 'משתני שפה חסרים',

	'NO_FILE_SELECTED'				=> 'אינך ציינת קובץ שפה.',
	'NO_LANG_ID'					=> 'אינך ציינת חבילת שפות',
	'NO_REMOVE_DEFAULT_LANG'		=> 'אינך יכול למחוק את שפת ברירת המחדל של המערכת. <br />אם אתה באמת רוצה למחוק את החבילה, שנה את חבילת ברירת המחדל של המערכת תחילה.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'אין חבילות שפה לא מותקנות.',

	'THOSE_MISSING_LANG_FILES'			=> 'קבצי השפה הבאים חסרים מתיקית השפה “%s”',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'משתני השפה הבאים חסרים מחבילת השפה “%s”',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'חבילות שפה לא מותקנת',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'צפה במאגר השפות',
));
