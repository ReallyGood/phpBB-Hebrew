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
  'RECAPTCHA_LANG' => 'he',
  'CAPTCHA_RECAPTCHA' => 'reCaptcha v2',
  'CAPTCHA_RECAPTCHA_V3' => 'reCaptcha v3',
  'RECAPTCHA_INCORRECT' => 'הפתרון שסיפקת שגוי',
  'RECAPTCHA_NOSCRIPT' => 'יש להפעיל Javascript בדפדפן שלך כדי לראות את השאלה.',
  'RECAPTCHA_NOT_AVAILABLE' => 'כדי להשתמש ב-reCaptcha, עליך ליצור חשבון באתר <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
  'RECAPTCHA_INVISIBLE' => 'CAPTCHA זה הוא למעשה בלתי נראה. כדי לוודא שהוא פועל, אייקון קטן אמור להופיע בפינה הימנית התחתונה של דף זה.',
  'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS' => 'חרגת ממספר ניסיונות ההתחברות המרבי המותר.<br>בנוסף לשם המשתמש והסיסמה שלך, ייעשה שימוש ב-reCAPTCHA v3 הבלתי נראה לאימות הפגישה שלך.',
  'RECAPTCHA_PUBLIC' => 'מפתח האתר',
  'RECAPTCHA_PUBLIC_EXPLAIN' => 'מפתח reCAPTCHA של האתר שלך. ניתן להשיג מפתחות באתר <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. יש להשתמש ב-reCAPTCHA v2 &gt; סוג תג Invisible reCAPTCHA.',
  'RECAPTCHA_V3_PUBLIC_EXPLAIN' => 'מפתח reCAPTCHA של האתר שלך. ניתן להשיג מפתחות באתר <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. יש להשתמש ב-reCAPTCHA v3.',
  'RECAPTCHA_PRIVATE' => 'מפתח סודי',
  'RECAPTCHA_PRIVATE_EXPLAIN' => 'מפתח reCAPTCHA הסודי שלך. ניתן להשיג מפתחות באתר <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. יש להשתמש ב-reCAPTCHA v2 &gt; סוג תג Invisible reCAPTCHA.',
  'RECAPTCHA_V3_PRIVATE_EXPLAIN' => 'מפתח reCAPTCHA הסודי שלך. ניתן להשיג מפתחות באתר <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. יש להשתמש ב-reCAPTCHA v3.',
  'RECAPTCHA_V3_DOMAIN' => 'דומיין בקשה',
  'RECAPTCHA_V3_DOMAIN_EXPLAIN' => 'הדומיין ממנו יוטען הסקריפט ובו ייעשה שימוש לאימות הבקשה.<br>יש להשתמש ב-<samp>recaptcha.net</samp> כאשר <samp>google.com</samp> אינו נגיש.',
  'RECAPTCHA_V3_METHOD' => 'שיטת בקשה',
  'RECAPTCHA_V3_METHOD_EXPLAIN' => 'The method to use when verifying the request.<br>Disabled options are not available within your setup.',
  'RECAPTCHA_V3_METHOD_CURL' => 'cURL',
  'RECAPTCHA_V3_METHOD_POST' => 'POST',
  'RECAPTCHA_V3_METHOD_SOCKET' => 'Socket',
  'RECAPTCHA_V3_THRESHOLD_DEFAULT' => 'Default threshold',
  'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN' => 'Used when none of the other actions are applicable.',
  'RECAPTCHA_V3_THRESHOLD_LOGIN' => 'Login threshold',
  'RECAPTCHA_V3_THRESHOLD_POST' => 'Post threshold',
  'RECAPTCHA_V3_THRESHOLD_REGISTER' => 'Register threshold',
  'RECAPTCHA_V3_THRESHOLD_REPORT' => 'Report threshold',
  'RECAPTCHA_V3_THRESHOLDS' => 'Thresholds',
  'RECAPTCHA_V3_THRESHOLDS_EXPLAIN' => 'reCAPTCHA v3 returns a score (<samp>1.0</samp> is very likely a good interaction, <samp>0.0</samp> is very likely a bot). Here you can set the minimum score per action.',
  'EMPTY_RECAPTCHA_V3_REQUEST_METHOD' => 'reCAPTCHA v3 requires to know which available method you want to use when verifying the request.',
));
