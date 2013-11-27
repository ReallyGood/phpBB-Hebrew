<?php
/**
*
* plupload [English]
*
* @package language
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @copyright (c) 2012 phpBB Group
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
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'הוסף קבצים לתור ההעלאות ולחץ על כפתור העלאה.',
	'PLUPLOAD_DRAG'				=> 'גרור קבצים לכאן.',
	'PLUPLOAD_ERR_INPUT'		=> 'Failed to open input stream.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'נכשל הניסיון להעביר את הקובץ שהועלה.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Failed to open output stream.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'File extension error.',
	'PLUPLOAD_FILENAME'			=> 'שם הקובץ',
	'PLUPLOAD_FILES_QUEUED'		=> '%d files queued',
	'PLUPLOAD_GENERIC_ERROR'	=> 'שגיאה כללית.',
	'PLUPLOAD_HTTP_ERROR'		=> 'שגיאת HTTP.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init error.',
	'PLUPLOAD_IO_ERROR'			=> 'IO error.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'שגיאת אבטחה.',
	'PLUPLOAD_SELECT_FILES'		=> 'קבצים שנבחרו',
	'PLUPLOAD_SIZE'				=> 'גודל',
	'PLUPLOAD_SIZE_ERROR'		=> 'File size error.',
	'PLUPLOAD_STATUS'			=> 'סטטוס',
	'PLUPLOAD_START_UPLOAD'		=> 'התחל העלאה',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'התחל העלאת התור.',
	'PLUPLOAD_STOP_UPLOAD'		=> 'הפסק העלאה',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'הפסק העלאה נוכחית',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'העלה %d/%d קבצים',
));
