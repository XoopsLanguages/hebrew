<?php

// _LANGCODE: he
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 Migration');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'תוצאות סורק');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'הפעל סריקה');
define('_XOOPS_SMARTY4_SCANNER_END', 'צא מהסורק');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'כלל');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'התאמה');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'קובץ');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'תיקון ספירה');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'נדרשת סקירה ידנית');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'ניתן לתיקון אוטומטי: השם של כל משתנה של פריט ישונה על ידי הוספה של "_item" (למשל, "foo" הופך ל-"foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'לא ניתן לכתיבה');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'אפשרויות סריקה מחדש');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'לחץ על תיבת הסימון "כן" למטה ולאחר מכן לחץ על כפתור הפעל סריקה כדי לנסות לתקן באופן אוטומטי את כל הבעיות שנמצאו.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'סמן שלם');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'ספריית תבניות (אופציונלי)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'הרחבת תבנית (אופציונלי)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 מציג שינוי משמעותי: Smarty 4</h3>

<p>למרבה הצער, שינוי זה עלול לשבש כמה נושאים ישנים יותר. לכן, לפני שתמשיך בשדרוג, אנא ודא שאתה מבצע את השלבים הבאים:

<li>הפעל את preflight.php כדי לבדוק אם יש ערכות נושא מיושנות או תבניות מודול.</li>
<li>אם זוהו בעיות כלשהן, עיין במסמך זה כדי להבין את השינויים הדרושים לפני שתמשיך בשדרוג.</li>
<li>לאחר ביצוע השינויים הנדרשים, הפעל שוב את preflight.php.</li>
<li>אם אין בעיות נוספות, תוכל להתחיל בתהליך השדרוג.</li>
</p>
EOT,
);
