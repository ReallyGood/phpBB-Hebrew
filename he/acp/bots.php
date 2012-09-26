<?php
/** 
*
* acp_bots [Hebrew]
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'ניהול בוטים',
	'BOTS_EXPLAIN'		=> '”בוטים”, ”עכבישים” או ”תולעים” הם נציגים אוטומטים אשר בשימוש בדרך כלל על־ידי מנועי חיפוש כדי לעדכן את בסיס הנתונים שלהם. מכיוון שלעיתים נדירות הם עושים שימוש נכון בחיבורים הם יכולים לסלף מוני ביקורים, להגדיל טעינה ולפעמים להיכשל בהכנסת האתרים כראוי. כאן תוכל להגדיר סוג מיוחד של משתמש על מנת להתגבר על בעיות אלו.',

	'BOT_ACTIVATE'		=> 'הפעל',
	'BOT_ACTIVE'		=> 'הבוט פעיל',
	'BOT_ADD'			=> 'הוסף בוט',
	'BOT_ADDED'			=> 'הבוט החדש נוסף בהצלחה.',
	'BOT_AGENT'			=> 'התאמת נציג',
	'BOT_AGENT_EXPLAIN'	=> 'מחרוזת התואמת לדפדפן הנציג של הבוטים, התאמות חלקיות מורשות.',
	'BOT_DEACTIVATE'	=> 'הפסק',
	'BOT_DELETED'		=> 'הבוט נמחק.',
	'BOT_EDIT'			=> 'ערוך בוטים',
	'BOT_EDIT_EXPLAIN'	=> 'כאן אתה יכול להוסיף בוט או לערוך רישום בוט קיים. אתה יכול להגדיר מחרוזת נציג ו/או אחד או יותר כתובות IP (או טווח של כתובות) להתאמה. הזהר בעת הגדרת התאמת מחרוזות נציג או כתובות. תוכל גם להגדיר עיצוב ושפה בהם הבוט ישתמש כדי לצפות במערכת. זה יוכל לאפשר לך להקטין תעבורה על־ידי הגדרת עיצוב פשוט לבוטים. זכור לקבוע את הגישות המתאימות לקבוצת המשתמשים של הבוטים המיוחדת.',
	'BOT_LANG'			=> 'שפת הבוט',
	'BOT_LANG_EXPLAIN'	=> 'השפה המוצגת לבוט כאשר הוא גולש.',
	'BOT_LAST_VISIT'	=> 'ביקור אחרון',
	'BOT_IP'			=> 'כתובת IP של הבוט',
	'BOT_IP_EXPLAIN'	=> 'התאמות חלקיות מורשות, הפרד כתובות עם פסיק.',
	'BOT_NAME'			=> 'שם הבוט',
	'BOT_NAME_EXPLAIN'	=> 'לשימוש שלך בלבד.',
	'BOT_NAME_TAKEN'	=> 'השם כבר בשימוש במערכת ולא ניתן להשתמש בו בשביל הבוט.',
	'BOT_NEVER'			=> 'לעולם לא',
	'BOT_STYLE'			=> 'עיצוב הבוט',
	'BOT_STYLE_EXPLAIN'	=> 'עיצוב המערכת בו משתמש הבוט.',
	'BOT_UPDATED'		=> 'הבוט הקיים עודכן בהצלחה.',
	
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'נציג הבוט שציינת זהה לאחד בו אתה כרגע משתמש. אנא התאם את הציג לבוט זה.',
	'ERR_BOT_NO_IP'				=> 'כתובות ה־IP שסיפקת לא חוקיות או ששם השרת לא נמצא.',
	'ERR_BOT_NO_MATCHES'		=> 'אתה חייב לספק לפחות נציג אחת או IP להתאמת הבוט.',

	'NO_BOT'		=> 'לא נמצאו בוטים עם מספר ה־ID שצוין.',
	'NO_BOT_GROUP'	=> 'לא ניתן למצוא קבוצת בוטים מיוחדת.',
));

?>