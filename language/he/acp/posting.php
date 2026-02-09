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

// BBCodes
// Note to translators: you can translate everything but what's between { and }

$lang = array_merge($lang, array (
  'ACP_BBCODES_EXPLAIN' => 'BBCode -פונקציה מיוחדת של HTML, המאפשרת לצור שליטה על הצורה בה משהו מוצג. מעמוד זה אתה יכול להוסיף, למחוק וערוך BBCode מותאם אישית.',
  'ADD_BBCODE' => 'הוסף BBCode חדש',
  'BBCODE_DANGER' => 'ככל הנראה ה־BBCode אותו אתה מנסה להוסיף אינו בטוח. אם ה-BBCode משתמש באפשרות {TEXT} בהקשר רגיש, נסה להשתמש באפשרות מגבילה יותר. המשך רק אם אתה מבין את הסיכון הקיים.',
  'BBCODE_DANGER_PROCEED' => 'המשך', // 'אני מבין את הסיכון',
  'BBCODE_ADDED' => 'BBCode נוסף בהצלחה.',
  'BBCODE_EDITED' => 'BBCode נערך בהצלחה.',
  'BBCODE_DELETED' => 'BBCode הוסר בהצלחה.',
  'BBCODE_NOT_EXIST' => 'בחרת BBCode שלא קיים.',
  'BBCODE_HELPLINE' => 'שורת עזר',
  'BBCODE_HELPLINE_EXPLAIN' => 'שדה זה הוא הטקסט שיופיע במעבר עכבר על הBBCode.',
  'BBCODE_HELPLINE_TEXT' => 'הטקסט של שורת העזר',
  'BBCODE_HELPLINE_TOO_LONG' => 'הטקסט של שורת העזר שהזנת ארוך מדי.',
  'BBCODE_INVALID_TAG_NAME' => 'השם שבחרת כבר קיים.',
  'BBCODE_INVALID' => 'הBBCode בנוי בצורה לא תקינה.',
  'BBCODE_INVALID_TEMPLATE' => 'תבנית ה-BBCode אינה זמינה.',
  'BBCODE_TAG' => 'תגית',
  'BBCODE_TAG_TOO_LONG' => 'השם שבחרת לתגית ארוך מדי.',
  'BBCODE_TAG_DEF_TOO_LONG' => 'ההגדרה שציינת לתגית ארוכה מדי, אנא כתוב הגדרה קצרה יותר.',
  'BBCODE_USAGE' => 'שימוש BBCode',
  'BBCODE_USAGE_EXAMPLE' => '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
  'BBCODE_USAGE_EXPLAIN' => 'כאן אתה יכול להגדיר איך להשתמש בBBCode. תחליף כל משנה על ידי הסימן המתאים (%sראה מתחת%s).',
  'EXAMPLE' => 'דוגמה:',
  'EXAMPLES' => 'דוגמאות:',
  'HTML_REPLACEMENT' => 'HTML תחליף',
  'HTML_REPLACEMENT_EXAMPLE' => '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
  'HTML_REPLACEMENT_EXPLAIN' => 'כאן הנך מגדיר את התחלופה בHTML למוגדר למעלה. אל תשכח להשתמש באותם הסימנים.',
  'TOKEN' => 'טוקן',
  'TOKENS' => 'טוקן',
  'TOKENS_EXPLAIN' => 'טוקנים הם שומרי מקום עבור הקלט של המשתמש. הקלט יחשב לתקני רק כאשר מתאים להגדרה. אם יש צורך, אתה יכול למספר אותם על ידי הוספת מספר בסיום המחרוזת שבין הסוגריים, לדוגמה: {TEXT1}, {TEXT2}.<br /><br />בתוך תחליף ה־HTML תוכל גם להשתמש בכל מחרוזת שקיימת בשפה בתוך תיקיית השפות במערכת, למשל: {L_<em>&lt;שםמחרוזת&gt;</em>} היכן ש־<em>&lt;שםמחרוזת&gt;</em> זה השם של המחרוזת המתורגמת שהנך מעוניין להוסיף. לדוגמה, {L_WRITE} יוצג כ“כתב” או על פי בחירת השפה של המשתמש.<br /><br /><strong>שים לב שהטוקנים הרשומים למטה בלבד ניתנים לשימוש בתוך תגי ה־BBCode המותאמים אישית.</strong>',
  'TOKEN_DEFINITION' => 'מה זה יכול להיות?',
  'TOO_MANY_BBCODES' => 'אינך יכול ליצור עוד BBCode, אנא מחק אחד או יותר על מנת ליצור BBCode חדש.',
  'tokens' => 
  array (
    'TEXT' => 'כל טקסט, כולל תווים בשפות אחרות, מספרים וכו׳…',
    'SIMPLETEXT' => 'תווים מהאלפבית הלטיני (A-Z), מספרים, רווחים, פסיקים, נקודות, מינוס, פלוס, מקף וקו תחתון',
    'INTTEXT' => 'תווי אותיות ב־Unicode, מספרים, רווחים, פסיקים, נקודות, מינוס, פלוס, מקף, קו תחתון ורווחים לבנים.',
    'IDENTIFIER' => 'תווים מהאלפבית הלטיני (A-Z), מספרים, מקף וקו תחתון',
    'NUMBER' => 'כל רצף של ספרות',
    'EMAIL' => 'כתובת דוא״ל תקינה',
    'URL' => 'כתובת URL תקינה עם כל פרוטוקול מורשה (http, ftp וכו׳ — לא ניתן לנצל עבור מתקפות javascript). אם לא צוין פרוטוקול, יתווסף “http://” בתחילת המחרוזת.',
    'LOCAL_URL' => 'כתובת URL מקומית. ה־URL חייב להיות יחסי לדף הנושא ואינו יכול להכיל שם שרת או פרוטוקול, מאחר שקישורים מקבלים קידומת “%s”',
    'RELATIVE_URL' => 'כתובת URL יחסית. ניתן להשתמש בה כדי להתאים חלקים מ־URL, אך שים לב: גם URL מלא הוא URL יחסי תקין. כאשר ברצונך להשתמש ב־URL יחסיים של המערכת, השתמש בטוקן LOCAL_URL.',
    'COLOR' => 'צבע HTML, יכול להיות בפורמט מספרי כמו <samp>#FF1234</samp> או <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">מילת מפתח של CSS</a> כגון <samp>fuchsia</samp> או <samp>InactiveBorder</samp>',
    'ALNUM'			=> 'תווים מהאלפבית הלטיני (A-Z) ומספרים.',
		'CHOICE'		=> 'בחירה מתוך ערכים מוגדרים, לדוגמה: <samp>{CHOICE=spades,hearts,diamonds,clubs}</samp>. כברירת מחדל הערכים אינם תלויי רישיות (case-insensitive), וניתן להפוך אותם לתלויי רישיות באמצעות ציון האפשרות <samp>caseSensitive</samp>: <samp>{CHOICE=Spades,Hearts,Diamonds,Clubs;caseSensitive}</samp>',
		'FLOAT'			=> 'ערך עשרוני, לדוגמה: <samp>0.5</samp>.',
		'HASHMAP'		=> 'ממפה מחרוזות לתחליף שלהן בתבנית <samp>{HASHMAP=string1:replacement1,string2:replacement2}</samp>. תלוי רישיות. כברירת מחדל משמר ערכים לא מוכרים.',
		'INT'			=> 'ערך מספר שלם, לדוגמה: <samp>2</samp>.',
		'IP'			=> 'כתובת IPv4 או IPv6 תקינה.',
		'IPPORT'		=> 'כתובת IPv4 או IPv6 תקינה עם מספר פורט.',
		'IPV4'			=> 'כתובת IPv4 תקינה.',
		'IPV6'			=> 'כתובת IPv6 תקינה.',
		'MAP'			=> 'ממפה מחרוזות לתחליף שלהן בתבנית <samp>{MAP=string1:replacement1,string2:replacement2}</samp>. לא תלוי רישיות. כברירת מחדל משמר ערכים לא מוכרים.',
		'RANGE'			=> 'מקבל מספר שלם בטווח נתון, לדוגמה: <samp>{RANGE=-10,42}</samp>.',
		'REGEXP'		=> 'מאמת את הערך מול ביטוי רגולרי (regexp) נתון, לדוגמה: <samp>{REGEXP=/^foo\w+bar$/}</samp>.',
		'TIMESTAMP'		=> 'חותמת זמן כגון <samp>1h30m10s</samp> שתומר למספר שניות. ניתן גם להזין מספר.',
		'UINT'			=> 'ערך מספר שלם ללא סימן (unsigned). כמו <samp>{INT}</samp>, אך דוחה ערכים הקטנים מ־0.',
  ),
  'ACP_ICONS_EXPLAIN' => 'בעמוד זה ניתן להוסיף, להסיר ולערוך את האייקונים שמשתמשים יכולים להצמיד לנושאים או להודעות שלהם. האייקונים מוצגים בדרך כלל ליד כותרות הנושאים ברשימת הפורומים, או ליד נושאי ההודעות ברשימות נושאים. ניתן גם להתקין וליצור חבילות אייקונים חדשות.',
  'ACP_SMILIES_EXPLAIN' => 'הסמיילים או ההבעות הם תמונות קטנות, מונפשות לפעמים אשר בשימוש להעברת הבעה או הרגשה. מעמוד זה אתה יכול להוסיף, להסיר ולערוך את הסמיילים אשר המשתמשים יכולים להשתמש בהם בהודעות וההודעות הפרטיות שלהם. אתה יכול גם להתקין וליצור חבילות סמיילים חדשות.',
  'ADD_SMILIES' => 'הוסף כמה סמיילים',
  'ADD_SMILEY_CODE' => 'הוסף קוד סמיילי נוסף',
  'ADD_ICONS' => 'הוסף כמה אייקונים',
  'AFTER_ICONS' => '%s אחרי',
  'AFTER_SMILIES' => '%s אחרי',
  'CODE' => 'קוד',
  'CURRENT_ICONS' => 'אייקונים בשימוש',
  'CURRENT_ICONS_EXPLAIN' => 'תבחר מה לבצע עם האייקונים שזה עתה הותקנו.',
  'CURRENT_SMILIES' => 'סמיילים בשימוש',
  'CURRENT_SMILIES_EXPLAIN' => 'תבחר מה לבצע עם הסמיילים שזה עתה הותקנו.',
  'DISPLAY_ON_POSTING' => 'הצג בעמוד שליחת הודעה',
  'DISPLAY_POSTING' => 'בעמוד השליחה',
  'DISPLAY_POSTING_NO' => 'לא בעמוד השליחה',
  'EDIT_ICONS' => 'ערוך אייקונים',
  'EDIT_SMILIES' => 'ערוך סמיילים',
  'EMOTION' => 'הבעה',
  'EXPORT_ICONS' => 'ייצא והורד את icons.pak',
  'EXPORT_ICONS_EXPLAIN' => '%sבלחיצה על קישור זה, ההגדרות לאייקונים המותקנים יוכנסו לקובץ <samp>icons.pak</samp> אשר לאחר הורדתו ניתן לשימוש ליצירת קובץ <samp>.zip</samp> או <samp>.tgz</samp> המכיל את כל האייקונים וקובץ הגדרות <samp>icons.pak</samp> זה%s.',
  'EXPORT_SMILIES' => 'ייצא והורד את smiles.pak',
  'EXPORT_SMILIES_EXPLAIN' => '%sבלחיצה על קישור זה, ההגדרות לסמיילים המותקנים יוכנסו לקובץ <samp>smilies.pak</samp> אשר לאחר הורדתו ניתן לשימוש ליצירת קובץ <samp>.zip</samp> או <samp>.tgz</samp> המכיל את כל הסמיילים וקובץ הגדרות <samp>smilies.pak</samp> זה%s.',
  'FIRST' => 'ראשון',
  'ICONS_ADD' => 'הוסף אייקון חדש',
  'ICONS_ADDED' => 
  array (
    0 => 'לא נוספו אייקונים.',
    1 => 'האייקון נוסף בהצלחה.',
    2 => 'האייקונים נוספו בהצלחה.',
  ),
  'ICONS_CONFIG' => 'הגדרות אייקונים',
  'ICONS_DELETED' => 'האייקון הוסר בהצלחה.',
  'ICONS_EDIT' => 'ערוך אייקון',
  'ICONS_EDITED' => 
  array (
    0 => 'לא עודכנו אייקונים.',
    1 => 'האייקון עודכן בהצלחה.',
    2 => 'האייקונים עודכנו בהצלחה.',
  ),
  'ICONS_HEIGHT' => 'גובה אייקון',
  'ICONS_IMAGE' => 'תמונת אייקון',
  'ICONS_IMPORTED' => 'חבילת האייקונים הותקנה בהצלחה.',
  'ICONS_IMPORT_SUCCESS' => 'חבילת האייקונים יובאה בהצלחה.',
  'ICONS_LOCATION' => 'מיקום אייקון',
  'ICONS_NOT_DISPLAYED' => 'האייקונים הבאים אינם מוצגים בעמוד פרסום ההודעה',
  'ICONS_ORDER' => 'סדר אייקונים',
  'ICONS_URL' => 'קובץ תמונת אייקון',
  'ICONS_WIDTH' => 'רוחב אייקון',
  'IMPORT_ICONS' => 'התקן חבילת אייקונים',
  'IMPORT_SMILIES' => 'התקן חבילת סמיילים',
  'KEEP_ALL' => 'שמור הכול',
  'MASS_ADD_SMILIES' => 'הוסף מספר סמיילים',
  'NO_ICONS_ADD' => 'אין אייקונים זמינים להוספה.',
  'NO_ICONS_EDIT' => 'אין אייקונים זמינים לעריכה.',
  'NO_ICONS_EXPORT' => 'אין לך אייקונים שמהם ניתן ליצור חבילה.',
  'NO_ICONS_PAK' => 'לא נמצאו חבילות אייקונים.',
  'NO_SMILIES_ADD' => 'אין סמיילים זמינים להוספה.',
  'NO_SMILIES_EDIT' => 'אין סמיילים זמינים לעריכה.',
  'NO_SMILIES_EXPORT' => 'אין לך סמיילים שמהם ניתן ליצור חבילה.',
  'NO_SMILIES_PAK' => 'לא נמצאו חבילות סמיילים.',
  'PAK_FILE_NOT_READABLE' => 'לא ניתן היה לקרוא את קובץ ה־<samp>.pak</samp>.',
  'REPLACE_MATCHES' => 'החלף התאמות',
  'SELECT_PACKAGE' => 'בחר קובץ חבילה',
  'SMILIES_ADD' => 'הוסף סמיילי חדש',
  'SMILIES_ADDED' => 
  array (
    0 => 'לא נוספו סמיילים.',
    1 => 'הסמיילי נוסף בהצלחה.',
    2 => 'הסמיילים נוספו בהצלחה.',
  ),
  'SMILIES_CODE' => 'קוד סמיילי',
  'SMILIES_CONFIG' => 'הגדרות סמיילים',
  'SMILIES_DELETED' => 'הסמיילי הוסר בהצלחה.',
  'SMILIES_EDIT' => 'ערוך סמיילי',
  'SMILIE_NO_CODE' => 'הסמיילי “%s” דולג, מאחר שלא הוזן קוד.',
  'SMILIE_NO_EMOTION' => 'הסמיילי “%s” דולג, מאחר שלא הוזנה הבעה.',
  'SMILIE_NO_FILE' => 'הסמיילי “%s” דולג, מאחר שהקובץ חסר.',
  'SMILIES_EDITED' => 
  array (
    0 => 'לא עודכנו סמיילים.',
    1 => 'הסמיילי עודכן בהצלחה.',
    2 => 'הסמיילים עודכנו בהצלחה.',
  ),
  'SMILIES_EMOTION' => 'הבעה',
  'SMILIES_HEIGHT' => 'גובה סמיילי',
  'SMILIES_IMAGE' => 'תמונת סמיילי',
  'SMILIES_IMPORTED' => 'חבילת הסמיילים הותקנה בהצלחה.',
  'SMILIES_IMPORT_SUCCESS' => 'חבילת הסמיילים יובאה בהצלחה.',
  'SMILIES_LOCATION' => 'מיקום סמיילי',
  'SMILIES_NOT_DISPLAYED' => 'הסמיילים הבאים אינם מוצגים בעמוד פרסום ההודעה',
  'SMILIES_ORDER' => 'סדר סמיילים',
  'SMILIES_URL' => 'קובץ תמונת סמיילי',
  'SMILIES_WIDTH' => 'רוחב סמיילי',
  'TOO_MANY_SMILIES' => 
  array (
    1 => 'הגעת למגבלה של %d סמיילי.',
    2 => 'הגעת למגבלה של %d סמיילים.',
  ),
  'WRONG_PAK_TYPE' => 'החבילה שצוינה אינה מכילה את הנתונים המתאימים.',
  'ACP_WORDS_EXPLAIN' => 'מלוח בקרה זה אתה יכול להוסיף, לערוך, ולהסיר מילים אשר יצונזרו אוטומטית בפורומים. אנשים עדיין יכולים להירשם עם שמות משתמשים המכילים מילים אלו. סימנים כוללים (*) מתקבלים בשדה המילה.',
  'ADD_WORD' => 'הוסף מילה חדשה',
  'EDIT_WORD' => 'ערוך צנזור מילים.',
  'ENTER_WORD' => 'אתה מוכרח לכתוב מילה ואת התחליף שלה.',
  'NO_WORD' => 'לא נבחרה מילה לשינוי.',
  'REPLACEMENT' => 'תחליף',
  'UPDATE_WORD' => 'עדכן צנזור מילים',
  'WORD' => 'מילה',
  'WORD_ADDED' => 'מילת הצנזור נוספה בהצלחה.',
  'WORD_REMOVED' => 'המילה שנבחרה הוסרה בהצלחה.',
  'WORD_UPDATED' => 'המילה עודכנה בהצלחה.',
  'ACP_RANKS_EXPLAIN' => 'בעזרת טופס זה תוכל להוסיף, לשנות ולמחוק דרגות. כמו כן תוכל להגדיר דרגות מיוחדות עבור משתמשים מסוימים.',
  'ADD_RANK' => 'הוסף דרגה חדשה',
  'MUST_SELECT_RANK' => 'אתה מוכרח לבחור דרגה',
  'NO_ASSIGNED_RANK' => 'לא צוינה דרגה מיוחדת.',
  'NO_RANK_TITLE' => 'לא ציינת כותרת לדרגה.',
  'NO_UPDATE_RANKS' => 'הדרגה נמחקה בהצלחה. אך חשבונות המשתמש אשר משתמשים בדרגה זאת לא עודכנו. אתה תיאלץ לעדכן להם את הדרגה באופן ידני.',
  'RANK_ADDED' => 'הדרגה נוספה בהצלחה.',
  'RANK_IMAGE' => 'תמונת דרגה',
  'RANK_IMAGE_EXPLAIN' => 'השתמש בהגדרה זאת על מנת להוסיף תמונה קטנה עבור הדרגה, הנתיב מתחיל מתיקיית phpBB הראשית.',
  'RANK_IMAGE_IN_USE' => '(בשימוש)',
  'RANK_MINIMUM' => 'מינימום הודעות',
  'RANK_REMOVED' => 'הדרגה נמחקה בהצלחה.',
  'RANK_SPECIAL' => 'הגדר דרגה מיוחדת',
  'RANK_TITLE' => 'כותרת הדרגה',
  'RANK_UPDATED' => 'הדרגה עודכנה בהצלחה',
  'ACP_DISALLOW_EXPLAIN' => 'כאן אתה יכול לנהל את שמות המשתמשים אשר לא ניתנים לשימוש. שמות משתמשים לא מורשים יכולים לקבל את הסימן הכולל *.',
  'ADD_DISALLOW_EXPLAIN' => 'אתה יכול לחסום שם משתמש בעזרת הסימן הכולל * כדי להתאים לכל תו.',
  'ADD_DISALLOW_TITLE' => 'הוסף שם משתמש לא מורשה',
  'DELETE_DISALLOW_EXPLAIN' => 'אתה יכול למחוק שם משתמש לא מורשה על ידי בחירתו מהרשימה ולחיצה על שלח.',
  'DELETE_DISALLOW_TITLE' => 'מחק שם משתמש לא מורשה',
  'DISALLOWED_ALREADY' => 'השם שהזנת כבר חסום.',
  'DISALLOWED_DELETED' => 'השם המשתמש הלא מורשה נמחק בהצלחה.',
  'DISALLOW_SUCCESSFUL' => 'השם המשתמש הלא מורשה נוסף בהצלחה.',
  'NO_DISALLOWED' => 'אין שמות משתמש לא מורשים',
  'NO_USERNAME_SPECIFIED' => 'לא בחרת שם משתמש לעבוד איתו.',
  'ACP_REASONS_EXPLAIN' => 'כאן ניתן לנהל את הסיבות המשמשות בדיווחים ובהודעות דחייה בעת פסילת הודעות. קיימת סיבת ברירת מחדל אחת (מסומנת ב־*) שאינך יכול להסיר; סיבה זו משמשת בדרך כלל להודעות מותאמות אישית כאשר אף סיבה אחרת אינה מתאימה.',
  'ADD_NEW_REASON' => 'הוסף סיבה חדשה',
  'AVAILABLE_TITLES' => 'פנוי למיקום כותרות הסיבות',
  'IS_NOT_TRANSLATED' => 'מוקמה <strong>לא</strong> הסיבה',
  'IS_NOT_TRANSLATED_EXPLAIN' => 'מוקמה. אם אתה רוצה לספק את טופס המיקום, ציין את המפתח העדכני מקובץ השפות תחת סיבות לדיווח. <strong>לא</strong> הסיבה',
  'IS_TRANSLATED' => 'הסיבה מוקמה.',
  'IS_TRANSLATED_EXPLAIN' => 'הסיבה מוקמה. אם הכותרת שציינת כאן מופיעה בקבצי השפות, הטופס המקומי של הכותרת והתיאור יהיו בשימוש.',
  'NO_REASON' => 'הסיבה לא נמצאה.',
  'NO_REASON_INFO' => 'אתה מוכרח לציין את הכותרת ואת התיאור של סיבה זאת.',
  'NO_REMOVE_DEFAULT_REASON' => 'אינך יכול למחוק את הסיבה ברירת מחדל ”אחר“.',
  'REASON_ADD' => 'הוסף סיבה לדיווח',
  'REASON_ADDED' => 'נוספה סיבה לדיווח בהצלחה.',
  'REASON_ALREADY_EXIST' => 'סיבה עם כותרת זהה כבר בשימוש,אנא ציין כותרת אחרת.',
  'REASON_DESCRIPTION' => 'תיאור הדיווח',
  'REASON_DESC_TRANSLATED' => 'התיאור המוצג של הסיבה',
  'REASON_EDIT' => 'ערוך סיבת דיווח',
  'REASON_EDIT_EXPLAIN' => 'כאן אתה יכול להוסיף או לערוך סיבה. אם הסיבה מתורגמת בגרסה מקומית אז התיאור נלקח משם ולא מהתיאור כאן.',
  'REASON_REMOVED' => 'סיבת הדיווח נמחקה בהצלחה.',
  'REASON_TITLE' => 'כותרת הסיבה',
  'REASON_TITLE_TRANSLATED' => 'כותרת הסיבה המוצגת',
  'REASON_UPDATED' => 'הסיבה עודכנה בהצלחה.',
  'USED_IN_REPORTS' => 'בשימוש בדיווחים',
));
