<?php
/** 
*
* viewforum [Hebrew]
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
	'PLUPLOAD_ADD_FILES'		=> 'הוסף קבצים',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'הוסף קבצים ולחץ על לחץ ההפעל..',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s כבר קיים.',
	'PLUPLOAD_CLOSE'			=> 'סגור',
	'PLUPLOAD_DRAG'				=> 'גרור את הקבצים לכאן.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Duplicate file error.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> '<BR>הינך יכול לצרף קבצים על ידי גרירה ושחרורם בתיבת ההודעה.',
	'PLUPLOAD_ERR_INPUT'		=> 'לא הצליח, נכשל.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'נכשל בנסיון העברת הקובץ שהועלה.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'נכשל בפתיחת זרם הפלט. נסו שוב.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'קובץ גדול מדי:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'שגיאת העלאה.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'סיומת קובץ לא חוקית:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'אין מספיק זכרון באחסון, נסו מאוחר יותר.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'הקישור שהעלת עשויה להיות שגויה או אינה קיימת.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'שגיאה בסיומת הקובץ.',
	'PLUPLOAD_FILE'				=> 'קובץ: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'קובץ: %s, גודל: %d, גודל הקובץ: %d',
	'PLUPLOAD_FILENAME'			=> 'שם קובץ',
	'PLUPLOAD_FILES_QUEUED'		=> '%d קבצים בתור',
	'PLUPLOAD_GENERIC_ERROR'	=> 'שגיאה כללית.',
	'PLUPLOAD_HTTP_ERROR'		=> 'שגיאת HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'פורט שגוי או אינו נתמך.',
	'PLUPLOAD_INIT_ERROR'		=> 'שגיאת INIT.',
	'PLUPLOAD_IO_ERROR'			=> 'שגיאת IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'שגיאת אבטחה.',
	'PLUPLOAD_SELECT_FILES'		=> 'בחר קבצים',
	'PLUPLOAD_SIZE'				=> 'גודל',
	'PLUPLOAD_SIZE_ERROR'		=> 'שגיאת גודל הקובץ.',
	'PLUPLOAD_STATUS'			=> 'סטאטוס',
	'PLUPLOAD_START_UPLOAD'		=> 'התחל בהעלה',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'מעלה לאתר',
	'PLUPLOAD_STOP_UPLOAD'		=> 'עצירת העלאה',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'הפסק העלאה נוכחית',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'הועלה %d/%d קבצים',
));
