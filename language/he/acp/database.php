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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'מעמוד זה ניתן לגבות את בסיס הנתונים של phpBB. תוכל לאחסן את הגיבוי בתיקייה <samp>store/</samp> או להוריד אותה ישירות. לפי הגדרות השרת שלך, תוכל לדחוס את הקובץ במספר שיטות דחיסה.',
	'ACP_RESTORE_EXPLAIN'	=> 'כאן תוכל לבצע שחזור מלא של כל טבלאות ה־phpBB מקובץ שמור. אם השרת שלך תומך, תוכל להשתמש בקובץ טקסט הדחוס ב־gzip או ב־bzip2 והוא יחולץ אוטומטית. <strong>אזהרה</strong> הפעולה תעבור על כל הנתונים הקיימים. תהליך השחזור יכול להמשך זמן רב, אנא אל תעבור מעמוד זה עד שהוא יושלם. גיבויים מאוחסנים בתיקייה <samp>store/</samp> ונוצרו בדרך כלל על־ידי אפשרות הגיבוי של phpBB. שחזור גיבויים אשר לא נוצרו על־ידי האפשרות המובנית במערכת עלול לא לעבוד.',

	'BACKUP_DELETE'		=> 'קובץ הגיבוי נמחק בהצלחה.',
	'BACKUP_INVALID'	=> 'הקובץ הנבחר לגיבוי לא חוקי.',
	'BACKUP_OPTIONS'	=> 'אפשרויות גיבוי',
	'BACKUP_SUCCESS'	=> 'קובץ הגיבוי נוצר בהצלחה.',
	'BACKUP_TYPE'		=> 'סוג גיבוי',

	'DATABASE'			=> 'שירותי בסיס נתונים',
	'DATA_ONLY'			=> 'נתונים בלבד',
	'DELETE_BACKUP'		=> 'מחק גיבוי',
	'DELETE_SELECTED_BACKUP'	=> 'אתה בטוח שאתה רוצה למחוק את הגיבוי הנבחר?',
	'DESELECT_ALL'		=> 'בטל בחירה להכל',
	'DOWNLOAD_BACKUP'	=> 'הורד גיבוי',

	'FILE_TYPE'			=> 'סוג קובץ',
	'FILE_WRITE_FAIL'	=> 'לא ניתן לכתוב קובץ לתיקיית האחסון.',
	'FULL_BACKUP'		=> 'מלא',

	'RESTORE_FAILURE'		=> 'קובץ הגיבוי פגום.',
	'RESTORE_OPTIONS'		=> 'אפשרויות שחזור',
	'RESTORE_SELECTED_BACKUP'	=> 'האם אתה בטוח שאתה מעוניין לשחזר את הגיבוי שנבחר?',
	'RESTORE_SUCCESS'		=> 'בסיס הנתונים שוחזר בהצלחה.<br /><br />המערכת שלך אמורה לחזור למצב בו הייתה כאשר התבצע הגיבוי.',

	'SELECT_ALL'			=> 'בחר הכל',
	'SELECT_FILE'			=> 'בחר קובץ',
	'START_BACKUP'			=> 'התחל גיבוי',
	'START_RESTORE'			=> 'התחל שחזור',
	'STORE_AND_DOWNLOAD'	=> 'אחסן והורד',
	'STORE_LOCAL'			=> 'אחסן קובץ באופן מקומי',
	'STRUCTURE_ONLY'		=> 'מבנה בלבד',

	'TABLE_SELECT'		=> 'בחירת טבלאות',
	'TABLE_SELECT_ERROR'=> 'אתה חייב לבחור לפחות טבלה אחת.',
));
