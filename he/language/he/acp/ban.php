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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> 'שעה',
	'30_MINS'		=> 'חצי שעה',
	'6_HOURS'		=> '6 שעות',

	'ACP_BAN_EXPLAIN'	=> 'כאן תוכל לנהל את חסימת המשתמשים לפי שם, IP או כתובת דואר אלקטרוני. שיטות אלו מונעות ממשתמש להיכנס לכל חלק של המערכת. תוכל לתת סיבה קצרה (מקסימום 3000 תווים) לחסימה אם תרצה. הסיבה תוצג ביומן המנהלים הראשיים. ניתן לציין גם את אורך הזמן של החסימה. אם אתה רוצה שהחסימה תסתיים בתאריך מסוים במקום לאחר תקופת זמן שנקבעה בחר ב<span style="text-decoration: underline;">עד -&gt;</span> לאורך החסימה והזן תאריך בתבנית <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'שחרר מחסימה',
	'BAN_LENGTH'			=> 'אורך החסימה',
	'BAN_REASON'			=> 'סיבה לחסימה',
	'BAN_GIVE_REASON'		=> 'הסיבה המוצגת לחסום',
	'BAN_UPDATE_SUCCESSFUL'	=> 'רשימת החסומים עודכנה בהצלחה.',
	'BANNED_UNTIL_DATE'		=> 'עד %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (עד %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'חסום כתובת דואר אלקטרוני אחת או יותר',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'אפשר כדי לשחרר את כתובות הדואר האלקטרוני שהוזנו מכל החסימות הנוכחיות.',
	'EMAIL_BAN_EXPLAIN'			=> 'כדי לציין יותר מכתובת דואר אלקטרוני אחת, הזן כל אחת מהן בשורה חדשה. לכתובות עם התאמות חלקיות השתמש ב־* בתור התו המשלים, למשל <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, וכד\'.',
	'EMAIL_NO_BANNED'			=> 'אין כתובות דואר אלקטרוני חסומות',
	'EMAIL_UNBAN'				=> 'בטל חסימה או שחרור לכתובות דואר אלקטרוני',
	'EMAIL_UNBAN_EXPLAIN'		=> 'אתה יכול לבטל חסימה (או לבטל שחרור) למספר כתובות דואר אלקטרוני במהלך אחד בעזרת השילוב המתאים של עכבר ומקלדת לפי המחשב והדפדפן שלך. כתובות דואר אלקטרוני שמשוחררות מחסימה מודגשות.',

	'IP_BAN'					=> 'חסום כתובת IP אחת או יותר',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'אפשר כדי לשחרר את כתובות הIP שהוזנו מכל החסימות הנוכחיות.',
	'IP_BAN_EXPLAIN'			=> 'To specify several different IPs or hostnames enter each on a new line. To specify a range of IP addresses separate the start and end with a hyphen (-), to specify a wildcard use “*”.',
	'IP_HOSTNAME'				=> 'כתובות IP או שמות שרתים',
	'IP_NO_BANNED'				=> 'אין כתובות IP חסומות',
	'IP_UNBAN'					=> 'בטל חסימה או שחרור לכתובות IP',
	'IP_UNBAN_EXPLAIN'			=> 'אתה יכול לבטל חסימה (או לבטל שחרור) למספר כתובות IP במהלך אחד בעזרת השילוב המתאים של עכבר ומקלדת לפי המחשב והדפדפן שלך. כתובות IP שמשוחררות מחסימה מודגשות.',

	'LENGTH_BAN_INVALID'		=> 'התאריך צריך להיות בתבנית <kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'נחסם',
	'OPTIONS_EXCLUDED'			=> 'שוחרר',

	'PERMANENT'		=> 'תמידית',

	'UNTIL'						=> 'עד',
	'USER_BAN'					=> 'חסום משתמש אחד או יותר על ידי שם משתמש',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'אפשר כדי לשחרר את המשתמשים שהוזנו מכל החסימות הנוכחיות.',
	'USER_BAN_EXPLAIN'			=> 'אתה יכול לחסום כמה משתמשים במהלך אחד על־ידי הזנת כל שם בשורה חדשה. השתמש באפשרות <span style="text-decoration: underline;">מצא משתמש</span> כדי למצוא ולהוסיף משתמש אחד או יותר אוטומטית.',
	'USER_NO_BANNED'			=> 'אין שמות משתמשים חסומים',
	'USER_UNBAN'				=> 'בטל חסימה או שחרור למשתמש על ידי שם משתמש',
	'USER_UNBAN_EXPLAIN'		=> 'אתה יכול לבטל חסימה (או לבטל שחרור) למספר משתמשים במהלך אחד בעזרת השילוב המתאים של עכבר ומקלדת לפי המחשב והדפדפן שלך. משתמשים שמשוחררים מחסימה מודגשים.',
));
