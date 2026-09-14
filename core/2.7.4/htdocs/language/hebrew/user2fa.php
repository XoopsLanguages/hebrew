<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'שלב שני');
define('_US_2FA_PROMPT', 'הזינו את הקוד מאפליקציית האימות שלכם');
define('_US_2FA_CODE', 'קוד אימות');
define('_US_2FA_PROMPT_EMAIL', 'שלחנו קוד בן שש ספרות אל %s. הזינו אותו למטה.');
define('_US_2FA_CODE_EMAIL', 'הקוד מהאימייל שלכם');
define('_US_2FA_SEND', 'שליחת קוד חדש');
define('_US_2FA_SENT', 'קוד חדש נשלח אל %s. הוא תקף לעשר דקות.');
define('_US_2FA_SEND_WAIT', 'קוד נשלח לפני פחות מדקה. בדקו את תיבת הדואר הנכנס ואת תיקיית הספאם לפני שתבקשו קוד נוסף.');
define('_US_2FA_SEND_FAILED', 'לא ניתן היה לשלוח את הקוד כרגע. נסו שוב בעוד רגע, או השתמשו בקוד שחזור.');
define('_US_2FA_EMAIL_SUBJECT', '%s: קוד הכניסה שלכם');
define('_US_2FA_EMAIL_BODY', 'קוד הכניסה שלכם עבור %s הוא:

%s

הוא תקף למשך %d דקות ופועל פעם אחת בלבד. אם לא ביקשתם אותו, התעלמו מהודעה זו ושקלו לשנות את הסיסמה.');
define('_US_2FA_RECOVERY', 'השתמשו בקוד שחזור במקום זאת');
define('_US_2FA_RECOVERY_HINT', 'כל קוד שחזור פועל פעם אחת בלבד. שימוש באחד ישלח לכם אימייל.');
define('_US_2FA_SUBMIT', 'המשך');
define('_US_2FA_STARTAGAIN', 'הכניסה הזו פגה או הופרעה. אנא התחילו מחדש.');
define('_US_2FA_BACKTOLOGIN', 'חזרה לטופס הכניסה');
define('_US_2FA_BADCODE', 'הקוד הזה לא התקבל.');
define('_US_2FA_LOCKED', 'יותר מדי ניסיונות. השלב השני נעול לחמש עשרה דקות; קוד שחזור עדיין פועל.');
define('_US_2FA_UNAVAILABLE', 'השלב השני אינו זמין כרגע. קוד שחזור עדיין פועל, או פנו למנהל האתר.');
define('_US_2FA_REQUIRED', 'עבור חשבון זה מופעל אימות דו-שלבי. אנא היכנסו דרך דף הכניסה של האתר.');
define('_US_2FA_HTTP_LOGIN', 'חלון קופץ זה אינו יכול להשלים כניסה דו-שלבית דרך HTTP מכיוון שהסיסמה שלכם תישלח ללא הצפנה. השתמשו בכניסה של האתר במקום זאת, או בקשו מהמנהל להפעיל HTTPS עבור האתר.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: השלב השני ננעל');
define('_US_2FA_LOCKED_MAIL_BODY', 'הוזנו חמישה קודי שלב שני שגויים עבור החשבון שלכם ב-%s מ-%s. השלב השני נעול לחמש עשרה דקות. אם זה לא הייתם אתם, שנו את הסיסמה.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: קוד שחזור נעשה בו שימוש');
define('_US_2FA_RECOVERY_MAIL_BODY', 'קוד שחזור נעשה בו שימוש כדי להיכנס לחשבונכם ב-%s מ-%s. קוד זה כבר אינו פועל. אם זה לא הייתם אתם, שנו את הסיסמה ואפסו את קודי השחזור שלכם.');
