<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'אימות דו-שלבי');
define('_US_2FAM_PASSWORD', 'הסיסמה הנוכחית שלכם');
define('_US_2FAM_ENABLE', 'הגדרת מאמת');
define('_US_2FAM_CONFIRM', 'אישור המאמת');
define('_US_2FAM_CHOOSE', 'בחרו כיצד תרצו לקבל את השלב השני: אפליקציית אימות, או קוד באימייל.');
define('_US_2FAM_ENABLE_EMAIL', 'השתמשו בקודי אימייל');
define('_US_2FAM_EMAIL_HELP', 'קודי אימייל: קוד בן שש ספרות נשלח אל %s בכל פעם שאתם נכנסים. פחות מאובטח מאפליקציית אימות, מכיוון שכל מי שיכול לקרוא את האימייל שלכם יכול לעבור שלב זה.');
define('_US_2FAM_EMAIL_STEP', 'שלחנו קוד בן שש ספרות אל %s. הזינו אותו למטה לאישור. הוא תקף לעשר דקות.');
define('_US_2FAM_CONFIRM_EMAIL', 'אישור קודי אימייל');
define('_US_2FAM_CODE_HELP_EMAIL', 'קוד בן שש הספרות מהאימייל שזה עתה שלחנו לכם.');
define('_US_2FAM_ENABLED_EMAIL', 'קודי אימייל רשומים. כדי לבצע שינוי, הזינו את הסיסמה הנוכחית שלכם ואת הקוד שאנו שולחים לכם באימייל, או קוד שחזור. השתמשו בכפתור למטה כדי לבקש קוד.');
define('_US_2FAM_SEND', 'שלחו לי קוד');
define('_US_2FAM_MANUAL', 'מפתח הגדרה ידני');
define('_US_2FAM_SCAN', 'קוד QR עבור אפליקציית האימות שלכם');
define('_US_2FAM_STEP_APP', 'אתם זקוקים למאמת: כל אפליקציה או מנהל סיסמאות שיוצר קודים חד-פעמיים מבוססי-זמן (TOTP) יתאים, בטלפון או במחשב. אם עדיין אין לכם אחד, התקינו תחילה את זה שבחרתם (למשל Google Authenticator, Microsoft Authenticator, Aegis או FreeOTP).');
define('_US_2FAM_STEP_ADD', 'באפליקציה, הוסיפו חשבון: סרקו קוד QR זה, או בחרו בהזנה ידנית והקלידו את מפתח ההגדרה המוצג למטה.');
define('_US_2FAM_STEP_CODE', 'האפליקציה מציגה כעת קוד בן שש ספרות המשתנה כל 30 שניות. הקלידו את הקוד המוצג כרגע בשדה שלמטה ואשרו.');
define('_US_2FAM_CODE_HELP', 'קוד בן שש הספרות שאפליקציית האימות שלכם מציגה כרגע.');
define('_US_2FAM_HTTP', 'חיבור זה משתמש ב-HTTP רגיל. הסיסמה, ההפעלה, מפתח הגדרת המאמת וקודי השחזור שלכם עלולים להיות מיורטים. השתמשו ב-HTTPS בכל עת שניתן.');
define('_US_2FAM_CODES', 'שמרו את קודי השחזור האלה עכשיו');
define('_US_2FAM_CODES_HELP', 'כל קוד פועל פעם אחת בלבד. קודים אלה לא יוצגו שוב. שמרו אותם במקום בטוח, בנפרד מחשבון זה.');
define('_US_2FAM_DISABLE', 'השבתת אימות דו-שלבי');
define('_US_2FAM_REGENERATE', 'החלפת קודי שחזור');
define('_US_2FAM_ENABLED', 'מאמת רשום. הזינו את הסיסמה הנוכחית שלכם וקוד אימות או שחזור כדי לבצע שינוי.');
define('_US_2FAM_DISABLED', 'אימות דו-שלבי מושבת.');
define('_US_2FAM_PAUSED', 'האתר השהה את אתגרי האימות הדו-שלבי. הגורם שלכם נשמר, ואפשרות "זכור אותי" עדיין אינה זמינה עבור חשבונות רשומים.');
define('_US_2FAM_UNAVAILABLE', 'הגדרה או ניהול של אימות דו-שלבי אינם זמינים. אנא פנו למנהל האתר.');
define('_US_2FAM_STARTAGAIN', 'ההגדרה פגה או שהחשבון השתנה. הזינו את הסיסמה שלכם כדי להתחיל את ההגדרה מחדש.');
define('_US_2FAM_BADPASSWORD', 'הסיסמה הנוכחית שלכם לא התקבלה.');
define('_US_2FAM_RESET', 'איפוס האימות הדו-שלבי של משתמש זה');
define('_US_2FAM_STATUS_NONE', 'לא רשום');
define('_US_2FAM_STATUS_TOTP', 'אפליקציית אימות רשומה');
define('_US_2FAM_STATUS_EMAIL', 'קודי אימייל רשומים');
define('_US_2FAM_STATUS_UNAVAILABLE', 'הסטטוס אינו זמין');
define('_US_2FAM_RESET_HELP', 'פעולה זו משביתה את הגורם השני של המשתמש, בכל שיטה שנרשמה, ומבטלת את קודי השחזור ועוגיות "זכור אותי" שלו. הפעלות שכבר מחוברות נשארות פעילות. הזינו את סיסמת המנהל שלכם לאישור.');
define('_US_2FAM_RESET_DONE', 'האימות הדו-שלבי של המשתמש אופס.');
define('_US_2FAM_BACK', 'חזרה לחשבון');
define('_US_2FAM_DONE', 'אימות דו-שלבי מופעל.');
define('_US_2FAM_REPLACED', 'קודי השחזור הקודמים בוטלו.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: האימות הדו-שלבי השתנה');
define('_US_2FAM_NOTICE_BODY', 'האימות הדו-שלבי או קודי השחזור עבור החשבון שלכם ב-%s השתנו מ-%s. אם זה לא הייתם אתם, פנו למנהל האתר.');
define('_US_2FAM_RESET_SUBJECT', '%s: מנהל איפס את האימות הדו-שלבי שלכם');
define('_US_2FAM_RESET_BODY', 'מנהל השבית את הגורם השני שלכם וביטל את קודי השחזור שלו ב-%s מ-%s. הפעלות שכבר מחוברות נשארות פעילות. היכנסו והגדירו מחדש אימות דו-שלבי. פנו למנהל האתר אם זה לא היה צפוי.');
