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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array (
  'APPROVE' => 'אשר',
  'ATTACHMENT' => 'קובץ מצורף',
  'ATTACHMENT_FUNCTIONALITY_DISABLED' => 'האפשרות לצירוף קבצים בוטלה.',
  'BOOKMARK_ADDED' => 'הנושא נוסף למועדפים בהצלחה.',
  'BOOKMARK_ERR' => 'הוספת הנושא למועדפים נכשלה. אנא נסה שנית.',
  'BOOKMARK_REMOVED' => 'הנושא הוסר מהמועדפים בהצלחה.',
  'BOOKMARK_TOPIC' => 'הוסף למועדפים',
  'BOOKMARK_TOPIC_REMOVE' => 'הסר ממועדפים',
  'BUMPED_BY' => 'הוקפץ לאחרונה על ידי %1$s בתאריך %2$s.',
  'BUMP_TOPIC' => 'הקפץ נושא',
  'DELETE_TOPIC' => 'מחק נושא',
  'DELETED_INFORMATION' => 'נמחק על ידי %1$s ב %2$s',
  'DISAPPROVE' => 'דחה',
  'DOWNLOAD_NOTICE' => 'אין לך את ההרשאות המתאימות על מנת לצפות בקבצים המצורפים להודעה זאת.',
  'EDITED_TIMES_TOTAL' =>
  array (
    1 => 'נערך לאחרונה על ידי %2$s ב-%3$s, נערך פעם %1$d בסך הכול.',
    2 => 'נערך לאחרונה על ידי %2$s ב-%3$s, נערך %1$d פעמים בסך הכול.',
  ),
  'EMAIL_TOPIC' => 'שלח נושא בדוא״ל',
  'ERROR_NO_ATTACHMENT' => 'הקובץ המצורף שנבחר אינו קיים יותר.',
  'FILE_NOT_FOUND_404' => 'הקובץ <strong>%s</strong> אינו קיים.',
  'FORK_TOPIC' => 'העתק נושא',
  'FULL_EDITOR' => 'עורך מלא ותצוגה מקדימה',
  'LINKAGE_FORBIDDEN' => 'אין לך הרשאה לצפות, להוריד או לקשר מאתר זה או אליו.',
  'LOGIN_NOTIFY_TOPIC' => 'קיבלת התראה לגבי נושא זה, אנא התחבר כדי לצפות בו.',
  'LOGIN_VIEWTOPIC' => 'עליך להירשם ולהתחבר כדי לצפות בנושא זה.',
  'MAKE_ANNOUNCE' => 'שנה ל״הכרזה״',
  'MAKE_GLOBAL' => 'שנה ל״גלובלי״',
  'MAKE_NORMAL' => 'שנה ל״נושא רגיל״',
  'MAKE_STICKY' => 'שנה ל״נעוץ״',
  'MAX_OPTIONS_SELECT' =>
  array (
    1 => 'באפשרותך לבחור אפשרות <strong>%d</strong>',
    2 => 'באפשרותך לבחור עד <strong>%d</strong> אפשרויות',
  ),
  'MISSING_INLINE_ATTACHMENT' => 'הקובץ המצורף <strong>%s</strong> אינו זמין יותר',
  'MOVE_TOPIC' => 'העבר נושא',
  'NO_ATTACHMENT_SELECTED' => 'לא בחרת קובץ מצורף להורדה או לצפייה.',
  'NO_NEWER_TOPICS' => 'אין נושאים חדשים יותר בפורום זה.',
  'NO_OLDER_TOPICS' => 'אין נושאים ישנים יותר בפורום זה.',
  'NO_UNREAD_POSTS' => 'אין הודעות חדשות שלא נקראו בנושא זה.',
  'NO_VOTE_OPTION' => 'עליך לבחור אפשרות בעת ההצבעה.',
  'NO_VOTES' => 'אין הצבעות',
  'NO_AUTH_PRINT_TOPIC' => 'אין לך הרשאה להדפיס נושאים.',
  'POLL_ENDED_AT' => 'הסקר הסתיים ב-%s',
  'POLL_RUN_TILL' => 'הסקר פעיל עד %s',
  'POLL_VOTED_OPTION' => 'הצבעת עבור אפשרות זו',
  'POST_DELETED_RESTORE' => 'הודעה זו נמחקה. ניתן לשחזר אותה.',
  'PRINT_TOPIC' => 'תצוגת הדפסה',
  'QUICK_MOD' => 'כלי ניהול מהיר',
  'QUICKREPLY' => 'תגובה מהירה',
  'REPLY_TO_TOPIC' => 'הגב לנושא',
  'RESTORE' => 'שחזר',
  'RESTORE_TOPIC' => 'שחזר נושא',
  'RETURN_POST' => '%sחזור להודעה%s',
  'SUBMIT_VOTE' => 'שלח הצבעה',
  'TOPIC_TOOLS' => 'כלי נושא',
  'TOTAL_VOTES' => 'סך הצבעות',
  'UNLOCK_TOPIC' => 'בטל נעילת נושא',
  'VIEW_INFO' => 'פרטי הודעה',
  'VIEW_NEXT_TOPIC' => 'הנושא הבא',
  'VIEW_PREVIOUS_TOPIC' => 'הנושא הקודם',
  'VIEW_QUOTED_POST' => 'צפה בהודעה המצוטטת',
  'VIEW_RESULTS' => 'הצג תוצאות',
  'VIEW_TOPIC_POSTS' =>
  array (
    1 => 'הודעה %d',
    2 => '%d הודעות',
  ),
  'VIEW_UNREAD_POST' => 'ההודעה הראשונה שלא נקראה',
  'VOTE_SUBMITTED' => 'הצבעתך נקלטה.',
  'VOTE_CONVERTED' => 'שינוי הצבעות אינו נתמך בסקרים שהומרו.',
));
