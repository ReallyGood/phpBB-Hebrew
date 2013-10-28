<?php
/** 
*
* acp_search [Hebrew]
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'כאן אתה יכול לנהל את מאגרי שיטת החיפוש. מכיוון שאתה משתמש באופן רגיל בשיטה אחת אתה צריך למחוק את כל המאגרים אשר אינך משתמש בהם. לאחר שינוי כמה מהגדרות החיפוש (למשל מספר מינימלי/מקסימלי של תווים) כדאי ליצור מחדש את המאגר כך שהוא יושפע משינויים אלו.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'כאן אתה יכול להגדיר איזו שיטת חיפוש תשומש לאגירת הודעות וביצוע חיפושים. אתה יכול לקבוע אפשרויות שונות אשר יכולות להשפיע כמה ביצוע פעולות אלו נדרש. כמה מהגדרות אלו מתאימות לכל שיטות מנוע החיפוש.',

	'COMMON_WORD_THRESHOLD'					=> 'סף מילה נפוצה',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'מילים אשר נכללות באחוז גבוה יותר של כל ההודעות יחשבו כנפוצות. החיפוש מתעלם ממילים נפוצות. קבע ל־0 כדי לכבות. מתבצע רק אם יש יותר מ־100 הודעות. אם אתה רוצה מילים שכרגע מוגדרות כמילים נפוצות שיהיו ניתנות לחיפוש אתה חייב ליצור מחדש מאגר חיפוש.',
	'CONFIRM_SEARCH_BACKEND'				=> 'אתה בטוח שאתה רוצה להחליף לשיטת חיפוש אחרת? לאחר שינוי שיטת החיפוש אתה תצטרך ליצור מאגר לשיטת החיפוש החדשה. אם אתה לא מתכנן להחליף לשיטת החיפוש הקודמת תוכל גם למחוק את מאגר השיטה הקודמת כדי לשחרר משאבי מערכת.',
	'CONTINUE_DELETING_INDEX'				=> 'המשך בביצוע הסרת המאגר הקודם',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'ביצוע הסרת המאגר התחיל. כדי לגשת לעמוד מאגר החיפוש תצטרך להשלים את הביצוע או לבטל אותו.',
	'CONTINUE_INDEXING'						=> 'המשך בביצוע האגירה הקודם',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'תהליך אגירה התחיל. כדי לגשת לעמוד מאגר החיפוש תצטרך להשלים את הביצוע או לבטל אותו.',
	'CREATE_INDEX'							=> 'צור מאגר',

	'DELETE_INDEX'							=> 'מחק מאגר',
	'DELETING_INDEX_IN_PROGRESS'			=> 'מחיקת המאגר בביצוע',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'שיטת החיפוש מנקה כרגע את המאגר שלה. הפעולה יכולה להמשך מספר דקות.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'שיטת הטקסט המלא של MySQL ניתנת לשימוש רק עם MySQL4 ומעל.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'            => 'מאגרי הטקסט המלא של MySQL ניתנים לשימוש רק עם טבלאות MyISAM או InnoDB. MySQL 5.6.4 או גרסה מאוחר יותר נדרש לטובת מאגרי טקסט מלא בשימוש בטבלאות InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'מספר כולל של הודעות במאגר',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'תמיכה לאותיות לא לטיניות בקידוד UTF-8 בעזרת mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'תמיכה לאותיות לא לטיניות בקידוד UTF-8 בעזרת PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'אם ל־PCRE אין את מאפייני קידוד האות, שיטת החיפוש תנסה להשתמש במנוע המשפטים הרגילים של mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'שיטת החיפוש דורשת מאפייני קידוד אות של PCRE, זמין רק ב־PHP 4.4, 5.1 ומעל, אם אתה רוצה לחפש אותיות לא לטיניות.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'מילים המכילות לפחות את כמות האותיות המצוינת יכנסו לאינדקס החיפוש. אתה או הספק שלך יכולים לשנות את הגדרה זו רק על ידי שינוי הגדרות ה־mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'מילים המכילות לא יותר מכמות האותיות המצוינת יכנסו לאינדקס החיפוש. אתה או הספק שלך יכולים לשנות את הגדרה זו רק על ידי שינוי הגדרות ה־mysql.',

	'GENERAL_SEARCH_SETTINGS'				=> 'הגדרות חיפוש כלליות',
	'GO_TO_SEARCH_INDEX'					=> 'עבור לעמוד מאגר החיפוש',

	'INDEX_STATS'							=> 'סטטיסטיקות מאגר',
	'INDEXING_IN_PROGRESS'					=> 'אגירה בביצוע',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'שיטת החיפוש כרגע היא אגירת כל הודעות המערכת. הפעולה יכולה להמשך החל ממספר דקות ועד למספר שעות לפי גודל המערכת.',

	'LIMIT_SEARCH_LOAD'						=> 'הגבלת טעינת עמוד מערכת של חיפוש',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'אם טעינת המערכת לדקה עוברת ערך זה, טעינת העמוד תיעצר, 1.0 שווה לניצול ~100% של מעבד בודד. פועל רק בשרתים מבוססי UNIX.',

	'MAX_SEARCH_CHARS'						=> 'מספר תווים מקסימלי הנאגרים על־ידי החיפוש',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'מילים עם לא יותר מכמות מילים זו יאגרו לחיפוש.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'מקסימום מילים מורשים',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'מספר המילים המקסימלי שמשתמש יכול לחפש. כאשר 0 הנו כמות בלתי מוגבלת של מילים.',
	'MIN_SEARCH_CHARS'						=> 'מספר תווים מינימלי הנאגרים על־ידי החיפוש',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'מילים עם לפחות כמות זו של תווים יאגרו לחיפוש.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'מספר תווים מינימלי לשם הכותב',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'משתמשים חייבים להזין לפחות כמות זו של תווים לשם בעת ביצוע חיפוש כותב עם תו משלים. אם שם המשתמש של הכותב קצר יותר ממספר זה תוכל עדיין לחפש להודעות הכותב על־ידי הזנת שם המשתמש המלא.',

	'PROGRESS_BAR'							=> 'פס התקדמות',

	'SEARCH_GUEST_INTERVAL'					=> 'השהיית הצפה חיפושי אורח',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'מספר של שניות אשר אורחים חייבים להמתין בין חיפושים. אם אורח אחד מחפש כל האחרים חייבים להמתין כד שזמן ההשהייה יעבור.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'כל ההודעות עד להודעה מספר %1$d נכנסו כעת למאגר, מתוך %2$d הודעות אשר בתוך שלב זה.<br />הרמה הנוכחית של האגירה היא בקירוב %3$.1f הודעות לשניה.<br />אגירה בביצוע…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'כל ההודעות עד להודעה מספר %1$d הוסרו ממאגר החיפוש.<br />מחיקה בביצוע…',
	'SEARCH_INDEX_CREATED'					=> 'כל ההודעות נכנסו למאגר בבסיס הנתונים של המערכת בהצלחה.',
	'SEARCH_INDEX_REMOVED'					=> 'מאגר החיפוש לשיטה זו נמחק בהצלחה.',
	'SEARCH_INTERVAL'						=> 'השהיית הצפת חיפושי משתמש',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'מספר שניות אשר המשתמש חייב להמתין בין חיפושים. השהייה זו נבדקת באופן עצמאי לכל משתמש.',
	'SEARCH_STORE_RESULTS'					=> 'אורך תוצאת חיפוש בזיכרון מטמון',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'תוצאות חיפוש אשר בזיכרון המטמון יפוגו אחרי זמן זה, בשניות. קבע ערך זה ל0 על מנת לכבות אפשרות זו.',
	'SEARCH_TYPE'							=> 'שיטת חיפוש',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB מאפשר לך לבחור את השיטה אשר בשימוש לחיפוש טקסט בהודעות. כברירת מחדל החיפוש ישתמש בחיפוש הטקסט המלא של phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'החלפת את שיטת החיפוש. כדי להשתמש בשיטת החיפוש החדשה אתה צריך לוודא שיש מאגר לשיטה שאתה בוחר.',

	'TOTAL_WORDS'							=> 'מספר כולל של מילים במאגר',
	'TOTAL_MATCHES'							=> 'מספר כולל של קשרי מילה להודעה במאגר',

	'YES_SEARCH'							=> 'הפעל שירותי חיפוש',
	'YES_SEARCH_EXPLAIN'					=> 'הפעל את שירות החיפוש כולל חיפוש המשתמשים.',
	'YES_SEARCH_UPDATE'						=> 'הפעל עדכון טקסט מלא',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'מעדכן את מאגרי הטקסט המלא בזמן שליחה, מתבצע גם אם החיפוש כבוי.',
));

?>