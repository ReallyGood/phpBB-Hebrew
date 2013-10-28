<?php
/**
*
* captcha_qa [Hebrew]
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
	'CAPTCHA_QA'				=> 'שאלות ותשובות',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'שאלת אימות זו היא אמצעי למניעת שליחה אוטומטית של טפסים על ידי בוטים.',
	'CONFIRM_QUESTION_WRONG'	=> 'התשובה שסיפקת לשאלת האימות איננה נכונה.',

	'QUESTION_ANSWERS'			=> 'תשובות',
	'ANSWERS_EXPLAIN'			=> 'אנא הכנס תשובות נכונות לשאלה, אחת בכל שורה.',
	'CONFIRM_QUESTION'			=> 'שאלת אימות',

	'ANSWER'					=> 'תשובה',
	'EDIT_QUESTION'				=> 'ערוך שאלה',
	'QUESTIONS'					=> 'שאלות',
	'QUESTIONS_EXPLAIN'			=> 'בכל טופס שליחה שבו אפשרת את התוספת שאלות ותשובות, משתמשים ישאלו אחת מן השאלות המצוינות כאן. כדי להשתמש בתוסף, לפחות אחת מן השאלות צריכה להיות מוגדרת לשפת ברירת המחדל. שאלות אלו צריכות להיות קלות למענה על ידי קהל היעד שלך, אבל מעבר ליכולת של רובוט המסוגל להריץ חיפוש בגוגל™. שימוש במאגר גדול של שאלות שמשתנה בקביעות יפיק את התוצאות הטובות ביותר. אפשר את אפשרות האימות הנוקשה אם התשובה שלך מסתמכת על אפשרויות משולבות, סימני או רוווחים.',
	'QUESTION_DELETED'			=> 'השאלה נמחקה',
	'QUESTION_LANG'				=> 'שפה',
	'QUESTION_LANG_EXPLAIN'		=> 'השפה שבהן השאלה והתשובה כתובות.',
	'QUESTION_STRICT'			=> 'אימות נוקשה',
	'QUESTION_STRICT_EXPLAIN'	=> 'אפשר בכדי לבדוק אפשרויות משולבות, סימני פיסוק ורווחים.',

	'QUESTION_TEXT'				=> 'שאלה',
	'QUESTION_TEXT_EXPLAIN'		=> 'השאלה שתוצג למשתמש.',

	'QA_ERROR_MSG'				=> 'אנא מלא את כל השדות והכנס לפחות תשובה אחת.',
	
	'QA_LAST_QUESTION'			=> 'אתה לא יכול למחוק את כל השאלות בזמן שהרכיב פעיל.',
));

?>
