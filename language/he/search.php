<?php
/** 
*
* search.php [Hebrew]
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
	'ALL_AVAILABLE'	=> 'כל התווים',
	'ALL_RESULTS'	=> 'כל התוצאות',
	
	'DISPLAY_RESULTS'	=> 'הצג את תוצאות החיפוש כ',
	
	'FOUND_SEARCH_MATCH'	=> 'החיפוש הניב תוצאה אחת בלבד',
	'FOUND_SEARCH_MATCHES'	=> 'החיפוש הניב %d תוצאות',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'החיפוש הניב יותר מ־%d תוצאות',
	
	'GLOBAL'	=> 'הכרזה גלובלית',
	
	'IGNORED_TERMS'	=> 'לא נכלל',
	'IGNORED_TERMS_EXPLAIN'	=> 'המילים הבאות לא נכללו בחיפוש שלך מפני שהן מילים נפוצות מדי: <strong>%s</strong>.',
	
	'JUMP_TO_POST'			=> 'עבור להודעה',
	
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'המערכת דורשת ממך להיות רשום ומחובר על מנת לצפות בהודעות שלך.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'המערכת דורשת ממך להיות רשום ומחובר על מנת לצפות בהודעות שלך שלא נקראו.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'המערכת דורשת ממך להיות רשום ומחובר על מנת לצפות בהודעות חדשות מאז ביקורך האחרון.',	
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'ציינת יותר מדי מילים לחיפוש. אנא אל תציין יותר מ־%1$d מילים.',
	
	'NO_KEYWORDS'			=> 'יש לציין לפחות מילה אחת לחיפוש. כל מילה חייבת להכיל לפחות %dאותיות ולא להכיל יותר מ־%d אותיות, לא כולל תווים משלימים.',
	'NO_RECENT_SEARCHES'	=> 'לא בוצעו חיפושים במערכת לאחרונה.',
	'NO_SEARCH'				=> 'אנחנו מתנצלים, אך אינך מורשה להשתמש במערכת החיפוש.',
	'NO_SEARCH_RESULTS'		=> 'לא נמצאו תוצאות מתאימות.',
	'NO_SEARCH_TIME'		=> 'אנחנו מתנצלים אך אין אפשרות להשתמש בחיפוש בזמן זה, אנא נסה שנית בעוד כמספר דקות.',
	'NO_SEARCH_UNREADS'		=> 'סליחה אך חיפוש הודעות שלא נקראו בוטל בפורום.',
	'WORD_IN_NO_POST'		=> 'לא נמצאו תוצאות מכיוון והמילה <strong>%s</strong> לא נמצאה כלל בשום הודעה.',
	'WORDS_IN_NO_POST'		=> 'לא נמצאו תוצאות מכיוון והמילים <strong>%s</strong> לא נמצאו כלל בשום הודעה.',
	
	'POST_CHARACTERS'	=> 'תווים מההודעה',
	
	'RECENT_SEARCHES'	=> 'חיפושים אחרונים שבוצעו',
	'RESULT_DAYS'	=> 'הגבל תוצאות לפי זמן כתיבה',
	'RESULT_SORT'	=> 'סדר את התוצאות עפ"י',
	'RETURN_FIRST'	=> 'מספר התווים אשר יוצגו מכל הודעה שתימצא',
	'RETURN_TO_SEARCH_ADV'	=> 'חזור לחיפוש מתקדם',
	
	'SEARCHED_FOR'	=> 'חפש לפי התנאים',
	'SEARCHED_TOPIC'	=> 'החיפוש בוצע בנושא',
	'SEARCHED_QUERY'			=> 'החיפוש בוצע על-פי שאילתה',
	'SEARCH_ALL_TERMS'	=> 'חפש הודעות הכוללות את כל מילות המפתח או השתמש בשאילתה כפי שהוכנסה',
	'SEARCH_ANY_TERMS'	=> 'חפש הודעות הכוללות לפחות אחת ממילות המפתח',
	'SEARCH_AUTHOR'	=> 'חפש לפי שם מחבר ההודעה',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'השתמש ב־* (כוכבית) כתו משלים.',
	'SEARCH_FIRST_POST'	=> 'הודעה ראשונה בנושא בלבד',
	'SEARCH_FORUMS'	=> 'חפש בפורומים',
	'SEARCH_FORUMS_EXPLAIN'	=> 'בחר את הפורום או פורומים שבהם אתה מעוניין לבצע את החיפוש. החיפוש בתתי-פורומים מתבצע אוטומטית אם אינך מכבה את "חפש בתת-פורומים" למטה.',
	'SEARCH_IN_RESULTS'	=> 'חפש בתוך תוצאות החיפוש',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'הצב <strong>+</strong> לפני ביטוי שחייב להימצא ולהיכלל בתוצאות החיפוש שלך, או <strong>-</strong> לפני ביטוי שלא חייב. תוכל גם לרשום רשימת ביטויים מופרדים ב־<strong>|</strong> וכל התאמה מאחד הביטויים יוצג לך בתוצאות החיפוש. השתמש ב־* (כוכבית) כתו משלים.',	
	'SEARCH_MSG_ONLY'	=> 'תוכן ההודעה בלבד',
	'SEARCH_OPTIONS'	=> 'אפשרויות חיפוש',
	'SEARCH_QUERY'	=> 'שאילתת חיפוש',
	'SEARCH_SUBFORUMS'	=> 'חפש בתתי-פורומים',
	'SEARCH_TITLE_MSG'	=> 'נושא ההודעה ותוכן ההודעה',
	'SEARCH_TITLE_ONLY'	=> 'נושא ההודעה בלבד',
	'SEARCH_WITHIN'	=> 'חפש בתוך',
	'SORT_ASCENDING'	=> 'סדר עולה',
	'SORT_AUTHOR'	=> 'מחבר ההודעה',
	'SORT_DESCENDING'	=> 'סדר יורד',
	'SORT_FORUM'	=> 'פורום',
	'SORT_POST_SUBJECT'	=> 'נושא ההודעה',
	'SORT_TIME'	=> 'תאריך ושעת הכתיבה',
	
	'TOO_FEW_AUTHOR_CHARS'	=> 'אתה חייב לציין לפחות %d תווים מהשם של המחבר.',
));

?>