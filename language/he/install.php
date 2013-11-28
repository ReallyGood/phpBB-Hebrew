<?php
/** 
*
* install [Hebrew]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @author 2008 - phpBB הישראלי - phpBB.co.il
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ADMIN_CONFIG'				=> 'הגדרות מנהל ראשי',
	'ADMIN_PASSWORD'			=> 'ססמה למנהל הראשי',
	'ADMIN_PASSWORD_CONFIRM'	=> 'אישור הססמה למנהל הראשי',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'הזן ססמה באורך של 6 ועד 30 תווים.',
	'ADMIN_TEST'				=> 'בדיקת הגדרות מנהל ראשי',
	'ADMIN_USERNAME'			=> 'שם משתמש למנהל הראשי',
	'ADMIN_USERNAME_EXPLAIN'	=> 'הזן שם משתמש באורך של בין 3 ועד 20 תווים.',
	'APP_MAGICK'				=> 'תמיכה Imagemagick [ צירוף קבצים ]',
	'AUTHOR_NOTES'				=> 'הערות יוצר<br />» %s',
	'AVAILABLE'					=> 'זמין',
	'AVAILABLE_CONVERTORS'		=> 'המרות זמינות',

	'BEGIN_CONVERT'					=> 'התחל המרה',
	'BLANK_PREFIX_FOUND'			=> 'סריקת הטבלאות שלך העלתה התקנה חוקית ללא שימוש בקידומת הטבלאות.',
	'BOARD_NOT_INSTALLED'			=> 'לא נמצאה התקנה',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'ממשק ההמרה הייחודי של phpBB3 דורש מערכת phpBB3 מותקנת, <a href="%s">המשך בהתקנת phpBB3</a>.',
	'BACKUP_NOTICE'					=> 'אנא גבה את המערכת שלך לפני השדרוג למקרה ויתעוררו בעיות במהלך תהליך השדרוג.',
	
	'CATEGORY'					=> 'קטגוריה',
	'CACHE_STORE'				=> 'סוג זיכרון',
	'CACHE_STORE_EXPLAIN'		=> 'המיקום הפיזי בו הנתונים מאוחסנים, מערכת קבצים מועדפת.',
	'CAT_CONVERT'				=> 'המרה',
	'CAT_INSTALL'				=> 'התקנה',
	'CAT_OVERVIEW'				=> 'סקירה כללית',
	'CAT_UPDATE'				=> 'עדכון',
	'CHANGE'					=> 'שנה',
	'CHECK_TABLE_PREFIX'		=> 'בדוק את קידומת הטבלאות שלך ונסה שנית.',
	'TABLE_PREFIX_EXPLAIN'		=> 'הקידומת חייבת להתחיל באות, ויכולה להכיל אותיות, מספרים וקו תחתון בלבד.',
	'CLEAN_VERIFY'				=> 'מנקה ומוודא את המבנה הסופי',
	'CLEANING_USERNAMES'		=> 'מנקה שמות משתמשים',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> הוא שם המשתמש החדש של:',
	'COLLIDING_USERNAMES_FOUND'	=> 'התנגשות בשמות משתמשים נמצאה בפורום הישן שלך. כדי להשלים את ההמרה, מחק או שנה את שמות המשתמשים הללו כך שיהיה משתמש אחד לכל שם בלבד.',
	'COLLIDING_USER'			=> '» מספר משתמש: <strong>%d</strong> שם משתמש: <strong>%s</strong> (%d הודעות)',
	'CONFIG_CONVERT'			=> 'ממיר הגדרות',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'לא ניתן לכתוב לקובץ ההגדרות. שיטות חלופיות ליצירת קובץ זה מובאות להלן.',
	'CONFIG_FILE_WRITTEN'		=> 'קובץ ההגדרות נכתב. תוכל להמשיך כעת לשלב הבא של ההתקנה.',
	'CONFIG_PHPBB_EMPTY'		=> 'משתנה ההגדרות של phpBB3 לערך “%s” ריק.',
	'CONFIG_RETRY'				=> 'נסה שנית',
	'CONTINUE_CONVERT'			=> 'המשך המרה',
	'CONTINUE_CONVERT_BODY'		=> 'ניסיון המרה קודם התגלה. תוכל לבחור כעת בין להתחיל המרה חדשה או להמשיך בהמרה הקודמת.',
	'CONTINUE_LAST'				=> 'ממשיך משפטים אחרונים',
	'CONTINUE_OLD_CONVERSION'	=> 'המשך המרה שהותחלה מקודם',
	'CONVERT'					=> 'המרה',
	'CONVERT_COMPLETE'			=> 'ההמרה הושלמה',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'You have now successfully converted your board to phpBB 3.1. You can now login and <a href="../">access your board</a>. Please ensure that the settings were transferred correctly before enabling your board by deleting the install directory. Remember that help on using phpBB is available online via the <a href="https://www.phpbb.com/support/documentation/3.0/">Documentation</a> and the <a href="https://www.phpbb.com/community/viewforum.php?f=46">support forums</a>.',
	'CONVERT_INTRO'				=> 'ברוך הבא אל ממשק ההמרה הייחודי של phpBB3',
	'CONVERT_INTRO_BODY'		=> 'מכאן, אתה יכול לייבא נתונים מתוכנות מערכת אחרות (מותקנות). הרשימה הבאה מציגה את כל אפשרויות ההמרה הזמינות הנוכחיות. אם אין המרה מוצגת ברשימה זו לתוכנת המערכת ממנה אתה מעוניין להמיר, בדוק באתר שלנו בו יכולות להיות זמינות אפשרויות המרה נוספות להורדה.',
	'CONVERT_NEW_CONVERSION'	=> 'המרה חדשה',
	'CONVERT_NOT_EXIST'			=> 'ההמרה שצוינה אינה קיימת.',
	'CONVERT_OPTIONS'			=> 'אפשרויות',
	'CONVERT_SETTINGS_VERIFIED'	=> 'המידע שהוזן אושר. כדי להתחיל בתהליך ההמרה, אנא לחץ על הכפתור מתחת.',
	'CONV_ERR_FATAL'					=> 'התרחשה שגיאה בהמרה',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'העלאת FTP לקבצים מצורפים פעילה בפורום הישן. כבה את אפשרות העלאת FTP וודא שתיקיית העלאה חוקית צוינה, ולאחר מכן העתק את כל הקבצים המצורפים לתיקייה הנגישה לרשת החדשה הזו. לאחר שביצעת זאת, התחל מחדש את ההמרה.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'אין פרטי הגדרות זמינים להמרה.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'לא ניתן לקבל את פרטי הגישה לפורום.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'לא ניתן לקבל קטגוריות.',
	'CONV_ERROR_GET_CONFIG'				=> 'לא ניתן לקבל את הגדרות המערכת שלך.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'לא ניתן לגשת/לקרוא את “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'לא ניתן לקבל פרטי הרשאות קבוצה.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'אי התאמה בטבלת הקבוצות התגלתה ב־add_bots() - אתה צריך להוסיף את כל הקבוצות המיוחדות אם תרצה זאת בעצמך.',
	'CONV_ERROR_INSERT_BOT'				=> 'לא ניתן להוסיף פרטי רובוט לטבלת המשתמשים.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'לא ניתן להוסיף פרטי רובוט לטבלת הרובוטים.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'לא ניתן להוסיף משתמש לטבלת קבוצות המשתמשים.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'הודעת שגיאה תחבירית',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'הערה למפתח: אתה חייב לציין $convertor[\'avatar_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'הנתיב היחסי למערכת המקורית לא צוין.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'הערה למפתח: אתה חייב לציין $convertor[\'avatar_gallery_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_GROUP'				=> 'הקבוצה "%1$s" לא נמצאה ב־%2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'הערה למפתח: אתה חייב לציין $convertor[\'ranks_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'הערה למפתח: אתה חייב לציין $convertor[\'smilies_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'הערה למפתח: אתה חייב לציין $convertor[\'upload_path\'] כדי להשתמש ב־%s.',
	'CONV_ERROR_PERM_SETTING'			=> 'לא ניתן להוסיף/לעדכן הגדרת הרשאה.',
	'CONV_ERROR_PM_COUNT'				=> 'לא ניתן לבחור מונה תיקיית הודעות פרטיות.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'לא ניתן להוסיף פורום חדש המחליף קטגוריה ישנה.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'לא ניתן להוסיף פורום חדש המחליף פורום ישן.',
	'CONV_ERROR_USER_ACCESS'			=> 'לא ניתן לקבל פרטי גישת משתמש.',
	'CONV_ERROR_WRONG_GROUP'			=> 'הקבוצה השגויה "%1$s" מוגדרת ב־%2$s.',
	'CONV_OPTIONS_BODY'					=> 'עמוד זה אוסף את הנתונים הנדרשים כדי לגשת למערכת המקור. הזן את פרטי בסיס הנתונים של המערכת הקודמת שלך. ההמרה לא תשנה שום דבר בבסיס הנתונים אשר ניתן להלן. מערכת המקור צריכה להיות כבויה כדי לאפשר המרה עקבית.',
	'CONV_SAVED_MESSAGES'				=> 'הודעות שמורות',

	'COULD_NOT_COPY'			=> 'לא ניתן להעתיק קובץ <strong>%1$s</strong> אל <strong>%2$s</strong><br /><br />בדוק כי תיקיית היעד קיימת וניתנת לכתיבה על־ידי השרת.',
	'COULD_NOT_FIND_PATH'		=> 'לא ניתן לאתר את הנתיב למערכת הקודמת שלך. בדוק את ההגדרות ונסה שנית.<br />» %s צוין בתור הנתיב במקור',

	'DBMS'						=> 'סוג בסיס נתונים',
	'DB_CONFIG'					=> 'הגדרות בסיס נתונים',
	'DB_CONNECTION'				=> 'חיבור לבסיס הנתונים',
	'DB_ERR_INSERT'				=> 'שגיאה בעת ביצוע שאילתת <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'שגיאה בעת ביצוע <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'שגיאה בעת ביצוע <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'שגיאה בעת ביצוע <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'שגיאה בעת ביצוע שאילתת <code>SELECT</code>.',
	'DB_HOST'					=> 'שם שרת בסיס הנתונים או DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN הנו שם מקור הנתונים ומתאים להתקני ODBC בלבד. ב־PostgreSQL, השתמש ב־localhost כדי להתחבר לשרת המקומי דרך UNIX domain socket ו־127.0.0.1 כדי להתחבר דרך TCP. עבור SQLite, הכנס את הנתיב המלא לקובץ בסיס הנתונים שלך.',
	'DB_NAME'					=> 'שם בסיס הנתונים',
	'DB_PASSWORD'				=> 'ססמה לבסיס הנתונים',
	'DB_PORT'					=> 'יציאת שרת בסיס הנתונים',
	'DB_PORT_EXPLAIN'			=> 'השאר ריק אלא אם כן אתה יודע שהשרת שלך משתמש ביציאה לא רגילה.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'אנו מצטערים, אך סקריפט זה לא תומך בשדרוג מגרסאות phpBB הקודמות ל־“%1$s”. הגרסה אשר מותקנת אצלך כרגע היא “%2$s”. אנא שדרג לגרסה קודמת לפני הרצת סקריפט זה. עזרה תינתן בפורומי התמיכה בphpBB.co.il.',
	'DB_USERNAME'				=> 'שם משתמש לבסיס הנתונים',
	'DB_TEST'					=> 'בדיקת חיבור',
	'DEFAULT_LANG'				=> 'שפת מערכת כברירת מחדל',
	'DEFAULT_PREFIX_IS'			=> 'ההמרה לא מצאה טבלאות עם הקידומת שצוינה. וודא שהזנת את הפרטים הנכונים למערכת ממנה אתה ממיר. קידומת הטבלאות כברירת מחדל ל־%1$s היא <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'לא צוין ערך למשתנה test_file בהמרה. אם אתה משתמש של המרה זו, אינך אמור להיתקל בשגיאה זו, דווח על הודעה זו ליוצר ההמרה. אם אתה יוצר ההמרה, אתה חייב לציין את שם הקובץ הקיים במערכת המקורית כדי לאפשר לנתיב אליו להיות חוקי.',
	'DIRECTORIES_AND_FILES'		=> 'התקן תיקיות וקבצים',
	'DISABLE_KEYS'				=> 'מכבה מפתחות',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'תמיכה ב־FTP מרחוק [ התקנה ]',
	'DLL_GD'					=> 'תמיכה בגראפיקות ספריה גראפית [ אימות חזותי ]',
	'DLL_MBSTRING'				=> 'תמיכה בתווים מרובי בייטים',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ דרך ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ מקומי ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL עם סיומת MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'תמיכה ב־XML [ Jabber ]',
	'DLL_ZLIB'					=> 'תמיכה בדחיסת zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'הורד קובץ הגדרות',
	'DL_CONFIG_EXPLAIN'			=> 'אתה יכול להוריד את הקובץ config.php אל המחשב האישי שלך. תצטרך להעלות את הקובץ בעצמך, תוך כדי החלפת קובץ config.php הקיים בתיקייה הראשית של phpBB3 זכור להעלות את הקובץ בפורמט ASCII (ראה את תיעוד יישום ה־FTP שלך אם אינך בטוח כיצד לבצע זאת). לאחר שהעלת את הקובץ config.php, לחץ על “בוצע” כדי לעבור לשלב הבא.',
	'DL_DOWNLOAD'				=> 'הורד',
	'DONE'						=> 'בוצע',

	'ENABLE_KEYS'				=> 'מפעיל מחדש מפתחות. הפעולה יכולה להמשך מספר דקות.',

	'FILES_OPTIONAL'			=> 'קבצים ותיקיות לא נדרשים',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>לא נדרש</strong> - הקבצים, התיקיות או הגדרות ההרשאה שלהלן אינם נדרשים. מערכת ההתקנה תנסה להשתמש בשיטות שונות כדי ליצור אותם אם הם לא קיימים או אם הם לא ניתנים לכתיבה, אך המצאותם תמהר את ההתקנה.',
	'FILES_REQUIRED'			=> 'קבצים ותיקיות',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>נדרש</strong> - כדי להפעיל את phpBB3 כראוי, הקבצים או התיקיות הבאים חייבים להיות ניתנים לכתיבה. אם אתה רואה “לא נמצא”, אתה צריך ליצור את הקובץ או התיקייה המיוחסים. אם אתה רואה “לא ניתן לכתיבה”, אתה צריך לשנות את הגדרות הקובץ או התיקייה כדי ש־phpBB3 תוכל לכתוב אליהם.',
	'FILLING_TABLE'				=> 'ממלא טבלה <strong>%s</strong>',
	'FILLING_TABLES'			=> 'ממלא טבלאות',
	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'phpBB כבר לא תומכת ב־Firebird/Interbase הקודמות לגרסה 2.1. אנא שדרג את ה־Firebird שלך לפחות ל2.1.0 לפני שתמשיך בשדרוג.',
	'FINAL_STEP'				=> 'ממשיך לשלב הסופי',
	'FORUM_ADDRESS'				=> 'כתובת המערכת',
	'FORUM_ADDRESS_EXPLAIN'		=> 'זוהי הכתובת למערכת הקודמת שלך, למשל <samp>http://www.example.com/phpBB/</samp>. אם כתובת הוזנה כאן והשדה לא נשאר ריק, כל דוגמה של כתובת זו תוחלף בכתובת המערכת החדשה בהודעות, הודעות פרטיות וחתימות.',
	'FORUM_PATH'				=> 'נתיב למערכת',
	'FORUM_PATH_EXPLAIN'		=> 'זהו הנתיב <strong>היחסי</strong> למערכת הקודמת שלך מ<strong>תיקיית ההתקן של מערכת phpBB3 זו</strong>',
	'FOUND'						=> 'נמצא',
	'FTP_CONFIG'				=> 'העבר הגדרות בעזרת FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB3 גילה כי אפשרות ה־FTP פעילה בשרת זה. תוכל להתקין את הקובץ config.php דרך אפשרות זו אם אתה מעוניין. תצטרך לספק את המידע הרשום להלן. זכור ששם המשתמש והססמה הם השייכים לשרת! (שאל את ספק האחסון שלך לפרטים אם אינך בטוח לגביהם).',
	'FTP_PATH'					=> 'נתיב FTP',
	'FTP_PATH_EXPLAIN'			=> 'זהו הנתיב מהתיקייה הראשית אל phpBB, למשל <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'העלה',

	'GPL'						=> 'הסכם שימוש ציבורי כללי',
	
	'INITIAL_CONFIG'			=> 'הגדרות בסיסיות',
	'INITIAL_CONFIG_EXPLAIN'	=> 'כעת לאחר שההתקנת phpBB3.1 הסתיימה, אתה צריך לספק כמה פרטים. אם אינך יודע כיצד להתחבר לבסיס הנתונים שלך, צור קשר עם ספק האחסון שלך (בשלב הראשון) או השתמש בפורומי התמיכה של phpBB. בעת הזנת הפרטים וודא שאתה בודק אותם ביסודיות לפני שתמשיך.',
	'INSTALL_CONGRATS'			=> 'ברכותינו!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		התקנת בהצלחה את phpBB %1$s. אנא המשך בבחירה באחת מהאפשרויות הבאות:</p>
		<h2>המרת מערכת קיימת ל־phpBB3</h2>
		<p>ממשק ההמרה הייחודי של phpBB3 תומך בהמרה של phpBB2.0.x ומערכות אחרות ל־phpBB3. אם יש לך מערכת קיימת אותה אתה מעוניין להמיר, <a href="%2$s">המשך אל הממיר</a>.</p>
		<h2>הפעל את מערכת phpBB3 שלך!</h2>
		<p>לחיצה על הכפתור מתחת תיקח אותך לטופס לשליחת מידע סטטיסטי ל־phpBB בלוח הבקרה למנהלים ראשיים. אנחנו נעריך אם תוכל לעזור לנו בכך שתשלח את המידע ההוא. לאחר מכן מומלץ שתיקח לעצמך מעט זמן כדי לבחון את האפשרויות הזמינות לך. זכור שעזרה תינתן דרך <a href="https://www.phpbb.com/support/documentation/3.0/">התיעוד</a>,<a href="%3$s">קרא אותי</a> וגם <a href="http://www.phpbb.co.il/">פורומי התמיכה</a>.</p><p><strong>אנא מחק, העבר או שנה את שם התיקייה install לפני שתשתמש במערכת שלך. בעוד שהתיקייה עדיין קיימת, רק לוח הבקרה למנהלים ראשיים יהיה נגיש.</strong>',
	'INSTALL_INTRO'				=> 'ברוך הבא להתקנה',

	'INSTALL_INTRO_BODY'		=> 'עם אפשרות זו, תוכל להתקין את phpBB3 על גבי השרת שלך.</p><p>בשביל להמשיך, תצטרך את הגדרות בסיס הנתונים שלך. אם אינך יודע מה הן הגדרות בסיס הנתונים שלך, צור קשר עם ספק האחסון שלך ושאל אותו. לא תוכל להמשיך בלעדיהם. אתה צריך:</p>

	<ul>
		<li>סוג בסיס הנתונים - בסיס הנתונים בו אתה תשתמש.</li>
		<li>שם שרת בסיס הנתונים או DSN - כתובת שרת בסיס הנתונים.</li>
		<li>יציאת שרת בסיס הנתונים - היציאה של שרת בסיס הנתונים (בדרך כלל לא דרוש).</li>
		<li>שם בסיס הנתונים - השם של בסיס הנתונים בשרת.</li>
		<li>שם משתמש לבסיס נתונים וססמה לבסיס נתונים - פרטי ההתחברות לגישה לבסיס הנתונים.</li>
	</ul>

	<p><strong>הערה:</strong> אם אתה מתקין בעזרת SQLite, אתה צריך להזין את הנתיב המלא לקובץ בסיס הנתונים בשדה ה־DSN ולהשאיר את שדות שם המשתמש והססמה ריקים. מטעמי ביטחון, אתה צריך לוודא שהקובץ אינו נמצא במיקום הנגיש לרשת.</p>

	<p>phpBB3 תומך בבסיסי הנתונים הבאים:</p>
	<ul>
		<li>MySQL 3.23 או מעל (MySQLi נתמך)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 או מעל (ישירות או דרך ODBC)</li>
		<li>MS SQL Server 2005 או מעל (מקומי)</li>
		<li>Oracle</li>
	</ul>
	
	<p>רק בסיסי הנתונים אשר נתמכים בשרת שלך יוצגו.',
	'INSTALL_INTRO_NEXT'		=> 'כדי להתחיל בהתקנה, לחץ על הכפתור הבא.',
	'INSTALL_LOGIN'				=> 'התחבר',
	'INSTALL_NEXT'				=> 'שלב הבא',
	'INSTALL_NEXT_FAIL'			=> 'כמה בדיקות נכשלו ואתה צריך לתקן בעיות אלו לפני שתמשיך לשלב הבא. אם לא תעשה זאת, ההתקנה עלולה להיות לא שלמה.',
	'INSTALL_NEXT_PASS'			=> 'כל הבדיקות הבסיסיות עברו ואתה יכול להמשיך לשלב הבא של ההתקנה. אם שינית הרשאות, אפשרויות, וכד\' ואתה מעוניין לבצע את הבדיקות שנית, תוכל לעשות זאת.',
	'INSTALL_PANEL'				=> 'לוח התקנה',
	'INSTALL_SEND_CONFIG'		=> 'לרוע המזל, phpBB3 לא יכל לכתוב את פרטי ההגדרות ישירות לקובץ config.php. זה יכול להיות מפני שהקובץ אינו קיים או אינו ניתן לכתיבה. מספר אפשרויות ירשמו להלן המאפשרות לך להשלים את התקנת config.php.',
	'INSTALL_START'				=> 'התחל התקנה',
	'INSTALL_TEST'				=> 'בדוק שנית',
	'INST_ERR'					=> 'שגיאת התקנה',
	'INST_ERR_DB_CONNECT'		=> 'לא ניתן להתחבר לבסיס הנתונים, ראה הודעת שגיאה להלן.',
	'INST_ERR_DB_FORUM_PATH'	=> 'קובץ בסיס הנתונים שצוין נמצא בתוך עץ תיקיות המערכת. אתה צריך לשים קובץ זה במיקום לא נגיש.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'הקידומת שהזנת לא חוקית. היא חייבת להתחיל באות, ויכולה להכיל אותיות, מספרים וקו תחתון בלבד.',
	'INST_ERR_DB_NO_ERROR'		=> 'לא ניתנה הודעת שגיאה.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'הגרסה של MySQL המותקנת על שרת זה אינה מותאמת לאפשרות “MySQL עם סיומת MySQLi” אשר בחרת. נסה את האפשרות “MySQL” במקום זאת.',
	'INST_ERR_DB_NO_SQLITE'		=> 'הגרסה של סיומת SQLite אשר התקנת ישנה מדי, אתה חייב לשדרג אותה לפחות לגרסה 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'הגרסה של Oracle המותקנת על שרת זה דורשת ממך לקבוע את הפרמטר <var>NLS_CHARACTERSET</var> ל־<var>UTF8</var>. שדרג את ההתקנה לגרסה 9.2+ או שנה את הפרמטר.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'הגרסה של Firebird המותקנת על שרת זה ישנה יותר מגרסה 2.1, שדרג לגרסה חדשה יותר.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'בסיס הנתונים אשר בחרת ל־Firebird בעל גודל עמוד הפחות מ־8192, הגודל חייב להיות לפחות 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'בסיס הנתונים שבחרת לא נוצר בקידוד <var>UNICODE</var> או <var>UTF8</var>. נסה להתקין עם בסיס נתונים בקידוד <var>UNICODE</var> או <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'לא צוין שם בסיס הנתונים.',
	'INST_ERR_EMAIL_INVALID'	=> 'כתובת הדואר האלקטרוני שהזנת אינה חוקית.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'כתובות הדואר האלקטרוני שהזנת אינן תואמות.',
	'INST_ERR_FATAL'			=> 'שגיאת התקנה חמורה',
	'INST_ERR_FATAL_DB'			=> 'שגיאת בסיס נתונים חמורה ובעלת אפשרות לתיקון התרחשה. הסיבה יכולה להיות כי המשתמש שצוין לבסיס הנתונים לא בעל ההרשאות המתאימות לנתוני <code>CREATE TABLES</code> או <code>INSERT</code>, וכד\'. מידע נוסף יכול להינתן להלן. צור קשר עם ספק האחסון שלך בשלב הראשון או עם פורומי התמיכה של phpBB לתמיכה נוספת.',
	'INST_ERR_FTP_PATH'			=> 'לא ניתן לשנות לתיקייה שהוזנה, בדוק את הנתיב.',
	'INST_ERR_FTP_LOGIN'		=> 'לא ניתן להתחבר לשרת FTP, בדוק את שם המשתמש והססמה שלך.',
	'INST_ERR_MISSING_DATA'		=> 'אתה חייב להשלים את כל השדות בחלק זה.',
	'INST_ERR_NO_DB'			=> 'לא ניתן לטעון את אפשרות PHP לסוג בסיס הנתונים הנבחר.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'הססמאות שהזנת אינן תואמות.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'הססמה שהזנת ארוכה מדי. האורך המרבי הוא 30 תווים.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'הססמה שהזנת קצרה מדי. האורך המינימלי הוא 6 תווים.',
	'INST_ERR_PREFIX'			=> 'טבלאות עם הקידומת שצוינה כבר קיימות, בחר קידומת אחרת.',
	'INST_ERR_PREFIX_INVALID'	=> 'קידומת הטבלאות שציינת אינה חוקית לבסיס הנתונים שלך. נסה קידומת אחרת, הסר תווים כמו מקף.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'קידומת הטבלאות שציינת ארוכה מדי. האורך המרבי הוא %d תווים.',
	'INST_ERR_USER_TOO_LONG'	=> 'שם המשתמש שהזנת ארוך מדי. האורך המרבי הוא 20 תווים.',
	'INST_ERR_USER_TOO_SHORT'	=> 'שם המשתמש שהזנת קצר מדי. האורך המינימלי הוא 3 תווים.',
	'INVALID_PRIMARY_KEY'		=> 'מפתח ראשי שגוי : %s',
	
	'LONG_SCRIPT_EXECUTION'		=> 'שים לב שהפעולה עלולה להמשך זמן רב… אנא אל תעצור את הפעולה.',

	// mbstring
	'MBSTRING_CHECK'						=> 'בדיקת סיומת <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>נדרש</strong> - <samp>mbstring</samp> היא סיומת PHP אשר מספקת פונקציות מחרוזות מרובות בייטים. מאפיינים מסוימים של mbstring לא מותאמים ל־phpBB3 וחייבים להיות כבויים.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'פונקציית עומס יתר',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> חייב להיקבע ל־0 או 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'קידוד תו ברור',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> חייב להיקבע ל־0.',
	'MBSTRING_HTTP_INPUT'					=> 'המרת תו קלט HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> חייב להיקבע ל־<samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'המרת תו פלט HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> חייב להיקבע ל־<samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'וודא שהתיקייה הבאה קיימת וניתנת לכתיבה על־ידי השרת ונסה שנית:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'וודא שהתיקיות הבאות קיימות וניתנות לכתיבה על־ידי השרת ונסה שנית:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'מבנה בסיס הנתונים MySQL שלך ל־phpBB ישן מדי. phpBBדורש מבנה ל־MySQL 3.x/4.x, אבל השרת פועל על MySQL %2$s.<br /><strong>לפני שתמשיך בעדכון, אתה צריך לשדרג את המבנה.</strong><br /><br />אנא עבור אל <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">המאמר לגבי ששדרוג מבנה MySQL</a>. אם אתה נתקל בבעיות, תוכל להשתמש <a href="http://www.phpbb.co.il/viewforum.php?f=21">בפורומי התמיכה שלנו</a>.',

	'NAMING_CONFLICT'			=> 'התנגשות שמות: %s ו־%s שניהם כינויים<br /><br />%s',
	'NEXT_STEP'					=> 'המשך לשלב הבא',
	'NOT_FOUND'					=> 'לא ניתן למצוא',
	'NOT_UNDERSTAND'			=> 'לא ניתן לקרוא %s #%d, טבלה %s (“%s”)',
	'NO_CONVERTORS'				=> 'אין המרות זמינות לשימוש.',
	'NO_CONVERT_SPECIFIED'		=> 'לא צוינה המרה.',
	'NO_LOCATION'				=> 'לא ניתן לקבוע מיקום. אם אתה בטוח כי Imagemagick מותקן, תוכל לציין את המיקום מאוחר יותר בלוח הבקרה למנהלים ראשיים',
	'NO_TABLES_FOUND'			=> 'לא נמצאו טבלאות.',
	'OVERVIEW_BODY'					=> 'ברוך הבא ל־phpBB3!<br /><br />"phpBB הישראלי" הנו התרגום העברי הרשמי של phpBB® אשר הינה מערכת הפורומים המבוססת על קוד פתוח אשר בשימוש הרחב ביותר בעולם. phpBB3 הוא ההתקן האחרון בפיתוח הנמשך שבע שנים. כמו קודמיה, phpBB3 עשירה במאפיינים, ידידותית למשתמש, ונתמכת בצורה מלאה על־ידי צוות phpBB הישראלי. phpBB3 משפרת בצורה רבה את מה שקיים כבר ב־phpBB גרסה 2 המצליחה, ומוסיפה מאפיינים בעלי ביקוש רב אשר אינם קיימים בגרסאות הקודמות.אנו מקווים כי היא עוברת את ציפיותיך.<br /><br />מערכת התקנה זו תדריך אותך לאורך התקנת phpBB3, עדכון לגרסה האחרונה של phpBB3 מגרסאות קודמות, וכמו כן המרה ל־phpBB3 ממערכת פורומים שונות (כולל phpBB2). למידע נוסף, אנו ממליצים לך לקרוא את <a href="../docs/INSTALL.html">מדריך ההתקנה</a>.<br /><br />כדי לקרוא את רישיון phpBB3 וללמוד על קבלת תמיכה ועמדתנו לגביה, בחר באפשרויות המתאימות בתפריט הצדדי. להמשך, בחר בתווית המתאימה אשר מעל.',
	'PCRE_UTF_SUPPORT'				=> 'תמיכה ב־PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>לא</strong> תפעל אם התקן ה־PHP שלך אינו מותאם לתמיכה ב־UTF-8 בסיומת PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'פונקציית ה־PHP getimagesize() זמינה',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>נדרש</strong> - כדי ש־phpBB3 תעבוד כראוי, הפונקציה getimagesize צריכה להיות זמינה.',
	'PHP_JSON_SUPPORT'        		=> 'PHP JSON support',
	'PHP_JSON_SUPPORT_EXPLAIN'    	=> '<strong>Required</strong> - In order for phpBB to function correctly, the PHP JSON extension needs to be available.',
	'PHP_OPTIONAL_MODULE'			=> 'אפשרויות נוספות',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>לא נדרש</strong> - אפשרויות או יישומים אלו אינם נדרשים, אך זמינותם תאפשר לך מאפיינים נוספים.',
	'PHP_SUPPORTED_DB'				=> 'בסיסי נתונים נתמכים',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>נדרש</strong> - אתה חייב לתמוך בבסיס נתונים אחד לפחות המותאם ל־PHP. אם לא מוצגים בסיסי נתונים זמינים, אתה צריך ליצור קשר עם ספק האחסון שלך או לסקור את מסמך ההתקן של PHP המתאים לעזרה.',
	'PHP_REGISTER_GLOBALS'			=> 'הגדרת PHP <var>register_globals</var> כבויה',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB3 עדיין תפעל אם ההגדרה פעילה, אבל אם אפשרי, מומלץ ש־register_globals תהיה כבויה בהתקן ה־PHP שלך מטעמי ביטחון.',
	'PHP_SAFE_MODE'					=> 'מצב בטוח',
	'PHP_SETTINGS'					=> 'גרסת PHP והגדרות',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>נדרש</strong> - אתה חייב להריץ את גרסה 5.3.3 של PHP או גבוהה יותר כדי להתקין את phpBB3. אם <var>safe mode</var> (מצב בטוח) מוצג להלן, התקן ה־PHP פועל במצב זה. המצב יגרום להגבלות על הניהול מרחוק ומאפיינים דומים.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'הגדרת ה־PHP <var>allow_url_fopen</var> פעילה',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>לא נדרש</strong> - ההגדרה אינה נדרשת, אך פונקציות מסוימות של phpBB3 כמו הסמלים האישיים של האתר הכבוי לא יעבדו כראוי בלעדיה.',
	'PHP_VERSION_REQD'				=> 'גרסת PHP >= 5.3.3',
	'POST_ID'						=> 'מספר הודעה',
	'PREFIX_FOUND'					=> 'סריקת הטבלאות שלך הציגה התקנה חוקית המשתמשת ב־<strong>%s</strong> בתור הקידומת לטבלאות.',
	'PREPROCESS_STEP'				=> 'מבצע פונקציות/שאילתות מקדימות לתהליך',
	'PRE_CONVERT_COMPLETE'			=> 'כל שלבי ההכנה להמרה הושלמו בהצלחה. תוכל להתחיל כעת בתהליך ההמרה הממשי. שים לב שתוכל לבצע ולהתאים כמה דברים ידנית. לאחר ההמרה, בייחוד לאחר בדיקת ההרשאות שנקבעו, בנה מחדש את טבלאות החיפוש אשר לא הומרו וגם וודא שקבצים הועתקו כראוי, למשל סמלים אישיים וסמיילים.',
	'PROCESS_LAST'					=> 'מבצע משפטים אחרונים',

	'REFRESH_PAGE'				=> 'רענן עמוד כדי להמשיך בהמרה',
	'REFRESH_PAGE_EXPLAIN'		=> 'אם נקבע לכן, ההמרה תרענן את העמוד כדי להמשיך בתהליך ההמרה לאחר שהסתיים שלב. אם זוהי ההמרה הראשונה שלך למטרות בדיקה ובמטרה לזהות שגיאות, אנו מציעים לקבוע ללא.',
	'REQUIREMENTS_TITLE'		=> 'תאימות התקנה',
	'REQUIREMENTS_EXPLAIN'		=> 'לפני שתמשיך להתקנה המלאה, phpBB3 תבצע כמה בדיקות על הגדרות השרת והקבצים שלך כדי לוודא שתוכל להתקין ולהריץ את phpBB3. וודא שאתה קורא את התוצאות ביסודיות ואל תמשיך עד שכל הבדיקות הנדרשות עברו. אם תרצה להשתמש בכל אחד מהמאפיינים התלויים על הבדיקות הנוספות, תצטרך לוודא שגם בדיקות אלו עברו.',
	'RETRY_WRITE'				=> 'נסה לכתוב להגדרות שנית',
	'RETRY_WRITE_EXPLAIN'		=> 'אם תרצה, תוכל לשנות את הרשאות הקובץ config.php כדי לאפשר ל־phpBB3 לכתוב אליו. אם תרצה לעשות זאת, תוכל ללחוץ על הכפתור הבא כדי לנסות לכתוב לקובץ ההגדרות שנית. זכור להחזיר את הרשאות הקובץ config.php לאחר שphpBB3 סיים בהתקנה.',

	'SCRIPT_PATH'				=> 'נתיב הסקריפט',
	'SCRIPT_PATH_EXPLAIN'		=> 'הנתיב בו phpBB3 נמצא יחסית לשם המתחם, למשל <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'בחר שפה',
	'SERVER_CONFIG'				=> 'הגדרות שרת',
	'SEARCH_INDEX_UNCONVERTED'	=> 'טבלאות חיפוש לא הומרו',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'טבלאות החיפוש הישנות לא הומרו. החיפוש תמיד יניב תוצאה ריקה. כדי ליצור טבלאות חיפוש חדשות עבור ללוח הבקרה למנהלים ראשיים, בחר תחזוקה ולאחר מכן בחר טבלאות חיפוש מהתפריט המשני.',
	'SELECT_FORUM_GA'			=> 'In phpBB 3.1 the global announcements are linked to forums. Select a forum for your current global announcements (can be moved later):',
	'SOFTWARE'					=> 'תוכנת מערכת',
	'SPECIFY_OPTIONS'			=> 'ציון אפשרויות המרה',
	'STAGE_ADMINISTRATOR'		=> 'פרטי מנהל ראשי',
	'STAGE_ADVANCED'			=> 'הגדרות מתקדמות',
	'STAGE_ADVANCED_EXPLAIN'	=> 'ההגדרות בעמוד זה הכרחיות כדי לקבוע אם אתה יודע שאתה מעוניין בהגדרה השונה מברירת המחדל. אם אינך בטוח, פשוט המשך לשלב הבא, שכן ניתן לשנות הגדרות אלו מלוח הבקרה למנהלים ראשיים מאוחר יותר.',
	'STAGE_CONFIG_FILE'			=> 'קובץ הגדרות',
	'STAGE_CREATE_TABLE'		=> 'צור טבלאות בסיס נתונים',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'טבלאות בסיס הנתונים שבשימוש על־ידי phpBB3.1 נוצרו וקיבלו כמה נתונים פנימיים. המשך למסך הבא כדי לסיים את התקנת phpBB3.',
	'STAGE_DATABASE'			=> 'הגדרות בסיס נתונים',
	'STAGE_FINAL'				=> 'שלב אחרון',
	'STAGE_INTRO'				=> 'הקדמה',
	'STAGE_IN_PROGRESS'			=> 'ההמרה בעבודה',
	'STAGE_REQUIREMENTS'		=> 'דרישות',
	'STAGE_SETTINGS'			=> 'הגדרות',
	'STARTING_CONVERT'			=> 'מתחיל תהליך המרה',
	'STEP_PERCENT_COMPLETED'	=> 'שלב <strong>%d</strong> מתוך <strong>%d</strong>',
	'SUB_INTRO'					=> 'הקדמה',
	'SUB_LICENSE'				=> 'הסכם שימוש',
	'SUB_SUPPORT'				=> 'תמיכה',
	'SUCCESSFUL_CONNECT'		=> 'החיבור נוצר',
	'SUPPORT_BODY'				=> 'Full support will be provided for the current stable release of phpBB3, free of charge. This includes:</p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li><li>updating from Release Candidate (RC) versions to the latest stable version</li><li>converting from phpBB 2.0.x to phpBB3</li><li>converting from other discussion board software to phpBB3 (please see the <a href="https://www.phpbb.com/community/viewforum.php?f=65">Convertors Forum</a>)</li></ul><p>We encourage users still running beta versions of phpBB3 to replace their installation with a fresh copy of the latest version.</p><h2>MODs / Styles</h2><p>For issues relating to MODs, please post in the appropriate <a href="https://www.phpbb.com/community/viewforum.php?f=81">Modifications Forum</a>.<br />For issues relating to styles, templates and themes, please post in the appropriate <a href="https://www.phpbb.com/community/viewforum.php?f=80">Styles Forum</a>.<br /><br />If your question relates to a specific package, please post directly in the topic dedicated to the package.</p><h2>Obtaining Support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/documentation/3.0/quickstart/">Quick Start Guide</a><br /><br />To ensure you stay up to date with the latest news and releases, why not <a href="https://www.phpbb.com/support/">subscribe to our mailing list</a>?<br /><br />',
	//'SUPPORT_BODY'				=> 'תמיכה מלאה תינתן לגרסה היציבה הנוכחית של phpBB3, ללא שום עלות. זה כולל:</p><ul><li>התקנה</li><li>הגדרות</li><li>שאלות טכניות</li><li>בעיות הקשורות לשגיאות אפשריות בתרגום</li><li>עדכון מגרסאות המועמדות לשחרור (RC) לגרסה היציבה האחרונה</li><li>המרה ממערכת phpBB2.0.x ל־phpBB3</li><li>המרה ממערכות פורומים אחרות ל־phpBB3</li></ul><p>אנו ממליצים למשתמשים אשר מריצים עדיין את הגרסאות הנסיוניות של phpBB3 להחליף את המערכת עם עותק חדש של הגרסה האחרונה.</p><h2>מודים / עיצובים</h2><p>לעניינים הקשורים למודים, שלח את ההודעה <a href="http://www.phpbb.co.il/viewforum.php?f=23">בפורום המודים</a>.<br />לעניינים הקשורים לעיצובים, תבניות וערכות תמונות, שלח את ההודעה <a href="http://www.phpbb.co.il/viewforum.php?f=24">בפורום העיצובים</a>.<br /><br />אם יש לך שאלה הקשורה לחבילה מסוימת, אנא כתוב את ההודעה בנושא המיועד לאותה חבילה.</p><h2>קבלת תמיכה</h2><p><a href="http://www.phpbb.co.il/">אתר התמיכה הרשמי של פרויקט phpBB הישראלי</a><br /><br />',
	'SYNC_FORUMS'				=> 'מתחיל לסנכרן פורומים',
	'SYNC_POST_COUNT'			=> 'מסנכרן post_counts',
	'SYNC_POST_COUNT_ID'		=> 'מסנכרן post_counts מ־<var>entry</var> %1$s ל־%2$s.',
	'SYNC_TOPICS'				=> 'מתחיל לסנכרן נושאים',
	'SYNC_TOPIC_ID'				=> 'מסנכרן נושאים מ־<var>topic_id</var> %1$s ל־%2$s.',

	'TABLES_MISSING'			=> 'לא ניתן למצוא את הטבלאות הבאות<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'קידומת לטבלאות בבסיס הנתונים',
	'TABLE_PREFIX_SAME'			=> 'קידומת הטבלאות צריכה להיות האחת אשר בשימוש על־ידי התוכנה שממנה אתה ממיר.<br />» קידומת הטבלאות שצוינה היא %s.',
	'TESTS_PASSED'				=> 'הבדיקות עברו',
	'TESTS_FAILED'				=> 'הבדיקות נכשלו',

	'UNABLE_WRITE_LOCK'			=> 'לא ניתן לכתוב לקובץ נעול.',
	'UNAVAILABLE'				=> 'לא זמין',
	'UNWRITABLE'				=> 'לא ניתן לכתיבה',
	'UPDATE_TOPICS_POSTED'		=> 'יוצר פרטי נושאים שנשלחו',

	'UPDATE_TOPICS_POSTED_ERR'	=> 'שגיאה התרחשה בעת יצירת פרטי הנושאים שנשלחו. תוכל לנסות שלב זה שנית בלוח הבקרה למנהלים ראשיים לאחר שתהליך ההמרה יושלם.',
	'VERIFY_OPTIONS'			=> 'מוודא אפשרויות המרה',
	'VERSION'					=> 'גרסה',

	'WELCOME_INSTALL'			=> 'ברוך הבא להתקנת phpBB3',
	'WRITABLE'					=> 'ניתן לכתיבה',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'כל הקבצים מעודכנים לגרסה האחרונה של phpBB.',
	'ARCHIVE_FILE'				=> 'קובץ מקור בתוך ארכיון',

	'BACK'				=> 'חזרה',
	'BINARY_FILE'		=> 'קובץ בינארי',
	'BOT'				=> 'עכביש/רובוט',

	'CHANGE_CLEAN_NAMES'			=> 'השיטה שבשימוש כדי לוודא ששם משתמש אינו בשימוש על־ידי מספר משתמשים שונתה. ישנם כמה משתמשים אשר בעלי השם הזהה כאשר נבדקים עם השיטה החדשה. אתה חייב למחוק או לשנות את שם המשתמשים האלו כדי לוודא שכל שם משתמש בשימוש על־ידי משתמש אחד לפני שתוכל להמשיך.',
	'CHECK_FILES'					=> 'בדוק קבצים',
	'CHECK_FILES_AGAIN'				=> 'בדוק קבצים שנית',
	'CHECK_FILES_EXPLAIN'			=> 'בשלב הבא כל הקבצים ייבדקו כנגד קבצי העדכון - הפעולה יכולה להמשך זמן רב אם זו הבדיקה הראשונה.',
	'CHECK_FILES_UP_TO_DATE'		=> 'לפי בסיס הנתונים שלך, הגרסה שלך מעודכנת. תוכל להמשיך לבדיקת הקבצים כדי לוודא שהקבצים אכן מעודכנים לגרסה האחרונה של phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'המשך תהליך עדכון',
	'COLLECTED_INFORMATION'			=> 'פרטי קובץ',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'הרשימה הבאה מציגה מידע על הקבצים הדורשים עדכון. קרא את המידע המוצג לפני כל חלק על מנת לראות מה הוא אומר ומה אתה צריך לעשות כדי לבצע עדכון מוצלח.',
	'COLLECTING_FILE_DIFFS'			=> 'אוסף שינויי קבצים',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'אתה צריך כעת <a href="../ucp.php?mode=login">להתחבר לפורום שלך</a> ולבדוק שהכול עובד כשורה. אל תשכח למחוק, לשנות שם או להעביר את תיקיית ההתקנה!',
	'CONTINUE_UPDATE_NOW'			=> 'המשך בתהליך העדכון עכשיו',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'המשך בעדכון עכשיו',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'תחילת ההתנגשות - קוד קובץ המקור לפני העדכון',
	'CURRENT_VERSION'				=> 'גרסה נוכחית',

	'DATABASE_TYPE'						=> 'סוג בסיס נתונים',
	'DATABASE_UPDATE_COMPLETE'			=> 'Database updater has completed!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Continue database update',
	'DATABASE_UPDATE_INFO_OLD'			=> 'קובץ עדכון בסיס הנתונים אשר בתיקיית ההתקנה אינו מעודכן. וודא שהעלת את הגרסה הנכונה של הקובץ.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'The database update has not yet completed.',
	'DELETE_USER_REMOVE'				=> 'מחק משתמש והסר הודעות',
	'DELETE_USER_RETAIN'				=> 'מחק משתמש אבל שמור הודעות',
	'DESTINATION'						=> 'קובץ מטרה',
	'DIFF_INLINE'						=> 'בשורה',
	'DIFF_RAW'							=> 'הבדל ייחודי שנוי במחלוקת',
	'DIFF_SEP_EXPLAIN'					=> 'קטע קוד בשימוש בקובץ החדש/מעודכן',
	'DIFF_SIDE_BY_SIDE'					=> 'אחד ליד השני',
	'DIFF_UNIFIED'						=> 'הבדל ייחודי',
	'DO_NOT_UPDATE'						=> 'אל תעדכן קובץ זה',
	'DONE'								=> 'בוצע',
	'DOWNLOAD'							=> 'הורד',
	'DOWNLOAD_AS'						=> 'הורד בתור',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'הורד קבצים ששונו (מומלץ)',
	'DOWNLOAD_CONFLICTS'				=> 'הורד את ההתנגשויות עבור קובץ זה',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'חפש &lt;&lt;&lt; כדי לראות את ההתנגשויות',
	'DOWNLOAD_UPDATE_METHOD'			=> 'הורד ארכיון קבצים ששונו',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'לאחר סיום ההורדה אתה צריך לחלץ את קובץ הארכיון. אתה תמצא את הקבצים ששונו אשר אתה צריך להעלות לתיקיית המערכת של phpBB3. העלה את הקבצים למיקומים שלהם בהתאמה. לאחר שהעלת את כל הקבצים, בדוק את הקבצים שנית עם הכפתור האחר שלהלן.',

	'EDIT_USERNAME'	=> 'ערוך שם משתמש',
	'ERROR'			=> 'שגיאה',
	'EVERYTHING_UP_TO_DATE'		=> 'Everything is up to date with the latest phpBB version. You should now <a href="%1$s">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory! Please send us updated information about your server and board configurations from the <a href="%2$s">Send statistics</a> module in your ACP.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'הקובץ כבר מעודכן.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'הקובץ לא ניתן לשינוי.',
	'FILE_USED'						=> 'מידע בשימוש מ',			// Single file
	'FILES_CONFLICT'				=> 'התנגשות קבצים',
	'FILES_CONFLICT_EXPLAIN'		=> 'הקבצים הבאים שונו ואינם מיצגים את הקבצים המקוריים מהגרסה הישנה. phpBB גילה כי קבצים אלו ייצרו התנגשויות אם  ננסה למזג אותם. בדוק את ההתנגשויות ונסה לפתור אותן בעצמך או המשך בעדכון על־ידי בחירת שיטת המיזוג המועדפת. אם אתה פותר את ההתנגשויות ידנית בדוק את הקבצים שנית לאחר ששינית אותם. תוכל גם לבחור לבחור בין שיטת מיזוג מועדפת לכל קובץ. השיטה הראשונה תביא לקובץ בו השורות המתנגשות מהקובץ הישן שלך ימחקו, השיטה השנייה תגרום למחיקת השינויים מהגרסה החדשה יותר.',
	'FILES_MODIFIED'				=> 'קבצים ששונו',
	'FILES_MODIFIED_EXPLAIN'		=> 'הקבצים הבאים שונו ואינם מיצגים את הקבצים המקוריים מהגרסה הישנה. הקובץ המעודכן ימזג בין השינויים שלך והקובץ החדש.',
	'FILES_NEW'						=> 'קבצים חדשים',
	'FILES_NEW_EXPLAIN'				=> 'הקבצים הבאים אינם קיימים כרגע בתיקיית ההתקן שלך. קבצים אלה יתווספו לתיקייה זו.',
	'FILES_NEW_CONFLICT'			=> 'קבצים חדשים מתנגשים',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'הקבצים הבאים חדשים לגרסה האחרונה אך התגלה כי כבר ישנם קבצים עם שם זהה באותו המיקום. הקבצים החדשים ישמרו במקום הקודמים.',
	'FILES_NOT_MODIFIED'			=> 'קבצים שלא שונו',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'הקבצים הבאים לא שונו ומיצגים את הקבצים המקוריים של phpBB מהגרסה ממנה אתה מעוניין לעדכן.',
	'FILES_UP_TO_DATE'				=> 'קבצים שכבר מעודכנים',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'הקבצים הבאים כבר מעודכנים לגרסה האחרונה ואינם דורשים עדכון.',
	'FTP_SETTINGS'					=> 'הגדרות FTP',
	'FTP_UPDATE_METHOD'				=> 'העלאת FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'קבצי העדכון אינם מותאמים לגרסה המותקנת שלך. הגרסה המותקנת היא %1$s וקבצי העדכון שייכים לעדכון phpBB מגרסה %2$s לגרסה %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'קבצי העדכון לא שלמים.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'עדכון בסיס הנתונים הושלם בהצלחה. כעת אתה צריך להמשיך בתהליך העדכון.',

	'KEEP_OLD_NAME'		=> 'שמור שם משתמש',
	
	'LATEST_VERSION'		=> 'גרסה אחרונה',
	'LINE'					=> 'שורה',
	'LINE_ADDED'			=> 'נוסף',
	'LINE_MODIFIED'			=> 'שונה',
	'LINE_REMOVED'			=> 'הוסר',
	'LINE_UNMODIFIED'		=> 'לא שונה',
	'LOGIN_UPDATE_EXPLAIN'	=> 'כדי לעדכן את המערכת שלך אתה צריך קודם להתחבר.',

	'MAPPING_FILE_STRUCTURE'	=> 'כדי להקל על ההעלאה, להלן מיקומי הקבצים מתוך תיקיית המערכת של phpBB.',
	
	'MERGE_MODIFICATIONS_OPTION'	=> 'אחד תוספות',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'אל תמזג - השתמש בקובץ החדש',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'אל תמזג - השתמש בקובץ המותקן הנוכחי',
	'MERGE_MOD_FILE_OPTION'		=> 'מזג שינויים (מסיר קוד phpBB חדש בתוך אזור ההתנגשות)',
	'MERGE_NEW_FILE_OPTION'		=> 'מזג שינויים (מסיר קוד ששונה בתוך אזור ההתנגשות)',
	'MERGE_SELECT_ERROR'		=> 'מצבי מיזוג קבצים עם התנגשות לא נבחרו כראוי.',
	'MERGING_FILES'				=> 'ממזג שינויים',
	'MERGING_FILES_EXPLAIN'		=> 'אוסף כרגע שינויי קובץ סופי.<br /><br />אנא המתן עד ש־phpBB תשלים את כל הפעולות על הקבצים ששונו.',

	'NEW_FILE'					=> 'סוף התנגשות',
	'NEW_USERNAME'					=> 'שם משתמש חדש',
	'NO_AUTH_UPDATE'				=> 'לא מורשה לעדכן',
	'NO_ERRORS'						=> 'אין שגיאות',
	'NO_UPDATE_FILES'				=> 'לא מעדכן את הקבצים הבאים',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'הקבצים הבאים חדשים או שונו אבל התיקייה שבהם הם בדרך כלל נמצאים לא נמצאה במערכת שלך. אם רשימה זו מכילה קבצים לתיקיות אחרות מאשר language/ או styles/ אז כנראה שינית את מבנה התיקיות והעדכון יכול להיות לא שלם.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'לא נמצאה תיקיית עדכון חוקית, וודא שהעלת את הקבצים המיוחסים.<br /><br />המערכת שלך <strong>אינה</strong> נראית מעודכנת. עדכונים זמינים לגרסה שבבעלותך, phpBB %1$s, בקר ב־<a href="http://www.phpbb.co.il/downloads/" rel="external">http://www.phpbb.co.il/downloads/</a> כדי לקבל את החבילה הנכונה לעדכון מגרסה %2$s לגרסה %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'הגרסה שלך מעודכנת. אין צורך להריץ את כלי העדכון. אם ברצונך לבצע בדיקת שלמות על הקבצים שלך, וודא שהעלת את קבצי העדכון הנכונים.',
	'NO_UPDATE_INFO'				=> 'פרטי קובץ עדכון לא נמצא.',
	'NO_UPDATES_REQUIRED'			=> 'אין עדכונים נדרשים',
	'NO_VISIBLE_CHANGES'			=> 'אין שינויים נראים',
	'NOTICE'						=> 'הודעה',
	'NUM_CONFLICTS'					=> 'מספר התנגשויות',
	'NUMBER_OF_FILES_COLLECTED'		=> 'כרגע נבדקו שינויים מ%1$d מתוך %2$d קבצים.<br />אנא המתן עד שכל הקבצים ייבדקו.',

	'OLD_UPDATE_FILES'		=> 'קבצי העדכון אינם מעודכנים. קבצי העדכון שנמצאו מעדכנים מגרסה phpBB %1$s לגרסה phpBB %2$s אבל הגרסה האחרונה של phpBB היא %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'החבילה הנוכחית מתעדכנת לגרסה',
	'PERFORM_DATABASE_UPDATE'			=> 'בצע עדכון בסיס נתונים',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'להלן כפתור לעדכון בסיס הנתונים. עדכון בסיס הנתונים עלול להמשך זמן רב, לכן אל תעצור את התהליך גם אם נראה שהוא נעצר. לאחר שעדכון בסיס הנתונים התבצע, עבור להוראות כדי להמשיך בתהליך העדכון.',
	'PREVIOUS_VERSION'					=> 'גרסה קודמת',
	'PROGRESS'							=> 'התקדמות',

	'RESULT'					=> 'תוצאה',
	'RUN_DATABASE_SCRIPT'		=> 'עדכן את בסיס הנתונים שלי עכשיו',

	'SELECT_DIFF_MODE'			=> 'בחר מצב הבדל',
	'SELECT_DOWNLOAD_FORMAT'	=> 'בחר תבנית ארכיון להורדה',
	'SELECT_FTP_SETTINGS'		=> 'בחר הגדרות FTP',
	'SHOW_DIFF_CONFLICT'		=> 'הצג הבדלים/התנגשויוית',
	'SHOW_DIFF_FINAL'			=> 'הצג תוצאת קובץ',
	'SHOW_DIFF_MODIFIED'		=> 'הצג הבדלים מאוחדים',
	'SHOW_DIFF_NEW'				=> 'הצג תוכן קובץ',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'הצג הבדלים',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'הצג הבדלים',
	'SOME_QUERIES_FAILED'		=> 'כמה שאילתות נכשלו, המשפטים והשגיאות רשומים מטה.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'כנראה שזו לא סיבה לדאגה, העדכון ימשיך. אם השגיאה פגעה בהשלמת התהליך תוכל לבקש תמיכה בפורומי התמיכה שלנו. ראה <a href="../docs/README.html">README</a> לפרטים על אופן קבלת הייעוץ.',
	'STAGE_FILE_CHECK'			=> 'בדיקת קבצים',
	'STAGE_UPDATE_DB'			=> 'עדכון בסיס נתונים',
	'STAGE_UPDATE_FILES'		=> 'עדכון קבצים',
	'STAGE_VERSION_CHECK'		=> 'בדיקת גרסה',
	'STATUS_CONFLICT'			=> 'קובץ ששונה היוצר התנגשויות',
	'STATUS_MODIFIED'			=> 'קובץ ששונה',
	'STATUS_NEW'				=> 'קובץ חדש',
	'STATUS_NEW_CONFLICT'		=> 'קובץ חדש מתנגש',
	'STATUS_NOT_MODIFIED'		=> 'קובץ שלא שונה',
	'STATUS_UP_TO_DATE'			=> 'קובץ שכבר מעודכן',
	
	'TOGGLE_DISPLAY'			=> 'הצג/הסתר רשימת קבצים',
	'TRY_DOWNLOAD_METHOD'		=> 'יתכן שתרצה לנסות להשתמש בשיטת הורדת הקבצים ששונו.<br />שיטה זו עובדת תמיד ומומלצת לתהליך העדכון.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'נסה שיטה זו עכשיו',

	'UPDATE_COMPLETED'				=> 'העדכון הושלם',
	'UPDATE_DATABASE'				=> 'עדכון בסיס הנתונים',
	'UPDATE_DATABASE_EXPLAIN'		=> 'בשלב הבא בסיס הנתונים יתעדכן.',
	'UPDATE_DATABASE_SCHEMA'		=> 'מעדכן מבנה בסיס נתונים',
	'UPDATE_FILES'					=> 'עדכן קבצים',
	'UPDATE_FILES_NOTICE'			=> 'וודא שעדכנת גם את קבצי המערכת שלך, הקובץ מעדכן את בסיס הנתונים שלך בלבד.',
	'UPDATE_INSTALLATION'			=> 'עדכון התקן phpBB3',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'עם אפשרות זו, תוכל לעדכן את מערכת phpBB שלך לגרסה האחרונה.<br />במשך התהליך גרסת כל הקבצים תיבדק. תוכל לסקור את כל ההבדלים והקבצים לפני העדכון.<br /><br />קובץ העדכון עצמו יכול להתבצע בשתי דרכים שונות.</p><h2>עדכון ידני</h2><p>עם עדכון זו אתה מוריד את ערכת הקבצים ששונו בלבד כדי לוודא שלא תפגע בתוספות הקבצים שיכול להיות והוספת. לאחר שהורדת את החבילה אתה צריך להעלות את הקבצים ידנית אל מיקומם הנכון תחת תיקיית המערכת של phpBB3. לאחר שתסיים, תוכל לבצע את שלב בדיקת הקבצים שנית כדי לוודא שהעברת את הקבצים למיקומם הנכון.</p><h2>עדכון אוטומטי עם FTP</h2><p>שיטה זו דומה לשיטה הראשונה אבל ללא הצורך להוריד את הקבצים ששונו ולהעלות אותם בעצמך. הפעולה תתבצע בשבילך. כדי להשתמש בשיטה זו אתה צריך לדעת את פרטי החיבור ל־FTP מפני שתתבקש להם. לאחר הסיום תועבר לבדיקת הקבצים שנית כדי לוודא שהכול עודכן כראוי.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>הכרזת שחרור</h1>

		<p>קרא את <a href="%1$s" title="%1$s"><strong>הכרזת שחרור הגרסה האחרונה</strong></a> לפני שתמשיך בתהליך העדכון, היא יכולה לכלול מידע שימושי. היא תכלול בנוסף קישורים מלאים להורדה וכמו כן את השינויים.</p>

		<br />

		<h1>כיצד לעדכן את המערכת שלך עם חבילת העדכון האוטומטית</h1>

		<p>הדרך המומלצת לעדכון המערכת שלך הרשומה כאן מתאימה רק לחבילת העדכון האוטומטית. תוכל גם לעדכן את המערכת שלך בעזרת השיטות הרשומות במסמך INSTALL.html. הצעדים לעדכון phpBB3 באופן אוטומטי הם:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>עבור אל <a href="http://www.phpbb.co.il/downloads/" title="http://www.phpbb.co.il/downloads/">עמוד ההורדות של phpBB.co.il</a> והורד את קובץ הארכיון "חבילת עדכון אוטומטית".<br /><br /></li>
			<li>חלץ את הארכיון.<br /><br /></li>
			<li>העלה את התיקייה install השלמה הלא דחוסה לתיקיית המערכת של phpBB3 (היכן שנמצא הקובץ config.php).<br /><br /></li>
		</ul>

		<p>לאחר ההעלה, הפורום יהיה כבוי למשתמשים רגילים מפני שתיקיית ההתקנה שהעלת כעת קיימת.<br /><br />
		<strong><a href="%2$s" title="%2$s">כעת התחל בתהליך העדכון על־ידי הפניית הדפדפן שלך לתיקייה install</a>.</strong><br />
		<br />
		אתה תודרך לאורך תהליך העדכון. תקבל הודעה כאשר העדכון יושלם.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>עדכון לא שלם התגלה</h1>

		<p>phpBB3 גילה עדכון אוטומטי לא שלם. אנא וודא שביצעת כל צעד בכלי העדכון האוטומטי. להלן הקישור שנית, או עבור ישירות אל התיקייה install.</p>
	',
	'UPDATE_METHOD'					=> 'שיטת עדכון',
	'UPDATE_METHOD_EXPLAIN'			=> 'תוכל לבחור את שיטת העדכון המועדפת עליך. בעת שימוש בהעלאת FTP תקבל טופס הדורש ממך להכניס את פרטי חשבון ה־FTP שלך. עם שיטה זו הקבצים יועברו אוטומטית למיקום החדש והגיבויים של הקבצים הישנים יווצרו עם הסיומת .bak לשם הקובץ. אם אתה בוחר להוריד את הקבצים ששונו, תוכל לחלץ ולהעלות אותם למיקומם הנכון בעצמך מאוחר יותר.',
	'UPDATE_REQUIRES_FILE'			=> 'העדכון דורש שהקובץ הבא יהיה קיים: %s',
	'UPDATE_SUCCESS'				=> 'העדכון הושלם בהצלחה',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'כל הקבצים עודכנו בהצלחה. בשלב הבא תתבצע בדיקת כל הקבצים שנית כדי לוודא שהקבצים עודכנו כראוי.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'מעדכן גרסה ומייעל טבלאות',
	'UPDATING_DATA'					=> 'מעדכן נתונים',
	'UPDATING_TO_LATEST_STABLE'		=> 'מעדכן בסיס נתונים לגרסה היציבה האחרונה',
	'UPDATED_VERSION'				=> 'הגרסה עודכנה',
	'UPGRADE_INSTRUCTIONS'			=> 'שחרור לתכונה חדשה <strong>%1$s</strong> זמינה. אנא קרא <a href="%2$s" title="%2$s"><strong>את הכרזת השחרור</strong></a> כדי ללמוד אודות מה הוא מציע, וכיצד ולשדרג.',
	'UPLOAD_METHOD'					=> 'שיטת העלאה',

	'UPDATE_DB_SUCCESS'				=> 'עדכון בסיס הנתונים הושלם בהצלחה.',
	'UPDATE_FILE_SUCCESS'			=> 'הקובץ עודכן בהצלחה.',
	'USER_ACTIVE'					=> 'משתמש פעיל',
	'USER_INACTIVE'					=> 'משתמש לא פעיל',

	'VERSION_CHECK'				=> 'בדיקת גרסה',
	'VERSION_CHECK_EXPLAIN'		=> 'בדיקה האם הגרסה המותקנת של phpBB3 מעודכנת.',
	'VERSION_NOT_UP_TO_DATE'	=> 'הגרסה המותקנת של phpBB3 אינה מעודכנת. אנא המשך בתהליך העדכון.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'הגרסה המותקנת של phpBB3 אינה מעודכנת.<br />כאן תמצא קישור להכרזת השחרור של הגרסה האחרונה וכמו כן הוראות כיצד לבצע את תהליך העדכון.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'הגרסה המותקנת של phpBB3 אינה מעודכנת.',
	'VERSION_UP_TO_DATE'		=> 'הגרסה המותקנת של phpBB3 מעודכנת. למרות שאין עדכונים זמינים בזמן זה, תוכל להמשיך כדי לבצע בדיקת חוקיות.',
	'VERSION_UP_TO_DATE_ACP'	=> 'הגרסה המותקנת של phpBB3 הינה מעודכנת. אין עדכונים זמינים כרגע.',
	'VIEWING_FILE_CONTENTS'		=> 'מציג תוכן קובץ',
	'VIEWING_FILE_DIFF'			=> 'מציג הבדלי קובץ',

	'WRONG_INFO_FILE_FORMAT'	=> 'פרטי תבנית קובץ שגויים',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'בתודה, ההנהלה',
	'CONFIG_SITE_DESC'				=> 'טקסט קצר שמתאר את הפורום',
	'CONFIG_SITENAME'				=> 'שם האתר',

	'DEFAULT_INSTALL_POST'			=> 'זוהי הודעת הדגמה בהתקנת phpBB3. הכול נראה עובד כשורה. אתה רשאי למחוק את הודעה זו אם אתה רוצה להמשיך להגדיר את המערכת. במהלך תהליך ההתקנה הקטגוריה הראשונה והפורום הראשון נוצרו והרשאות מתאימות לקבוצות המנהלים הראשיים, הבוטים, המנהלים הגלובליים, האורחים ומשתמשים רשומים. אם אתה רוצה גם למחוק את הקטגוריה הראשונה והפורום הראשון, אל תשכח להעניק הרשאות לכל קבוצות המשתמשים הללו לכל הקטגוריות החדשות והפורומים שאתה תיצור. מומלץ לשנות את השם של הקטגוריה הראשונה והפורום הראשון ולהעתיק את ההרשאות מהם שאתה יוצר קטגוריות חדשות ופורומים חדשים. תהנה!',

	'FORUMS_FIRST_CATEGORY'			=> 'הקטגוריה הראשונה שלך',
	'FORUMS_TEST_FORUM_DESC'		=> 'התיאור של הפורום הראשון שלך.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'הפורום הראשון שלך',

	'RANKS_SITE_ADMIN_TITLE'		=> 'מנהל האתר',
	'REPORT_WAREZ'					=> 'ההודעה מכילה מידע וקישורים שאינם חוקיים.',
	'REPORT_SPAM'					=> 'ההודעה שדווחה בעינינה היה רק לפרסום אתרים ותוספים אשר אינם קשורים לאתר.',
	'REPORT_OFF_TOPIC'				=> 'ההודעה שדווחה היא נושא שאינו קשור לפורום.',
	'REPORT_OTHER'					=> 'ההודעה שדווחה לא תואמת לאף אחת מהאפשרויות לדיווח, אנא השתמש בשדה המידע נוסף.',

	'SMILIES_ARROW'					=> 'חץ',
	'SMILIES_CONFUSED'				=> 'מבולבל',
	'SMILIES_COOL'					=> 'מגניב',
	'SMILIES_CRYING'				=> 'בוכה או מאוד עצוב',
	'SMILIES_EMARRASSED'			=> 'מתבייש',
	'SMILIES_EVIL'					=> 'רשע או מאוד כועס',
	'SMILIES_EXCLAMATION'			=> 'סימן קריאה',
	'SMILIES_GEEK'					=> 'חנון',
	'SMILIES_IDEA'					=> 'רעיון',
	'SMILIES_LAUGHING'				=> 'צוחק',
	'SMILIES_MAD'					=> 'כועס',
	'SMILIES_MR_GREEN'				=> 'מר ירוק',
	'SMILIES_NEUTRAL'				=> 'ללא הבעה',
	'SMILIES_QUESTION'				=> 'סימן שאלה',
	'SMILIES_RAZZ'					=> 'חוצפן',
	'SMILIES_ROLLING_EYES'			=> 'מגלגל עיניים',
	'SMILIES_SAD'					=> 'עצוב',
	'SMILIES_SHOCKED'				=> 'המום',
	'SMILIES_SMILE'					=> 'מחייך',
	'SMILIES_SURPRISED'				=> 'מופתע',
	'SMILIES_TWISTED_EVIL'			=> 'מאוד רשע',
	'SMILIES_UBER_GEEK'				=> 'מאוד חנון',
	'SMILIES_VERY_HAPPY'			=> 'מאוד שמח',
	'SMILIES_WINK'					=> 'קורץ',

	'TOPICS_TOPIC_TITLE'			=> 'ברוך הבא ל־phpBB3',
));
