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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'כאן תוכל לשלוח הודעת דואר אלקטרוני לכל המשתמשים או לכל המשתמשים מקבוצה מסוימת <strong>אשר בעלי האפשרות לקבל הודעות משולח הדואר פעילה</strong>. על מנת לבצע זאת, הודעה תשלח לכתובת הדואר האלקטרוני של המנהל הראשי שסופקה, עם העתק חסוי הנשלח לכל הנמענים. ההגדרה כברירת מחדל היא לכלול 20 נמענים עבור הודעה אחת, ולנמענים נוספים הודעות ניוספות ישלחו. אם אתה שולח לקבוצה גדולה של אנשים אנא המתן בסבלנות לאחר השליחה ואל תעצור את העמוד באמצע הפעולה. שליחת דואר אשר לוקחת זמן רב הינה דבר נורמלי, אתה תקבל הודעה כאשר הפעולה תושלם.',
	'ALL_USERS'						=> 'כל המשתמשים',

	'COMPOSE'				=> 'שלח הודעה',

	'EMAIL_SEND_ERROR'		=> 'ישנה שגיאה אחת או יותר בעת שליחת הדואר. בדוק את %sיומן השגיאות%s להודעות שגיאה מפורטות.',
	'EMAIL_SENT'			=> 'ההודעה נשלחה.',
	'EMAIL_SENT_QUEUE'		=> 'ההודעה עומדת בתור לשליחה.',

	'LOG_SESSION'			=> 'החיבור לחיבורי הדואר האלקטרוני הוא הכרחי לתיעוד',

	'SEND_IMMEDIATELY'		=> 'שלח באופן מיידי',
	'SEND_TO_GROUP'			=> 'שלח לקבוצה',
	'SEND_TO_USERS'			=> 'שלח למשתמשים',
	'SEND_TO_USERS_EXPLAIN'	=> 'הזנת שמות משתמשים כאן תעבור על כל קבוצה שנבחרה לעיל. הכנס כל שם משתמש בשורה חדשה.',

	'MAIL_BANNED'			=> 'שליחה למשתמשים חסומים',
	'MAIL_BANNED_EXPLAIN'	=> 'כאשר שולחים דואר אלקטרוני לקבוצה רחבה ניתן לבחור האם משתמשים חסומים יקבלו את הדואר האלקטרוני גם כן.',
	'MAIL_HIGH_PRIORITY'	=> 'גבוה',
	'MAIL_LOW_PRIORITY'		=> 'נמוך',
	'MAIL_NORMAL_PRIORITY'	=> 'רגיל',
	'MAIL_PRIORITY'			=> 'עדיפות דואר',
	'MASS_MESSAGE'			=> 'ההודעה שלך',
	'MASS_MESSAGE_EXPLAIN'	=> 'שים לב שאתה יכול להזין טקסט פשוט בלבד. כל התוספות יוסרו לפני השליחה.',

	'NO_EMAIL_MESSAGE'		=> 'אתה חייב להזין הודעה.',
	'NO_EMAIL_SUBJECT'		=> 'אתה חייב לציין כותרת להודעה שלך.',
));
