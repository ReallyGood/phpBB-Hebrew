<?php
/** 
*
* groups [Hebrew]
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
	'ALREADY_DEFAULT_GROUP'		=> 'הקבוצה הנבחרת היא כבר קבוצת ברירת המחדל שלך.',
	'ALREADY_IN_GROUP'			=> 'אתה כבר חבר של הקבוצה הנבחרת.',
	'ALREADY_IN_GROUP_PENDING'	=> 'כבר ביקשת להצטרף לקבוצה הנבחרת.',

	'CANNOT_JOIN_GROUP'			=> 'אינך מורשה להוסיף קבוצה זו. אתה יכול רק להוסיף קבוצות פתוחות.',
	'CANNOT_RESIGN_GROUP'		=> 'אינך יכול להסיר מקבוצה זו. אתה יכול רק להסיר מקבוצות פתוחות .',
	'CHANGED_DEFAULT_GROUP'		=> 'קבוצת ברירת המחדל שונתה בהצלחה.',
	
	'GROUP_AVATAR'						=> 'סמל אישי לקבוצה',
	'GROUP_CHANGE_DEFAULT'				=> 'האם אתה בטוח שאתה רוצה לשנות את חברות ברירת המחדל שלך לקבוצה “%s”?',
	'GROUP_CLOSED'						=> 'סגורה',
	'GROUP_DESC'						=> 'תיאור הקבוצה',
	'GROUP_HIDDEN'						=> 'מוסתרת',
	'GROUP_INFORMATION'					=> 'פרטי קבוצת המשתמשים',
	'GROUP_IS_CLOSED'					=> 'זוהי קבוצה סגורה, משתמשים חדשים יכולים להצטרף רק על־ידי הזמנה מראש הקבוצה.',
	'GROUP_IS_FREE'						=> 'זוהי קבוצה הפתוחה בחופשיות, כל המשתמשים החדשים מוזמנים בברכה.',
	'GROUP_IS_HIDDEN'					=> 'זוהי קבוצה מוסתרת, רק משתמשי הקבוצה יכולים לצפות בחברויות שלה.',
	'GROUP_IS_OPEN'						=> 'זוהי קבוצה פתוחה, משתמשים יכולים לבקש להצטרף.',
	'GROUP_IS_SPECIAL'					=> 'זוהי קבוצה מיוחדת, קבוצות מיוחדות מנוהלות על־ידי המנהלים הראשיים של המערכת.',
	'GROUP_JOIN'						=> 'הצטרף לקבוצה',
	'GROUP_JOIN_CONFIRM'				=> 'האם אתה בטוח שאתה רוצה להצטרף לקבוצה הנבחרת?',
	'GROUP_JOIN_PENDING'				=> 'בקש להצטרף לקבוצה',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'האם אתה בטוח שאתה רוצה לבקש להצטרף לקבוצה הנבחרת?',
	'GROUP_JOINED'						=> 'הצטרפת לקבוצה הנבחרת בהצלחה.',
	'GROUP_JOINED_PENDING'				=> 'הבקשה לחברות בקבוצה עברה בהצלחה. אנא המתן שראש קבוצה יאשר את החברות שלך.',
	'GROUP_LIST'						=> 'ניהול משתמשים',
	'GROUP_MEMBERS'						=> 'חברי הקבוצה',
	'GROUP_NAME'						=> 'שם הקבוצה',
	'GROUP_OPEN'						=> 'פתוחה',
	'GROUP_RANK'						=> 'דירוג לקבוצה',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'בטל חברות קבוצה',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'האם אתה בטוח שאתה רוצה לבטל את החברות שלך בקבוצה הנבחרת?',
	'GROUP_RESIGN_PENDING'				=> 'בטל חברות ניסיונית בקבוצה',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'האם אתה בטוח שאתה מעוניין לבטל את החברות הניסיונית שלך בקבוצה הנבחרת?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'הוסרת מהקבוצה הנבחרת בהצלחה.',
	'GROUP_RESIGNED_PENDING'			=> 'חברותך הניסיונית הוסרה מהקבוצה הנבחרת בהצלחה.',
	'GROUP_TYPE'						=> 'סוג הקבוצה',
	'GROUP_TYPE'						=> 'סוג הקבוצה',
	'GROUP_UNDISCLOSED'					=> 'קבוצה מוסתרת',
	'FORUM_UNDISCLOSED'					=> 'ניהול פורומים מוסתרים',

	'LOGIN_EXPLAIN_GROUP'	=> 'אתה צריך להתחבר כדי לצפות בפרטי הקבוצה.',

	'NO_LEADERS'					=> 'אינך ראש קבוצה של אף קבוצה.',
	'NOT_LEADER_OF_GROUP'			=> 'הפעולה המבוקשת אינה יכולה להתבצע מפני שאינך ראש הקבוצה.',
	'NOT_MEMBER_OF_GROUP'			=> 'הפעולה המבוקשת אינה יכולה להתבצע מפני שאינך חבר בקבוצה הנבחרת או שחברותך עדיין לא אושרה.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'אינך רשאי לבטל את חברותך מקבוצת ברירת המחדל שלך.',
	
	'PRIMARY_GROUP'		=> 'קבוצה ראשית',

	'REMOVE_SELECTED'		=> 'הסר נבחרים',

	'USER_GROUP_CHANGE'			=> 'מקבוצה “%1$s” ל־“%2$s”',
	'USER_GROUP_DEMOTE'			=> 'בטל ניהול קבוצה',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'אתה בטוח שאתה רוצה לבטל את ניהול הקבוצה שלך בקבוצה הנבחרת?',
	'USER_GROUP_DEMOTED'		=> 'ניהול הקבוצה שלך בוטל בהצלחה.',
));

?>