<?php
//
// _LANGCODE: he
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> הוא קוד פתוח
    מערכת פרסום אינטרנט מונחה עצמים כתובה ב-PHP. זה כלי אידיאלי עבור
    פיתוח אתרי קהילה דינמיים קטנים עד גדולים, פורטלים פנים-ארגוניים, פורטלים ארגוניים, בלוגים ועוד ועוד.
</p>
<p>
    XOOPS משוחרר תחת התנאים של
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU רישיון ציבורי כללי (GPL)</a>
    גרסה 2 ומעלה, והיא חופשית לשימוש ולשינוי.
    ניתן להפיץ מחדש כל עוד אתה מציית לתנאי ההפצה של GPL.
</p>
<h3>דרישות</h3>
<ul>
    <li>WWW שרת (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS וכו\')</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 ומעלה, מומלץ 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 ומעלה, מומלץ 8.4.5+ </li>
</ul>
<h3>לפני שאתה install</h3>
<ol>
    <li>הגדר את שרת WWW, PHP ושרת מסד נתונים כראוי.</li>
    <li>הכן מסד נתונים עבור האתר XOOPS שלך.</li>
    <li>הכן חשבון משתמש והענק למשתמש את הגישה למסד הנתונים.</li>
    <li>הפוך את הספריות והקבצים האלה לניתנים לכתיבה: %s</li>
    <li>משיקולי אבטחה, מומלץ מאוד להוציא את שתי הספריות למטה <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">שורש המסמך</a> ושנה את שמות התיקיות: %s</li>
    <li>צור (אם עדיין לא קיים) והפוך את הספריות האלה לניתנות לכתיבה: %s</li>
    <li>הפעל את קובץ ה-cookie ואת JavaScript של הדפדפן שלך.</li>
</ol>
<h3>הערות מיוחדות</h3>
<ol>
    <li>שילובי תוכנת מערכת מסוימים עשויים לדרוש תצורות נוספות כדי לעבוד
    עם XOOPS. אם אחד מהנושאים הללו חל על הסביבה שלך, אנא עיין במלואו
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    מדריך התקנה</a> למידע נוסף.<br><br>

    <li><strong>SELinux</strong> מערכות מאושרות (כגון <strong>CentOS</strong>  ו <strong>RHEL</strong>) עשוי לדרוש שינויים בהקשר האבטחה
    עבור ספריות XOOPS בנוסף להרשאות הקובץ הרגילות כדי להפוך ספריות לכתיבה.
    התייעץ עם תיעוד המערכת ו/או מנהל המערכת שלך.
</ol>
';

return $content;

