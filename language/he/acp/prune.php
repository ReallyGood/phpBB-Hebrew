<?php
/** 
*
* acp_prune [Hebrew]
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'This section allows you to delete or deactivate users on your board. Accounts can be filtered in a variety of ways; by post count, most recent activity, etc. Criteria may be combined to narrow down which accounts are affected. For example, you can prune users with fewer than 10 posts, who were also inactive after 2002-01-01. Use * as a wildcard for text fields. Alternatively, you may skip the criteria selection completely by entering a list of users (each on a separate line) into the text field. Take care with this facility! Once a user is deleted, there is no way to reverse the action.',

	'CRITERIA'				=> 'Criteria',

	'DEACTIVATE_DELETE'			=> 'הפוך ללא פעיל או מחק',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'בחר אם להפוך משתמשים ללא פעילים או למחוק אותם לחלוטין. אנא שים לב כי מחיקת משתמשים לא ניתנת לשחזור!',
	'DELETE_USERS'				=> 'מחק',
	'DELETE_USER_POSTS'			=> 'מחק את הודעותיו של המשתמש החסום',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'מוחק את ההודעות של משתמש מחוק, לא פועל אם המשתמש מושבת.',

	'JOINED_EXPLAIN'			=> 'הכנס את התאריך בפורמט <kbd>YYYY-MM-DD</kbd>. אתה רשאי להשתמש בשתי השדות לקביעת טווח זמנים, או להשאיר אחד ריק לטווח זמנים רחב.',

	'LAST_ACTIVE_EXPLAIN'		=> 'הכנס את התאריך בפורמט <kbd>YYYY-MM-DD</kbd>. הכנס <kbd>0000-00-00</kbd> למחיקת משתמשים שמעולם לא התחברו, תנאי <em>הלפני ולאחר</em> לא יילקחו בחשבון.',

	'POSTS_ON_QUEUE'			=> 'הודעות הממתינות לאישור',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'מוגבל למשתמשים המוגדרים בקבוצת המשתמשים שנבחרה.',
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
	'PRUNE_NOT_POSTED'			=> 'ימים החל מההודעה האחרונה',
	'PRUNE_NOT_VIEWED'				=> 'ימים החל מהצפייה האחרונה',
	'PRUNE_OLD_POLLS'				=> 'אפס סקרים ישנים',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'מסיר נושאים עם סקרים שלא הצביעו להם במספר הימים הנקוב.',
	'PRUNE_STICKY'					=> 'אפס דביקים',
	'PRUNE_SUCCESS'					=> 'איפוס הפורומים התבצע בהצלחה.',

	'TOPICS_PRUNED'		=> 'נושאים אופסו',
));
