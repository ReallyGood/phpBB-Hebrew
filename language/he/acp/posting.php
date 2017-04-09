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
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode -פונקציה מיוחדת של HTML, המאפשרת לצור שליטה על הצורה בה משהו מוצג. מעמוד זה אתה יכול להוסיף, למחוק וערוך BBCode מותאם אישית.',
	'ADD_BBCODE'				=> 'הוסף BBCode חדש',

	'BBCODE_DANGER'				=> 'ככל הנראה ה־BBCode אותו אתה מנסה להוסיף משתמש בתג {TEXT} בתוך תכונת HTML. קיימת אפשרות לאירוע אבטחה מסוג XSS. נסה להשתמש באפשרויות מגבילות יותר כמו {SIMPLETEXT} או {INTTEXT} במקום. המשך רק אם אתה מבין את הסיכון הקיים ואתה מבין שהשימוש ב־{TEXT} הוא בלתי נמנע.',
	'BBCODE_DANGER_PROCEED'		=> 'המשך\', //\'אני מבין את הסיכון',

	'BBCODE_ADDED'				=> 'BBCode נוסף בהצלחה.',
	'BBCODE_EDITED'				=> 'BBCode נערך בהצלחה.',
	'BBCODE_DELETED'			=> 'BBCode הוסר בהצלחה.',
	'BBCODE_NOT_EXIST'			=> 'בחרת BBCode שלא קיים.',
	'BBCODE_HELPLINE'			=> 'שורת עזר',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'שדה זה הוא הטקסט שיופיע במעבר עכבר על הBBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'הטקסט של שורת העזר',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'הטקסט של שורת העזר שהזנת ארוך מדי.',

	'BBCODE_INVALID_TAG_NAME'	=> 'השם שבחרת כבר קיים.',
	'BBCODE_INVALID'			=> 'הBBCode בנוי בצורה לא תקינה.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'התגית צריכה להכיל גם תג פותח וגם תג סוגר.',
	'BBCODE_TAG'				=> 'תגית',
	'BBCODE_TAG_TOO_LONG'		=> 'השם שבחרת לתגית ארוך מדי.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'ההגדרה שציינת לתגית ארוכה מדי, אנא כתוב הגדרה קצרה יותר.',
	'BBCODE_USAGE'				=> 'שימוש BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'כאן אתה יכול להגדיר איך להשתמש בBBCode. תחליף כל משנה על ידי הסימן המתאים (%sראה מתחת%s).',

	'EXAMPLE'						=> 'דוגמה:',
	'EXAMPLES'						=> 'דוגמאות:',

	'HTML_REPLACEMENT'				=> 'HTML תחליף',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'כאן הנך מגדיר את התחלופה בHTML למוגדר למעלה. אל תשכח להשתמש באותם הסימנים.',

	'TOKEN'					=> 'טוקן',
	'TOKENS'				=> 'טוקן',
	'TOKENS_EXPLAIN'		=> 'טוקנים הם שומרי מקום עבור הקלט של המשתמש. הקלט יחשב לתקני רק כאשר מתאים להגדרה. אם יש צורך, אתה יכול למספר אותם על ידי הוספת מספר בסיום המחרוזת שבין הסוגריים, לדוגמה: {TEXT1}, {TEXT2}.<br /><br />בתוך תחליף ה־HTML תוכל גם להשתמש בכל מחרוזת שקיימת בשפה בתוך תיקיית השפות במערכת, למשל: {L_<em>&lt;שםמחרוזת&gt;</em>} היכן ש־<em>&lt;שםמחרוזת&gt;</em> זה השם של המחרוזת המתורגמת שהנך מעוניין להוסיף. לדוגמה, {L_WRITE} יוצג כ“כתב” או על פי בחירת השפה של המשתמש.<br /><br /><strong>שים לב שהטוקנים הרשומים למטה בלבד ניתנים לשימוש בתוך תגי ה־BBCode המותאמים אישית.</strong>',
	'TOKEN_DEFINITION'		=> 'מה זה יכול להיות?',
	'TOO_MANY_BBCODES'		=> 'אינך יכול ליצור עוד BBCode, אנא מחק אחד או יותר על מנת ליצור BBCode חדש.',

	'tokens'	=>	array(
		'TEXT'			=> 'Any text, including foreign characters, numbers, etc… You should not use this token in HTML tags. Instead try to use IDENTIFIER, INTTEXT or SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Characters from the latin alphabet (A-Z), numbers, spaces, commas, dots, minus, plus, hyphen and underscore',
		'INTTEXT'		=> 'Unicode letter characters, numbers, spaces, commas, dots, minus, plus, hyphen, underscore and whitespaces.',
		'IDENTIFIER'	=> 'Characters from the latin alphabet (A-Z), numbers, hyphen and underscore',
		'NUMBER'		=> 'Any series of digits',
		'EMAIL'			=> 'A valid email address',
		'URL'			=> 'A valid URL using any protocol (http, ftp, etc… cannot be used for javascript exploits). If none is given, “http://” is prefixed to the string.',
		'LOCAL_URL'		=> 'A local URL. The URL must be relative to the topic page and cannot contain a server name or protocol, as links are prefixed with “%s”',
		'RELATIVE_URL'	=> 'A relative URL. You can use this to match parts of a URL, but be careful: a full URL is a valid relative URL. When you want to use relative URLs of your board, use the LOCAL_URL token.',
		'COLOR'			=> 'A HTML colour, can be either in the numeric form <samp>#FF1234</samp> or a <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS colour keyword</a> such as <samp>fuchsia</samp> or <samp>InactiveBorder</samp>',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'From this page you can add, remove and edit the icons users may add to their topics or posts. These icons are generally displayed next to topic titles on the forum listing, or the post subjects in topic listings. You can also install and create new packages of icons.',
	'ACP_SMILIES_EXPLAIN'	=> 'הסמיילים או ההבעות הם תמונות קטנות, מונפשות לפעמים אשר בשימוש להעברת הבעה או הרגשה. מעמוד זה אתה יכול להוסיף, להסיר ולערוך את הסמיילים אשר המשתמשים יכולים להשתמש בהם בהודעות וההודעות הפרטיות שלהם. אתה יכול גם להתקין וליצור חבילות סמיילים חדשות.',
	'ADD_SMILIES'			=> 'הוסף כמה סמיילים',
	'ADD_SMILEY_CODE'		=> 'הוסף קוד סמיילי נוסף',
	'ADD_ICONS'				=> 'הוסף כמה אייקונים',
	'AFTER_ICONS'			=> '%s אחרי',
	'AFTER_SMILIES'			=> '%s אחרי',

	'CODE'						=> 'קוד',
	'CURRENT_ICONS'				=> 'אייקונים בשימוש',
	'CURRENT_ICONS_EXPLAIN'		=> 'תבחר מה לבצע עם האייקונים שזה עתה הותקנו.',
	'CURRENT_SMILIES'			=> 'סמיילים בשימוש',
	'CURRENT_SMILIES_EXPLAIN'	=> 'תבחר מה לבצע עם הסמיילים שזה עתה הותקנו.',

	'DISPLAY_ON_POSTING'		=> 'הצג בעמוד שליחת הודעה',
	'DISPLAY_POSTING'			=> 'בעמוד השליחה',
	'DISPLAY_POSTING_NO'		=> 'לא בעמוד השליחה',

	'EDIT_ICONS'				=> 'ערוך אייקונים',
	'EDIT_SMILIES'				=> 'ערוך סמיילים',
	'EMOTION'					=> 'הבעה',
	'EXPORT_ICONS'				=> 'ייצא והורד את icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sבלחיצה על קישור זה, ההגדרות לאייקונים המותקנים יוכנסו לקובץ <samp>icons.pak</samp> אשר לאחר הורדתו ניתן לשימוש ליצירת קובץ <samp>.zip</samp> או <samp>.tgz</samp> המכיל את כל האייקונים וקובץ הגדרות <samp>icons.pak</samp> זה%s.',
	'EXPORT_SMILIES'			=> 'ייצא והורד את smiles.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sבלחיצה על קישור זה, ההגדרות לסמיילים המותקנים יוכנסו לקובץ <samp>smilies.pak</samp> אשר לאחר הורדתו ניתן לשימוש ליצירת קובץ <samp>.zip</samp> או <samp>.tgz</samp> המכיל את כל הסמיילים וקובץ הגדרות <samp>smilies.pak</samp> זה%s.',

	'FIRST'			=> 'ראשון',

	'ICONS_ADD'				=> 'הוסף אייקון חדש',
	'ICONS_ADDED'			=> array(
		0	=> 'No icons were added.',
		1	=> 'The icon has been added successfully.',
		2	=> 'The icons have been added successfully.',
	),
	'ICONS_CONFIG'			=> 'Icon configuration',
	'ICONS_DELETED'			=> 'The icon has been removed successfully.',
	'ICONS_EDIT'			=> 'Edit icon',
	'ICONS_EDITED'			=> array(
		0	=> 'No icons were updated.',
		1	=> 'The icon has been updated successfully.',
		2	=> 'The icons have been updated successfully.',
	),
	'ICONS_HEIGHT'			=> 'Icon height',
	'ICONS_IMAGE'			=> 'Icon image',
	'ICONS_IMPORTED'		=> 'The icons pack has been installed successfully.',
	'ICONS_IMPORT_SUCCESS'	=> 'The icons pack was imported successfully.',
	'ICONS_LOCATION'		=> 'Icon location',
	'ICONS_NOT_DISPLAYED'	=> 'The following icons are not displayed on the posting page',
	'ICONS_ORDER'			=> 'Icon order',
	'ICONS_URL'				=> 'Icon image file',
	'ICONS_WIDTH'			=> 'Icon width',
	'IMPORT_ICONS'			=> 'Install icons package',
	'IMPORT_SMILIES'		=> 'Install smilies package',

	'KEEP_ALL'			=> 'Keep all',

	'MASS_ADD_SMILIES'	=> 'Add multiple smilies',

	'NO_ICONS_ADD'		=> 'There are no icons available for adding.',
	'NO_ICONS_EDIT'		=> 'There are no icons available for modifying.',
	'NO_ICONS_EXPORT'	=> 'You have no icons with which to create a package.',
	'NO_ICONS_PAK'		=> 'No icon packages found.',
	'NO_SMILIES_ADD'	=> 'There are no smilies available for adding.',
	'NO_SMILIES_EDIT'	=> 'There are no smilies available for modifying.',
	'NO_SMILIES_EXPORT'	=> 'You have no smilies with which to create a package.',
	'NO_SMILIES_PAK'	=> 'No smiley packages found.',

	'PAK_FILE_NOT_READABLE'		=> 'Could not read <samp>.pak</samp> file.',

	'REPLACE_MATCHES'	=> 'Replace matches',

	'SELECT_PACKAGE'			=> 'Select a package file',
	'SMILIES_ADD'				=> 'Add a new smiley',
	'SMILIES_ADDED'				=> array(
		0	=> 'No smilies were added.',
		1	=> 'The smiley has been added successfully.',
		2	=> 'The smilies have been added successfully.',
	),
	'SMILIES_CODE'				=> 'Smiley code',
	'SMILIES_CONFIG'			=> 'Smiley configuration',
	'SMILIES_DELETED'			=> 'The smiley has been removed successfully.',
	'SMILIES_EDIT'				=> 'Edit smiley',
	'SMILIE_NO_CODE'			=> 'The smiley “%s” was ignored, as there was no code entered.',
	'SMILIE_NO_EMOTION'			=> 'The smiley “%s” was ignored, as there was no emotion entered.',
	'SMILIE_NO_FILE'			=> 'The smiley “%s” was ignored, as the file is missing.',
	'SMILIES_EDITED'			=> array(
		0	=> 'No smilies were updated.',
		1	=> 'The smiley has been updated successfully.',
		2	=> 'The smilies have been updated successfully.',
	),
	'SMILIES_EMOTION'			=> 'Emotion',
	'SMILIES_HEIGHT'			=> 'Smiley height',
	'SMILIES_IMAGE'				=> 'Smiley image',
	'SMILIES_IMPORTED'			=> 'The smilies pack has been installed successfully.',
	'SMILIES_IMPORT_SUCCESS'	=> 'The smilies pack was imported successfully.',
	'SMILIES_LOCATION'			=> 'Smiley location',
	'SMILIES_NOT_DISPLAYED'		=> 'The following smilies are not displayed on the posting page',
	'SMILIES_ORDER'				=> 'Smiley order',
	'SMILIES_URL'				=> 'Smiley image file',
	'SMILIES_WIDTH'				=> 'Smiley width',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Limit of %d smiley reached.',
		2	=> 'Limit of %d smilies reached.',
	),

	'WRONG_PAK_TYPE'	=> 'The specified package does not contain the appropriate data.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'מלוח בקרה זה אתה יכול להוסיף, לערוך, ולהסיר מילים אשר יצונזרו אוטומטית בפורומים. אנשים עדיין יכולים להירשם עם שמות משתמשים המכילים מילים אלו. סימנים כוללים (*) מתקבלים בשדה המילה.',
	'ADD_WORD'				=> 'הוסף מילה חדשה',

	'EDIT_WORD'		=> 'ערוך צנזור מילים.',
	'ENTER_WORD'	=> 'אתה מוכרח לכתוב מילה ואת התחליף שלה.',

	'NO_WORD'	=> 'לא נבחרה מילה לשינוי.',

	'REPLACEMENT'	=> 'תחליף',

	'UPDATE_WORD'	=> 'עדכן צנזור מילים',

	'WORD'				=> 'מילה',
	'WORD_ADDED'		=> 'מילת הצנזור נוספה בהצלחה.',
	'WORD_REMOVED'		=> 'המילה שנבחרה הוסרה בהצלחה.',
	'WORD_UPDATED'		=> 'המילה עודכנה בהצלחה.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'בעזרת טופס זה תוכל להוסיף, לשנות ולמחוק דרגות. כמו כן תוכל להגדיר דרגות מיוחדות עבור משתמשים מסוימים.',
	'ADD_RANK'				=> 'הוסף דרגה חדשה',

	'MUST_SELECT_RANK'		=> 'אתה מוכרח לבחור דרגה',

	'NO_ASSIGNED_RANK'		=> 'לא צוינה דרגה מיוחדת.',
	'NO_RANK_TITLE'			=> 'לא ציינת כותרת לדרגה.',
	'NO_UPDATE_RANKS'		=> 'הדרגה נמחקה בהצלחה. אך חשבונות המשתמש אשר משתמשים בדרגה זאת לא עודכנו. אתה תיאלץ לעדכן להם את הדרגה באופן ידני.',

	'RANK_ADDED'			=> 'הדרגה נוספה בהצלחה.',
	'RANK_IMAGE'			=> 'תמונת דרגה',
	'RANK_IMAGE_EXPLAIN'	=> 'השתמש בהגדרה זאת על מנת להוסיף תמונה קטנה עבור הדרגה, הנתיב מתחיל מתיקיית phpBB הראשית.',
	'RANK_IMAGE_IN_USE'		=> '(בשימוש)',
	'RANK_MINIMUM'			=> 'מינימום הודעות',
	'RANK_REMOVED'			=> 'הדרגה נמחקה בהצלחה.',
	'RANK_SPECIAL'			=> 'הגדר דרגה מיוחדת',
	'RANK_TITLE'			=> 'כותרת הדרגה',
	'RANK_UPDATED'			=> 'הדרגה עודכנה בהצלחה',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'כאן אתה יכול לנהל את שמות המשתמשים אשר לא ניתנים לשימוש. שמות משתמשים לא מורשים יכולים לקבל את הסימן הכולל *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'אתה יכול לחסום שם משתמש בעזרת הסימן הכולל * כדי להתאים לכל תו.',
	'ADD_DISALLOW_TITLE'	=> 'הוסף שם משתמש לא מורשה',

	'DELETE_DISALLOW_EXPLAIN'	=> 'אתה יכול למחוק שם משתמש לא מורשה על ידי בחירתו מהרשימה ולחיצה על שלח.',
	'DELETE_DISALLOW_TITLE'		=> 'מחק שם משתמש לא מורשה',
	'DISALLOWED_ALREADY'		=> 'השם שהזנת כבר חסום.',
	'DISALLOWED_DELETED'		=> 'השם המשתמש הלא מורשה נמחק בהצלחה.',
	'DISALLOW_SUCCESSFUL'		=> 'השם המשתמש הלא מורשה נוסף בהצלחה.',

	'NO_DISALLOWED'				=> 'אין שמות משתמש לא מורשים',
	'NO_USERNAME_SPECIFIED'		=> 'לא בחרת שם משתמש לעבוד איתו.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Here you can manage the reasons used in reports and denial messages when disapproving posts. There is one default reason (marked with a *) you are not able to remove, this reason is normally used for custom messages if no reason fits.',
	'ADD_NEW_REASON'		=> 'הוסף סיבה חדשה',
	'AVAILABLE_TITLES'		=> 'פנוי למיקום כותרות הסיבות',

	'IS_NOT_TRANSLATED'			=> 'מוקמה <strong>לא</strong> הסיבה',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'מוקמה. אם אתה רוצה לספק את טופס המיקום, ציין את המפתח העדכני מקובץ השפות תחת סיבות לדיווח. <strong>לא</strong> הסיבה',
	'IS_TRANSLATED'				=> 'הסיבה מוקמה.',
	'IS_TRANSLATED_EXPLAIN'		=> 'הסיבה מוקמה. אם הכותרת שציינת כאן מופיעה בקבצי השפות, הטופס המקומי של הכותרת והתיאור יהיו בשימוש.',

	'NO_REASON'					=> 'הסיבה לא נמצאה.',
	'NO_REASON_INFO'			=> 'אתה מוכרח לציין את הכותרת ואת התיאור של סיבה זאת.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'אינך יכול למחוק את הסיבה ברירת מחדל ”אחר“.',

	'REASON_ADD'				=> 'הוסף סיבה לדיווח',
	'REASON_ADDED'				=> 'נוספה סיבה לדיווח בהצלחה.',
	'REASON_ALREADY_EXIST'		=> 'סיבה עם כותרת זהה כבר בשימוש,אנא ציין כותרת אחרת.',
	'REASON_DESCRIPTION'		=> 'תיאור הדיווח',
	'REASON_DESC_TRANSLATED'	=> 'התיאור המוצג של הסיבה',
	'REASON_EDIT'				=> 'ערוך סיבת דיווח',
	'REASON_EDIT_EXPLAIN'		=> 'כאן אתה יכול להוסיף או לערוך סיבה. אם הסיבה מתורגמת בגרסה מקומית אז התיאור נלקח משם ולא מהתיאור כאן.',
	'REASON_REMOVED'			=> 'סיבת הדיווח נמחקה בהצלחה.',
	'REASON_TITLE'				=> 'כותרת הסיבה',
	'REASON_TITLE_TRANSLATED'	=> 'כותרת הסיבה המוצגת',
	'REASON_UPDATED'			=> 'הסיבה עודכנה בהצלחה.',

	'USED_IN_REPORTS'		=> 'בשימוש בדיווחים',
));
