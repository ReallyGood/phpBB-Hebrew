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

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'שיטת הטקסט המלא של MySQL ניתנת לשימוש רק עם MySQL4 ומעל.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'מאגרי הטקסט המלא של MySQL ניתנים לשימוש רק עם טבלאות MyISAM או InnoDB. MySQL 5.6.8 או גרסה מאוחר יותר נדרש לטובת מאגרי טקסט מלא בשימוש בטבלאות InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'מספר כולל של הודעות במאגר',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'מילים המכילות לפחות את כמות האותיות המצוינת יכנסו לאינדקס החיפוש. אתה או הספק שלך יכולים לשנות את הגדרה זו רק על ידי שינוי הגדרות ה־mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'מילים המכילות לא יותר מכמות האותיות המצוינת יכנסו לאינדקס החיפוש. אתה או הספק שלך יכולים לשנות את הגדרה זו רק על ידי שינוי הגדרות ה־mysql.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> '  שיטת הקצה הקדמי של הטקסט המלא של PostgreSQL אפשרית לשימוש רק עםPostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'מספר כולל של הודעות באינדקס',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL גרסת',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'פרופיל הגדרות חיפוש טקסט:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'אורך מילה מינימאלי עבור מילות מפתח',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'אורך מילה מקסימאלי עבור מילות מפתח',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'לחיפוש קצה קדמי עם PostgreSQL דרושה גרסת 8.3  ומעלה.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'ניתן להשתמש בפרופיל הגדרות החיפוש על מנת לקבוע את המפרש ואת מילון .',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'מילים בעלות מספר התווים המינימלי הזה, יכנסו למאגר הנתונים.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'מילים אשר מכילות יותר תווים, לא יכנסו למאגר.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'קבע את ההגדרות הבאות כדי ליצור קובץ הגדרות של sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'נתיב אל ספריית הנתונים',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'הוא ישמש על מנת לאחסן את האינדקסים ואת קבצי המעקב. כדאי שתנתב מעבר לתיקיות שניתנות לגישה דרך האינטרנט. (שימוש בסלשים מדלים מומלץ)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'מספר ההודעות בתדירות שמעדכנות את אינדקס הדלתא',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx אחסון ה-daemon של חיפוש  ',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'השרת שבו חיפוש ה-sphinx מחפש daemon (חיפש) מחובר. השאר ריק על מנת להשתמש בשרת ברירת המחדל localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'מגבלת הזיכרון של יוצר האינדקסים',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'המספר הזה לעולם יהיה קטן מה-RAM שיש בשרת שלך. אם אתה נתקל בבעיות מחזוריות יתכן שזה נובע מכך שיוצר האינדיקסים צורך יותר מדי משאבים. יתכן שזה יעזור להוריד את כמות המשאבים העומדים ברשות יוצר האינדקסים.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'מספר ההודעות בעמוד הראשי',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx חיפוש daemon יציאת',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'היציאה שבה חיפוש ה-sphinx deamon (חיפש) מאזין. השאר ריק על מנת להשתמש בברית המחדל sphinx API יציאה 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'חיפוש ה-sphinx ב-phpBB תומך ב-MySQL ו-PostgreSQLבלבד.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx קובץ ההגדרות של ה-',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'התוכן שנוצר מקובץ ההגדרות של ה-sphinx. המידע צריך להיות מודבק ב- sphinx.conf  שבשימוש sphinx חיפוש ה-daemon. החלף את [dbuser] ו-[dbpassword] שומרי המקום,עם פרטי המאגר.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'נתיב תיקית המידע של sphinx איננה מוגדרת. אנא הגדר את הנתיב על מנת לייצר קובץ הגדרות.',

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
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'All posts up to post id %2$d have now been indexed, of which %1$d posts were within this step.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'The current rate of indexing is approximately %1$.1f posts per second.<br />Indexing in progress…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'All posts up to post id %2$d have been removed from the search index.<br />Deleting in progress…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Successfully indexed all posts in the board database.',
	'SEARCH_INDEX_REMOVED'					=> 'Successfully deleted the search index for this backend.',
	'SEARCH_INTERVAL'						=> 'User search flood interval',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Number of seconds users must wait between searches. This interval is checked independently for each user.',
	'SEARCH_STORE_RESULTS'					=> 'Search result cache length',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Cached search results will expire after this time, in seconds. Set to 0 if you want to disable search cache.',
	'SEARCH_TYPE'							=> 'Search backend',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB allows you to choose the backend that is used for searching text in post contents. By default the search will use phpBB’s own fulltext search.',
	'SWITCHED_SEARCH_BACKEND'				=> 'You switched the search backend. In order to use the new search backend you should make sure that there is an index for the backend you chose.',

	'TOTAL_WORDS'							=> 'Total number of indexed words',
	'TOTAL_MATCHES'							=> 'Total number of word to post relations indexed',

	'YES_SEARCH'							=> 'Enable search facilities',
	'YES_SEARCH_EXPLAIN'					=> 'Enables user facing search functionality including member search.',
	'YES_SEARCH_UPDATE'						=> 'Enable fulltext updating',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Updating of fulltext indexes when posting, overridden if search is disabled.',
));
