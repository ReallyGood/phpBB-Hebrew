<?php
/**
*
* recaptcha [Hebrew]
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
	'RECAPTCHA_LANG'				=> 'he',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'בשביל להשתמש בreCaptcha, אתה חייב לצור חשבון ב<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'קוד האימות החזותי ששלחת שגוי',

	'RECAPTCHA_PUBLIC'				=> 'מפתח reCaptcha ציבורי',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'מפתח הreCaptcha הציבורי שלך. ניתן לקבל מפתחות ב<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'מפתח reCaptcha אישי',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'מפתח הreCaptcha האישי שלך. ניתן לקבל מפתחות ב<a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'בניסיון למנוע שליחות אוטומטיות, אנו מבקשים שתכניס את שתי המילים המופיעות בתיבת הטקסט מולך.',
));

?>