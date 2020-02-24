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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'כאן אתה יכול לנהל את כל סוגי המודולים. שים לב שלוח הבקרה למנהל הראשי יש שלוש רמות של מבנה (קטגוריה -> קטגוריה -> מודול) באמצעותו לאחרים יש את מבנה התפריט (קטגוריה -> מודול) שחייב להישמר. אנא שים לב שאתה יכול לנעול את עצמך בחוץ אם אתה מבטל או מוחק את המודולים האחראים על ניהול המודולים עצמם.',
	'ADD_MODULE'					=> 'הוסף מודול',
	'ADD_MODULE_CONFIRM'			=> 'אתה בטוח שברצונך להוסיף את המודול הנבחר עם המצב הנוכחי?',
	'ADD_MODULE_TITLE'				=> 'הוסף מודול',

	'CANNOT_REMOVE_MODULE'	=> 'לא מצליח להסיר את המודול, יש לו ילדים רשומים. אנא הסר או העבר את כל הילדים לפני שאתה מבצע פעולה זו.',
	'CATEGORY'				=> 'קטגוריה',
	'CHOOSE_MODE'			=> 'בחר את מצב המודול',
	'CHOOSE_MODE_EXPLAIN'	=> 'בחר את המצב בו המודול יתחיל לפעול.',
	'CHOOSE_MODULE'			=> 'בחר מודול',
	'CHOOSE_MODULE_EXPLAIN'	=> 'בחר את הקובץ הנקרא על ידי מודול זה.',
	'CREATE_MODULE'			=> 'צור מודול חדש',

	'DEACTIVATED_MODULE'	=> 'הפסק את פעילות המודול',
	'DELETE_MODULE'			=> 'מחק מודול',
	'DELETE_MODULE_CONFIRM'	=> 'אתה בטוח שברצונך להסיר מודול זה?',

	'EDIT_MODULE'			=> 'ערוך מודול',
	'EDIT_MODULE_EXPLAIN'	=> 'כאן אתה יכול להגדיר הגדרות ספציפיות למודול.',

	'HIDDEN_MODULE'			=> 'מודול מוסתר',

	'MODULE'					=> 'מודול',
	'MODULE_ADDED'				=> 'המודול נוסף בהצלחה.',
	'MODULE_DELETED'			=> 'המודול הוסר בהצלחה.',
	'MODULE_DISPLAYED'			=> 'המודול מוצג',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'אם אין ברצונך להציג מודול זה, אך ברצונך להשתמש בו, הגדר אפשרות זאת לפעילה.',
	'MODULE_EDITED'				=> 'המודול נערך בהצלחה.',
	'MODULE_ENABLED'			=> 'הפעל מודול',
	'MODULE_LANGNAME'			=> 'שפת המודול',
	'MODULE_LANGNAME_EXPLAIN'	=> 'הכנס את שם המודול המוצג. השתמש בשפה מדויקת אם השם מקושר לקובץ שפה.',
	'MODULE_TYPE'				=> 'סוג המודול',

	'NO_CATEGORY_TO_MODULE'	=> 'לא מצליח להעביר את הקטגוריה למודול. אנא הסר/העבר את כל הפורומים לפני עשיית פעולה זו.',
	'NO_MODULE'				=> 'לא נמצא מודול.',
	'NO_MODULE_ID'			=> 'לא נבחר מספר זיהוי למודול.',
	'NO_MODULE_LANGNAME'	=> 'לא נבחר למודול שפה.',
	'NO_PARENT'				=> 'אין הורה',

	'PARENT'				=> 'הורה',
	'PARENT_NO_EXIST'		=> 'ההורה אינו קיים.',

	'SELECT_MODULE'			=> 'בחר מודול',
));
