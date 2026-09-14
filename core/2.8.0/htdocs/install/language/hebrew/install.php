<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: he
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'הצג/הסתר טקסט עזרה');
// License
//define('LICENSE_NOT_WRITEABLE', 'קובץ הרישיון "%s" אינו ניתן לכתיבה!');
//define('LICENSE_IS_WRITEABLE', '%s הרישיון ניתן לכתיבה.');
// Configuration check page
define('SERVER_API', 'API שרת');
define('PHP_EXTENSION', 'סיומת %s');
define('CHAR_ENCODING', 'קידוד תווים');
define('XML_PARSING', 'ניתוח XML');
define('REQUIREMENTS', 'דרישות');
define('_PHP_VERSION', 'גרסת PHP');
define('RECOMMENDED_SETTINGS', 'הגדרות מומלצות');
define('RECOMMENDED_EXTENSIONS', 'תוספים מומלצים');
define('SETTING_NAME', 'שם ההגדרה');
define('RECOMMENDED', 'מומלץ');
define('CURRENT', 'נוכחי');
define('RECOMMENDED_EXTENSIONS_MSG', 'הרחבות אלו אינן נדרשות לשימוש רגיל, אך עשויות להיות נחוצות כדי לחקור
 כמה תכונות ספציפיות (כמו תמיכה בריבוי שפות או RSS). לפיכך, מומלץ להתקין אותם.');
define('NONE', 'אף אחד');
define('SUCCESS', 'הצלחה');
define('WARNING', 'אזהרה');
define('FAILED', 'נכשל');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'אשף התקנת XOOPS');
define('LANGUAGE_SELECTION', 'בחירת שפה');
define('LANGUAGE_SELECTION_TITLE', 'בחר את השפה שלך');        // L128
define('INTRODUCTION', 'מבוא');
define('INTRODUCTION_TITLE', 'ברוך הבא ל-XOOPS Installation Wizard');        // L0
define('CONFIGURATION_CHECK', 'בדיקת הגדרות');
define('CONFIGURATION_CHECK_TITLE', 'בדיקת תצורת השרת שלך');
define('PATHS_SETTINGS', 'הגדרות נתיבים');
define('PATHS_SETTINGS_TITLE', 'הגדרות נתיבים');
define('DATABASE_CONNECTION', 'חיבור לבסיס נתונים');
define('DATABASE_CONNECTION_TITLE', 'חיבור לבסיס נתונים');
define('DATABASE_CONFIG', 'תצורת בסיס נתונים');
define('DATABASE_CONFIG_TITLE', 'תצורת בסיס נתונים');
define('CONFIG_SAVE', 'שמור הגדרות');
define('CONFIG_SAVE_TITLE', 'שמירת תצורת המערכת שלך');
define('TABLES_CREATION', 'יצירת טבלאות');
define('TABLES_CREATION_TITLE', 'יצירת טבלאות מסד הנתונים');
define('INITIAL_SETTINGS', 'הגדרות ראשוניות');
define('INITIAL_SETTINGS_TITLE', 'אנא הזן את ההגדרות הראשוניות שלך');
define('DATA_INSERTION', 'הכנסת נתונים');
define('DATA_INSERTION_TITLE', 'שמירת ההגדרות שלך במסד הנתונים');
define('WELCOME', 'ברוך הבא');
define('WELCOME_TITLE', 'ברוכים הבאים לאתר XOOPS שלך');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'נתיבים פיזיים של XOOPS');
define('XOOPS_URLS', 'מיקומי אינטרנט');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS מסמכים נתיב פיזי');
define('XOOPS_ROOT_PATH_HELP', 'נתיב פיזי לספריית המסמכים XOOPS (שהוגשו) ללא קו נטוי נגרר');
define('XOOPS_LIB_PATH_LABEL', 'ספריית הספרייה XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'ספריית קבצי נתונים XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'מיקום האתר (URL)'); // L56
define('XOOPS_URL_HELP', 'הראשי URL שישמש לגישה להתקנת XOOPS שלך'); // L58
define('LEGEND_CONNECTION', 'חיבור לשרת');
define('LEGEND_DATABASE', 'מסד נתונים'); // L51
define('DB_HOST_LABEL', 'שם המארח של השרת');    // L27
define('DB_HOST_HELP', 'שם מארח של שרת מסד הנתונים. אם אינך בטוח, <em>localhost</em> עובד ברוב המקרים'); // L67
define('DB_USER_LABEL', 'שם משתמש');    // L28
define('DB_USER_HELP', 'שם חשבון המשתמש שישמש לחיבור לשרת מסד הנתונים'); // L65
define('DB_PASS_LABEL', 'סיסמה');    // L52
define('DB_PASS_HELP', 'הסיסמה של חשבון המשתמש שלך במסד הנתונים'); // L68
define('DB_NAME_LABEL', 'שם בסיס הנתונים');    // L29
define('DB_NAME_HELP', 'שם מסד הנתונים במארח. המתקין ינסה ליצור את מסד הנתונים אם אינו קיים'); // L64
define('DB_CHARSET_LABEL', 'ערכת תווים של בסיס הנתונים');
define('DB_CHARSET_HELP', 'MySQL כולל תמיכה בערכת תווים המאפשרת לך לאחסן נתונים תוך שימוש במגוון ערכות תווים ולבצע השוואות לפי מגוון איסוף.');
define('DB_COLLATION_LABEL', 'איסוף בסיס הנתונים');
define('DB_COLLATION_HELP', 'איסוף הוא קבוצה של כללים להשוואת תווים בקבוצת תווים.');
define('DB_PREFIX_LABEL', 'קידומת טבלה');    // L30
define('DB_PREFIX_HELP', 'קידומת זו תתווסף לכל הטבלאות החדשות שנוצרו כדי למנוע התנגשויות שמות במסד הנתונים. אם אינך בטוח, פשוט שמור על ברירת המחדל'); // L63
define('DB_PCONNECT_LABEL', 'השתמש בחיבור מתמיד');    // L54
define('DB_PCONNECT_HELP', "ברירת המחדל היא 'לא'. השאר אותו ריק אם אתה לא בטוח"); // L69
define('DB_DATABASE_LABEL', 'מסד נתונים');
define('LEGEND_ADMIN_ACCOUNT', 'חשבון מנהל');
define('ADMIN_LOGIN_LABEL', 'כניסת מנהל'); // L37
define('ADMIN_EMAIL_LABEL', 'דוא"ל מנהל'); // L38
define('ADMIN_PASS_LABEL', 'סיסמת מנהל'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'אשר סיסמה'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'הקודם'); // L42
define('BUTTON_NEXT', 'המשך'); // L47
// Messages
define('XOOPS_FOUND', '%s');
define('CHECKING_PERMISSIONS', 'בודק הרשאות קובץ וספרייה...'); // L82
define('IS_NOT_WRITABLE', '%s אינו ניתן לכתיבה.'); // L83
define('IS_WRITABLE', '%s ניתן לכתיבה.'); // L84
define('XOOPS_PATH_FOUND', 'נמצא נתיב.');
//define('READY_CREATE_TABLES', 'לא זוהו טבלאות XOOPS.<br>המתקין מוכן כעת ליצור את טבלאות המערכת XOOPS.');
define('XOOPS_TABLES_FOUND', 'טבלאות המערכת XOOPS כבר קיימות במסד הנתונים שלך.'); // L131
define('XOOPS_TABLES_CREATED', 'נוצרו טבלאות מערכת XOOPS.');
//define('READY_INSERT_DATA', 'המתקין מוכן כעת להכניס נתונים ראשוניים למסד הנתונים שלך.');
//define('READY_SAVE_MAINFILE', 'המתקין מוכן כעת לשמור את ההגדרות שצוינו ב-<em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'ההגדרות נשמרו');
define('SAVED_MAINFILE_MSG', 'המתקין שמר את ההגדרות שצוינו ב-<em>mainfile.php</em> וב-<em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS נמצאו במסד הנתונים.');
define('DATA_INSERTED', 'הנתונים הראשוניים הוכנסו לבסיס הנתונים.');
// %s is database name
define('DATABASE_CREATED', 'מסד נתונים %s נוצר!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'לא ניתן ליצור טבלה %s'); // L118
define('TABLE_CREATED', 'נוצרה טבלה %s.'); // L45
define('ROWS_INSERTED', '%d ערכים הוכנסו לטבלה %s.'); // L119
define('ROWS_FAILED', 'נכשלה הכנסת %d ערכים לטבלה %s.'); // L120
define('TABLE_ALTERED', 'טבלה %s עודכנה.'); // L133
define('TABLE_NOT_ALTERED', 'נכשל עדכון הטבלה %s.'); // L134
define('TABLE_DROPPED', 'טבלה %s ירדה.'); // L163
define('TABLE_NOT_DROPPED', 'נכשלה מחיקת הטבלה %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'לא ניתן לגשת לתיקיה שצוינה. אנא ודא שהוא קיים וניתן לקריאה על ידי השרת.');
define('ERR_NO_XOOPS_FOUND', 'לא נמצאה התקנה של XOOPS בתיקייה שצוינה.');
define('ERR_INVALID_EMAIL', 'דוא"ל לא תקין'); // L73
define('ERR_REQUIRED', 'נדרשת מידע.'); // L41
define('ERR_PASSWORD_MATCH', 'שתי הסיסמאות אינן תואמות');
define('ERR_NEED_WRITE_ACCESS', 'יש לתת לשרת גישת כתיבה לקבצים ולתיקיות הבאים<br>(כלומר <em>chmod 775 directory_name</em> בשרת UNIX/LINUX)<br>אם הם אינם זמינים או לא נוצרו כהלכה, אנא צור באופן ידני והגדר הרשאות מתאימות.');
define('ERR_NO_DATABASE', 'לא ניתן ליצור מסד נתונים. פנה למנהל השרת לפרטים.'); // L31
define('ERR_NO_DBCONNECTION', 'לא ניתן להתחבר לשרת בסיס הנתונים.'); // L106
define('ERR_WRITING_CONSTANT', 'נכשל כתיבת קבוע %s.'); // L122
define('ERR_COPY_MAINFILE', 'לא ניתן להעתיק את קובץ ההפצה אל %s');
define('ERR_WRITE_MAINFILE', 'לא ניתן היה לכתוב לתוך %s. אנא בדוק את הרשאת הקובץ ונסה שוב.');
define('ERR_READ_MAINFILE', 'לא ניתן היה לפתוח את %s לקריאה');
define('ERR_INVALID_DBCHARSET', "ערכת התווים '%s' אינה נתמכת.");
define('ERR_INVALID_DBCOLLATION', "האיסוף '%s' אינו נתמך.");
define('ERR_CHARSET_NOT_SET', 'ערכת תווים ברירת מחדל אינה מוגדרת עבור מסד נתונים XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'תמיכה');
define('LOGIN', 'אימות');
define('LOGIN_TITLE', 'אימות');
define('USER_LOGIN', 'כניסת מנהל');
define('USERNAME', 'שם משתמש:');
define('PASSWORD', 'סיסמה :');
define('ICONV_CONVERSION', 'המרת ערכת תווים');
define('ZLIB_COMPRESSION', 'דחיסת Zlib');
define('IMAGE_FUNCTIONS', 'פונקציות תמונה');
define('IMAGE_METAS', 'מטא נתוני תמונה (exif)');
define('FILTER_FUNCTIONS', 'פונקציות סינון');
define('ADMIN_EXIST', 'חשבון המנהל כבר קיים.');
define('CONFIG_SITE', 'הגדרות האתר');
define('CONFIG_SITE_TITLE', 'הגדרות האתר');
define('MODULES', 'התקנת מודולים');
define('MODULES_TITLE', 'התקנת מודולים');
define('THEME', 'בחר ערכת נושא');
define('THEME_TITLE', 'בחר ערכת נושא ברירת מחדל');
define('INSTALLED_MODULES', 'המודולים הבאים הותקנו.');
define('NO_MODULES_FOUND', 'לא נמצאו מודולים.');
define('NO_INSTALLED_MODULES', 'לא הותקן שום מודול.');
define('THEME_NO_SCREENSHOT', 'לא נמצא צילום מסך');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'חוזק הסיסמה');
define('PASSWORD_DESC', 'הסיסמה לא הוזנה');
define('PASSWORD_GENERATOR', 'מחולל סיסמאות');
define('PASSWORD_GENERATE', 'צור');
define('PASSWORD_COPY', 'העתק');
define('PASSWORD_VERY_WEAK', 'חלש מאוד');
define('PASSWORD_WEAK', 'חלש');
define('PASSWORD_BETTER', 'טוב יותר');
define('PASSWORD_MEDIUM', 'בינוני');
define('PASSWORD_STRONG', 'חזק');
define('PASSWORD_STRONGEST', 'החזק ביותר');
//2.5.7
define('WRITTEN_LICENSE', 'כתב XOOPS %s מפתח רישיון: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'נסה שוב');
define('CHMOD_CHGRP_IGNORE', 'השתמש בכל זאת');
define('CHMOD_CHGRP_ERROR', 'ייתכן שהמתקין לא יוכל לכתוב את קובץ התצורה %1$s.<p>PHP כותב קבצים תחת משתמש %2$s וקבוצה %3$s.<p>הספרייה %4$s/ מכילה משתמש %5$s וקבוצה %6$s');
//2.5.9
define('CURL_HTTP', 'ספריית לקוח URL (cURL)');
define('XOOPS_COOKIE_DOMAIN_LABEL', 'דומיין עוגיות עבור האתר');
define('XOOPS_COOKIE_DOMAIN_HELP', 'דומיין להגדרת קובצי Cookie. יכול להיות ריק, המארח המלא מה-URL (www.example.com), או מהדומיין הרשום ללא תת-דומיינים (example.com) לשיתוף בין תת-דומיינים (www.example.com ו-blog.example.com.)');
define('INTL_SUPPORT', 'פונקציות בינאום');
define('XOOPS_SOURCE_CODE', 'XOOPS ב-GitHub');
define('XOOPS_INSTALLING', 'מתקין');
define('XOOPS_ERROR_ENCOUNTERED', 'שגיאה');
define('XOOPS_ERROR_SEE_BELOW', 'ראה להלן הודעות.');
define('MODULES_AVAILABLE', 'מודולים זמינים');
define('INSTALL_THIS_MODULE', 'הוסף %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'לא ניתן להעתיק את קובץ התצורה %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS אתר');
define('_WEBSITE_SLOGAN', 'פשוט השתמש בו!');
define('_WEBSITE_META_KEYWORDS', 'xoops, מסגרת יישום אינטרנט, cms, מערכת ניהול תוכן');
define('_WEBSITE_FOOTER', "מופעל על ידי XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>פרויקט XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'זכויות יוצרים © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS הוא סקריפט דינמי של פורטל קוד פתוח מבוסס מונחה עצמים שנכתב ב-PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'אופס');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
