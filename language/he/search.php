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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array (
  'ALL_AVAILABLE' => 'כל התווים',
  'ALL_RESULTS' => 'כל התוצאות',
  'DISPLAY_RESULTS' => 'הצג את תוצאות החיפוש כ',
  'FOUND_SEARCH_MATCHES' =>
  array (
    1 => 'החיפוש מצא תוצאה %d',
    2 => 'החיפוש מצא %d תוצאות',
  ),
  'FOUND_MORE_SEARCH_MATCHES' =>
  array (
    1 => 'החיפוש מצא יותר מתוצאה %d',
    2 => 'החיפוש מצא יותר מ-%d תוצאות',
  ),
  'GLOBAL' => 'הכרזה גלובלית',
  'IGNORED_TERMS' => 'התעלמו',
  'IGNORED_TERMS_EXPLAIN' => 'המילים הבאות בשאילתת החיפוש שלך לא נכללו מכיוון שהן מילים נפוצות מדי: <strong>%s</strong>.',
  'JUMP_TO_POST' => 'עבור להודעה',
  'LOGIN_EXPLAIN_EGOSEARCH' => 'עליך להירשם ולהתחבר כדי לצפות בהודעות שלך.',
  'LOGIN_EXPLAIN_UNREADSEARCH' => 'עליך להירשם ולהתחבר כדי לצפות בהודעות שלא נקראו.',
  'LOGIN_EXPLAIN_NEWPOSTS' => 'עליך להירשם ולהתחבר כדי לצפות בהודעות חדשות מאז ביקורך האחרון.',
  'MAX_NUM_SEARCH_KEYWORDS_REFINE' =>
  array (
    1 => 'ציינת יותר מדי מילים לחיפוש. אנא אל תזין יותר ממילה %1$d.',
    2 => 'ציינת יותר מדי מילים לחיפוש. אנא אל תזין יותר מ-%1$d מילים.',
  ),
  'NO_KEYWORDS' => 'עליך לציין לפחות מילה אחת לחיפוש. כל מילה חייבת להכיל לפחות %s ולא יותר מ-%s לא כולל תווים כלליים.',
  'NO_RECENT_SEARCHES' => 'לא בוצעו חיפושים לאחרונה.',
  'NO_SEARCH' => 'מצטערים, אין לך הרשאה להשתמש במערכת החיפוש.',
  'NO_SEARCH_RESULTS' => 'לא נמצאו תוצאות מתאימות.',
  'NO_SEARCH_LOAD' => 'מצטערים, לא ניתן להשתמש בחיפוש כרגע. השרת עמוס. אנא נסה שוב מאוחר יותר.',
  'NO_SEARCH_TIME' =>
  array (
    1 => 'מצטערים, לא ניתן להשתמש בחיפוש כרגע. אנא נסה שוב בעוד שנייה %d.',
    2 => 'מצטערים, לא ניתן להשתמש בחיפוש כרגע. אנא נסה שוב בעוד %d שניות.',
  ),
  'NO_SEARCH_UNREADS' => 'מצטערים, חיפוש הודעות שלא נקראו הושבת במערכת זו.',
  'WORD_IN_NO_POST' => 'לא נמצאו הודעות מכיוון שהמילה <strong>%s</strong> אינה מופיעה באף הודעה.',
  'WORDS_IN_NO_POST' => 'לא נמצאו הודעות מכיוון שהמילים <strong>%s</strong> אינן מופיעות באף הודעה.',
  'POST_CHARACTERS' => 'תווים מההודעות',
  'PHRASE_SEARCH_DISABLED' => 'חיפוש לפי ביטוי מדויק אינו נתמך במערכת זו.',
  'RECENT_SEARCHES' => 'חיפושים אחרונים',
  'RESULT_DAYS' => 'הגבל תוצאות לתקופה הקודמת',
  'RESULT_SORT' => 'מיין תוצאות לפי',
  'RETURN_FIRST' => 'החזר ראשונים',
  'RETURN_FIRST_EXPLAIN' => 'הגדר ל-0 כדי להציג את ההודעה המלאה.',
  'GO_TO_SEARCH_ADV' => 'עבור לחיפוש מתקדם',
  'SEARCHED_FOR' => 'ביטוי חיפוש שנעשה בו שימוש',
  'SEARCHED_TOPIC' => 'נושא שחופש',
  'SEARCHED_QUERY' => 'שאילתה שחופשה',
  'SEARCH_ALL_TERMS' => 'חפש את כל המילים או השתמש בשאילתה כפי שהוזנה',
  'SEARCH_ANY_TERMS' => 'חפש אחת מהמילים',
  'SEARCH_AUTHOR' => 'חפש לפי כותב',
  'SEARCH_AUTHOR_EXPLAIN' => 'השתמש ב-* כתו כללי להתאמות חלקיות.',
  'SEARCH_FIRST_POST' => 'הודעה ראשונה בנושאים בלבד',
  'SEARCH_FORUMS' => 'חפש בפורומים',
  'SEARCH_FORUMS_EXPLAIN' => 'בחר את הפורום או הפורומים בהם תרצה לחפש. תת-פורומים ייכללו בחיפוש אוטומטית אלא אם תבטל את "חפש בתת-פורומים" להלן.',
  'SEARCH_IN_RESULTS' => 'חפש בתוצאות אלו',
  'SEARCH_KEYWORDS_EXPLAIN' => 'הצב <strong>+</strong> לפני מילה שחייבת להימצא ו-<strong>-</strong> לפני מילה שאסור שתימצא. הכנס רשימת מילים מופרדות ב-<strong>|</strong> בתוך סוגריים אם רק אחת מהמילים צריכה להימצא. השתמש ב-* כתו כללי להתאמות חלקיות.',
  'SEARCH_MSG_ONLY' => 'טקסט הודעה בלבד',
  'SEARCH_OPTIONS' => 'אפשרויות חיפוש',
  'SEARCH_QUERY' => 'שאילתת חיפוש',
  'SEARCH_SUBFORUMS' => 'חפש בתת-פורומים',
  'SEARCH_TITLE_MSG' => 'כותרות הודעות וטקסט הודעה',
  'SEARCH_TITLE_ONLY' => 'כותרות נושאים בלבד',
  'SEARCH_WITHIN' => 'חפש בתוך',
  'SORT_ASCENDING' => 'עולה',
  'SORT_AUTHOR' => 'כותב',
  'SORT_DESCENDING' => 'יורד',
  'SORT_FORUM' => 'פורום',
  'SORT_POST_SUBJECT' => 'כותרת הודעה',
  'SORT_TIME' => 'זמן פרסום',
  'SPHINX_SEARCH_FAILED' => 'החיפוש נכשל: %s',
  'SPHINX_SEARCH_FAILED_LOG' => 'מצטערים, לא ניתן היה לבצע את החיפוש. מידע נוסף על כשל זה נרשם ביומן השגיאות.',
  'TOO_FEW_AUTHOR_CHARS' =>
  array (
    1 => 'עליך לציין לפחות תו %d משם הכותב.',
    2 => 'עליך לציין לפחות %d תווים משם הכותב.',
  ),
));
