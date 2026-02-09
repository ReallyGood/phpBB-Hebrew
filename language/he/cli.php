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

$lang = array_merge($lang, array (
  'CLI_APCU_CACHE_NOTICE' => 'יש לטהר את המטמון דרך לוח בקרה למנהל ראשי.',
  'CLI_CONFIG_CANNOT_CACHED' => 'הדלק את הגדרה זו, אם אפשרויות ההגדרה משתנות תדיר עד כדי כך, שזה לא יעיל לשמור את מטמונן.',
  'CLI_CONFIG_CURRENT' => 'ערך ההגדרה הנוכחי, השתמש ב-0 ו-1 על מנת לציין ערכים בוליאניים',
  'CLI_CONFIG_DELETE_SUCCESS' => 'ההגדרה %s נמחקה בהצלחה .',
  'CLI_CONFIG_NEW' => 'ערך חדש להגדרה, השתמש ב-0 ו-1 בשביל לציין ערכים בוליאניים.',
  'CLI_CONFIG_NOT_EXISTS' => 'ההגדרה %s לא קיימת',
  'CLI_CONFIG_OPTION_NAME' => 'שמה של האפשרות של ההגדרה',
  'CLI_CONFIG_PRINT_WITHOUT_NEWLINE' => 'הדלק את אפשרות זו, אם הערך אמור להיות מודפס מבלי לצרף שורה חדשה בסיומו.',
  'CLI_CONFIG_INCREMENT_BY' => 'הכמות שבה יש להגדיל',
  'CLI_CONFIG_INCREMENT_SUCCESS' => 'ההגדרה %s הוגדלה בהצלחה',
  'CLI_CONFIG_SET_FAILURE' => 'לא ניתן היה לשנות את ההגדרה %s ',
  'CLI_CONFIG_SET_SUCCESS' => 'שינוי ההגדרה %s עלה יפה ',
  'CLI_DESCRIPTION_CRON_LIST' => 'מדפיס רשימה של משימות cron מוכנות ולא מוכנות.',
  'CLI_DESCRIPTION_CRON_RUN' => 'מריץ את כל המשימות המכונות.',
  'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1' => 'שם המשימה שתורץ',
  'CLI_DESCRIPTION_DB_LIST' => 'הצגת כל אפשרויות ההגירה המותקנות והזמינות.',
  'CLI_DESCRIPTION_DB_MIGRATE' => 'עדכן את מאגר הנתונים על ידי אישור הגירות.',
  'CLI_DESCRIPTION_DB_REVERT' => 'ביטול הגירה.',
  'CLI_DESCRIPTION_DELETE_CONFIG' => 'מוחק אפשרות הגדרה',
  'CLI_DESCRIPTION_DISABLE_EXTENSION' => 'מכבה את התוספת הספציפית.',
  'CLI_DESCRIPTION_ENABLE_EXTENSION' => 'מדליק את התוספת הספציפית.',
  'CLI_DESCRIPTION_FIND_MIGRATIONS' => 'מוצא הגירות שלא תלויות אחת בשנייה.',
  'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS' => 'מתקן את מבנה הספריה של הפורומים והמודלים.',
  'CLI_DESCRIPTION_GET_CONFIG' => 'מוצא את הערך של אפשרות של הגדרה',
  'CLI_DESCRIPTION_INCREMENT_CONFIG' => 'מגדיל את הערך של האפשרות של ההגדרה',
  'CLI_DESCRIPTION_LIST_EXTENSIONS' => 'מארגן ברשימה את כל התוספות שבמאגר ובקבצי המערכת.',
  'CLI_DESCRIPTION_OPTION_ENV' => 'שם הסביבה.',
  'CLI_DESCRIPTION_OPTION_SAFE_MODE' => 'הפעל במצב בטוח (ללא תוספות).',
  'CLI_DESCRIPTION_OPTION_SHELL' => 'הפעל את ה-shell.',
  'CLI_DESCRIPTION_PURGE_EXTENSION' => 'מטהר את התוספת.',
  'CLI_DESCRIPTION_REPARSER_LIST' => 'הצגת רשימת כל טיפוסי המלל שניתן לשנותם.',
  'CLI_DESCRIPTION_REPARSER_AVAILABLE' => 'מנתחים מחדש זמינים:',
  'CLI_DESCRIPTION_REPARSER_REPARSE' => 'מנתח מחדש מלל שמור באמצעות שירותי מעצב־הטקסט הנוכחיים.',
  'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1' => 'סוג המלל לניתוח מחדש. השאר ריק כדי לנתח הכול מחדש.',
  'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN' => 'אל תשמור שינויים; רק הצג מה היה מתבצע.',
  'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE' => 'ניתוח מחדש של כל תגיות ה־BBCode ללא יוצא מן הכלל. שים לב שתגיות BBCode שהיו מבוטלות יעובדו מחדש, יופעלו ויורנדרו במלואן.',
  'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN' => 'מזהה הרשומה הנמוך ביותר לעיבוד',
  'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX' => 'מזהה הרשומה הגבוה ביותר לעיבוד',
  'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE' => 'המספר המשוער של רשומות לעיבוד בכל פעם',
  'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME' => 'התחלת הניתוח מחדש מהנקודה שבה הופסקה הריצה הקודמת',
  'CLI_DESCRIPTION_SET_ATOMIC_CONFIG' => 'מציב ערך של אפשרות של הגדרה רק אם הישן תואם את הערך הנוכחי',
  'CLI_DESCRIPTION_SET_CONFIG' => 'מציב ערך של אפשרות של הגדרה',
  'CLI_DESCRIPTION_THUMBNAIL_DELETE' => 'מוחק את כל התמונות הממוזערות הקיימות.',
  'CLI_DESCRIPTION_THUMBNAIL_GENERATE' => 'יוצר את כל התמונות הממוזערות החסרות.',
  'CLI_DESCRIPTION_THUMBNAIL_RECREATE' => 'יוצר מחדש את כל התמונות הממוזערות.',
  'CLI_DESCRIPTION_UPDATE_CHECK' => 'בודק אם הפורום מעודכן לגרסה האחרונה.',
  'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1' => 'שם התוספת לבדיקה (אם all, תיבדקנה כל התוספות).',
  'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE' => 'הרצת פקודת הבדיקה עם מטמון.',
  'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY' => 'הרצת הפקודה בבחירה לבדוק רק גרסאות יציבות או בלתי־יציבות.',
  'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT' => 'מעדכן הצפנות מיושנות להצפנה באמצעות bcrypt.',
  'CLI_ERROR_INVALID_STABILITY' => '„%s” אינה רמת יציבות חוקית.',
  'CLI_DESCRIPTION_USER_ACTIVATE' => 'מפעיל (או משבית) חשבון משתמש.',
  'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME' => 'שם המשתמש של החשבון להפעלה.',
  'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE' => 'השבתת חשבון המשתמש.',
  'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE' => 'המשתמש כבר פעיל.',
  'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE' => 'המשתמש כבר אינו פעיל.',
  'CLI_DESCRIPTION_USER_ADD' => 'מוסיף משתמש חדש.',
  'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME' => 'שם המשתמש של המשתמש החדש',
  'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD' => 'סיסמתו של המשתמש החדש',
  'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL' => 'כתובת הדוא״ל של המשתמש החדש',
  'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY' => 'שליחת דוא״ל הפעלת חשבון למשתמש החדש (כברירת מחדל לא נשלח).',
  'CLI_DESCRIPTION_USER_DELETE' => 'מוחק חשבון משתמש.',
  'CLI_DESCRIPTION_USER_DELETE_USERNAME' => 'שם המשתמש של המשתמש למחיקה',
  'CLI_DESCRIPTION_USER_DELETE_ID' => 'מחיקת חשבונות משתמש לפי מזהה.',
  'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID' => 'מזהי המשתמשים למחיקה',
  'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS' => 'מחיקת כל ההודעות של המשתמש. ללא אפשרות זו, הודעותיו יישארו.',
  'CLI_DESCRIPTION_USER_RECLEAN' => 'מנקה מחדש שמות משתמש.',
  'CLI_EXTENSION_DISABLE_FAILURE' => 'לא ניתן היה לבטל את התוספת  %s',
  'CLI_EXTENSION_DISABLE_SUCCESS' => 'התוספת %s כובתה בהצלחה ',
  'CLI_EXTENSION_DISABLED' => 'התוספת %s אינה פעילה.',
  'CLI_EXTENSION_ENABLE_FAILURE' => 'לא ניתן היה להדליק את התוספת %s',
  'CLI_EXTENSION_ENABLE_SUCCESS' => 'התוספת %s הופעלה בהצלחה ',
  'CLI_EXTENSION_ENABLED' => 'התוספת %s כבר פעילה.',
  'CLI_EXTENSION_NOT_EXIST' => 'התוספת %s אינה קיימת.',
  'CLI_EXTENSION_NAME' => 'שמה של התוספת',
  'CLI_EXTENSION_PURGE_FAILURE' => 'לא ניתן היה לאפס את התוספת %s',
  'CLI_EXTENSION_PURGE_SUCCESS' => 'התוספת %s אופסה בהצלחה',
  'CLI_EXTENSION_UPDATE_FAILURE' => 'עדכון התוסף %s נכשל',
  'CLI_EXTENSION_UPDATE_SUCCESS' => 'עדכון התוסף %s בוצע בהצלחה',
  'CLI_EXTENSION_NOT_FOUND' => 'לא נמצאו תוספות.',
  'CLI_EXTENSION_NOT_ENABLEABLE' => 'לא ניתן להפעיל את התוספת %s.',
  'CLI_EXTENSIONS_AVAILABLE' => 'זמין',
  'CLI_EXTENSIONS_DISABLED' => 'מכובה',
  'CLI_EXTENSIONS_ENABLED' => 'דלוק',
  'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS' => 'מבנה הספרייה של הפורומים והמודלים תוקן בהצלחה.',
  'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS' => 'הצפנת סיסמאות מיושנות עודכן בהצלחה ל bcrypt.',
  'CLI_MIGRATION_NAME' => 'שם ההגירה, כולל מרחב השמות (השתמש בלוכסנים רגילים במקום בלוכסנים הפוכים כדי למנוע בעיות).',
  'CLI_MIGRATIONS_AVAILABLE' => 'הגירות זמינות',
  'CLI_MIGRATIONS_INSTALLED' => 'הגירות מותקנות',
  'CLI_MIGRATIONS_ONLY_AVAILABLE' => 'הצגת הגירות זמינות בלבד',
  'CLI_MIGRATIONS_EMPTY' => 'אין הגירות.',
  'CLI_REPARSER_REPARSE_REPARSING' => 'מנתח מחדש %1$s (טווח %2$d..%3$d)',
  'CLI_REPARSER_REPARSE_REPARSING_START' => 'מתחיל לנתח מחדש את %s...',
  'CLI_REPARSER_REPARSE_SUCCESS' => 'הניתוח מחדש הסתיים בהצלחה',
  'CLI_THUMBNAIL_DELETED' => '%1$s (%2$s) נמחק.',
  'CLI_THUMBNAIL_DELETING' => 'מוחק תמונות ממוזערות',
  'CLI_THUMBNAIL_SKIPPED' => '%1$s (%2$s) דולג.',
  'CLI_THUMBNAIL_GENERATED' => '%1$s (%2$s) נוצר.',
  'CLI_THUMBNAIL_GENERATING' => 'יוצר תמונות ממוזערות',
  'CLI_THUMBNAIL_GENERATING_DONE' => 'כל התמונות הממוזערות נוצרו מחדש.',
  'CLI_THUMBNAIL_DELETING_DONE' => 'כל התמונות הממוזערות נמחקו.',
  'CLI_THUMBNAIL_NOTHING_TO_GENERATE' => 'אין תמונות ממוזערות ליצור.',
  'CLI_THUMBNAIL_NOTHING_TO_DELETE' => 'אין תמונות ממוזערות למחיקה.',
  'CLI_USER_ADD_SUCCESS' => 'המשתמש %s נוסף בהצלחה.',
  'CLI_USER_DELETE_CONFIRM' => 'האם אתה בטוח שברצונך למחוק את „%s”? [y/N]',
  'CLI_USER_DELETE_ID_CONFIRM' => 'האם אתה בטוח שברצונך למחוק את מזהי המשתמשים „%s”? [y/N]',
  'CLI_USER_DELETE_ID_SUCCESS' => 'מזהי המשתמשים נמחקו בהצלחה.',
  'CLI_USER_DELETE_ID_START' => 'מוחק משתמשים לפי מזהה',
  'CLI_USER_DELETE_NONE' => 'לא נמחקו משתמשים לפי מזהה.',
  'CLI_USER_RECLEAN_START' => 'מנקה מחדש שמות משתמש',
  'CLI_USER_RECLEAN_DONE' => 
  array (
    0 => 'הניקוי החוזר הושלם. לא היה צורך לנקות שמות משתמש.',
    1 => 'הניקוי החוזר הושלם. שם משתמש אחד (%d) נוקה.',
    2 => 'הניקוי החוזר הושלם. %d שמות משתמש נוקו.',
  ),
  'CLI_HELP_CRON_RUN' => 'מריץ את כל המשימות המכונות. לחלופין ניתן לציין שם משימת cron כדי להריץ רק משימה מסוימת.',
  'CLI_HELP_USER_ACTIVATE' => 'הפעלת חשבון משתמש, או השבתת חשבון באמצעות האפשרות <info>--deactivate</info>.
כדי לשלוח למשתמש דוא״ל הפעלה, השתמש באפשרות <info>--send-email</info>.',
  'CLI_HELP_USER_ADD' => 'הפקודה <info>%command.name%</info> מוסיפה משתמש חדש:
אם הפקודה מורצת ללא אפשרויות, תתבקש להזין אותן.
כדי לשלוח דוא״ל למשתמש החדש, השתמש באפשרות <info>--send-email</info>.',
  'CLI_HELP_USER_RECLEAN' => 'הניקוי החוזר של שמות משתמש בודק את כל שמות המשתמש השמורים ומוודא שגם גרסה נקייה נשמרת. שמות משתמש נקיים הם בצורה שאינה תלויה ברישיות, מנורמלים לפי NFC ומומרים ל־ASCII.',
));
