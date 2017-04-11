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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'איזור זה מאפשר לך למחוק או לבטל משתמשים במערכת הפורומים שלך. ניתן לסנן חשבונות במגוון דרכים; לפי מספר הודעות, פעילות אחרונה וכדומה. ניתן לשלב קריטריונים כדי לצמצם את התוצאות. לדוגמא, אתה יכול לבחור משתמשים עם פחות מ-10 הודעות, שלא היו פעילים לאחר 01-01-2002. השתמש ב * בתור wildcard בשדות טקסט. לחלופין, אתה יכול לדלג על בחירת הקריטריונים לחלוטין על ידי הזנת רשימת המשתמשים (כל אחד בשורה נפרדת) בשדה הטקסט. שים לב: יש להשתמש באפשרות זו בזהירות רבה! ברגע שמשתמש נמחק, אין דרך לשחזר אותו.',

	'CRITERIA'				=> 'קריטריונים',

	'DEACTIVATE_DELETE'			=> 'הפוך ללא פעיל או מחק',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'בחר אם להפוך משתמשים ללא פעילים או למחוק אותם לחלוטין. אנא שים לב כי מחיקת משתמשים לא ניתנת לשחזור!',
	'DELETE_USERS'				=> 'מחק',
	'DELETE_USER_POSTS'			=> 'מחק את הודעותיו של המשתמש החסום',
	'DELETE_USER_POSTS_EXPLAIN' => 'מוחק את ההודעות של משתמש מחוק, לא פועל אם המשתמש מושבת.',

	'JOINED_EXPLAIN'			=> 'הכנס את התאריך בפורמט <kbd>YYYY-MM-DD</kbd>. אתה רשאי להשתמש בשתי השדות לקביעת טווח זמנים, או להשאיר אחד ריק לטווח זמנים רחב.',

	'LAST_ACTIVE_EXPLAIN'		=> 'הכנס את התאריך בפורמט <kbd>YYYY-MM-DD</kbd>. הכנס <kbd>0000-00-00</kbd> למחיקת משתמשים שמעולם לא התחברו, תנאי <em>הלפני ולאחר</em> לא יילקחו בחשבון.',

	'POSTS_ON_QUEUE'			=> 'הודעות הממתינות לאישור',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'מוגבל למשתמשים המוגדרים בקבוצת המשתמשים שנבחרה.',
	'PRUNE_USERS_GROUP_NONE'	=> 'כל הקבוצות',
	'PRUNE_USERS_LIST'				=> 'משתמשים אותם יש לאפס',
	'PRUNE_USERS_LIST_DELETE'		=> 'באמצעות הקריטריונים שבחרת לאיפוס משתמשים החשבונות הבאים ימחקו, אתה יכול להסיר משתמשים ספציפים מהרשימה על ידי הסרת הסימון מהתיבה ליד שם המשתמש.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'באמצעות הקריטריונים שבחרת לאיפוס משתמשים החשבונות הבאים יהפכו ללא פעילים, אתה יכול להסיר משתמשים ספציפים מהרשימה על ידי הסרת הסימון מהתיבה ליד שם המשתמש.',

	'SELECT_USERS_EXPLAIN'		=> 'הכנס שמות משתמש ספציפים כאן, הם יהיו בשימוש יחד עם הגדרות הקריטריון למעלה. לא ניתן לקצץ מייסדים.',

	'USER_DEACTIVATE_SUCCESS'	=> 'הושבתה פעילותם של המשתמשים הנבחרים בהצלחה.',
	'USER_DELETE_SUCCESS'		=> 'נמחקו חשבונות המשתמשים הנבחרים בהצלחה.',
	'USER_PRUNE_FAILURE'		=> 'אין משתמשים שמתאימים לקריטריונים שקבעת.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'התאריך שהקשת שגוי, מצופה שהתאריך יירשם בפורמט <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'אופציה זו תמחק כל נושא אשר לא נכתבו בו תגובות או שצפו בו בהתאם למספר הימים שהגדרת. אם לא תכניס מספר כל הנושאים ימחקו. כברירת מחדל, לא יוסרו נושאים אשר קיימים בהם סקרים פעילים, כמו כן לא יוסרו נושאים נעוצים והכרזות.',

	'FORUM_PRUNE'		=> 'איפוס פורום',

	'NO_PRUNE'			=> 'לא אופסו פורומים.',

	'SELECTED_FORUM'	=> 'פורום נבחר',
	'SELECTED_FORUMS'	=> 'פורומים נבחרים',

	'POSTS_PRUNED'					=> 'הודעות שאופסו',
	'PRUNE_ANNOUNCEMENTS'			=> 'אפס הכרזות',
	'PRUNE_FINISHED_POLLS'			=> 'אפס סקרים סגורים',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'מסיר נושאים עם סקרים שנסגרו.',
	'PRUNE_FORUM_CONFIRM'			=> 'האם אתה בטוח שברצונך לאפס את הפורומים שנבחרו על ידי ההגדרות שצוינו? ברגע שהוסרו, אין דרך לשחזר את ההודעות ונושאים שאופסו.',
	'PRUNE_NOT_POSTED'				=> 'ימים החל מההודעה האחרונה',
	'PRUNE_NOT_VIEWED'				=> 'ימים החל מהצפייה האחרונה',
	'PRUNE_OLD_POLLS'				=> 'אפס סקרים ישנים',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'מסיר נושאים עם סקרים שלא הצביעו להם במספר הימים הנקוב.',
	'PRUNE_STICKY'					=> 'אפס דביקים',
	'PRUNE_SUCCESS'					=> 'איפוס הפורומים התבצע בהצלחה.',

	'TOPICS_PRUNED'		=> 'נושאים אופסו',
));
