<?php
session_start();
//require 'Db.php';
require 'head.php';
//$db = new Db();
//$db->printHeaderMenu();
?>

    <div class="container-fluid">

        <!--    ==================================================================================================================-->

        <div class="row">
            <div class="col-md" style="background-image: url('/home/bg-main.png');">
                <div class="d-flex justify-content-end" style="margin-top: 70px;">
                <h3>אודות</h3>
                </div>
            </div>
            <div class="col-md" style="background-image: url('/home/bg-main.png');">
                <img src="/home/about-pic.png">

            </div>
            <div class="col-md" style="background-color: #FEDE27; padding-right: 0;">
                <img src="/home/megaphone-logo-inner.png">
            </div>
            <div class="col-md" style="background-color: #FEDE27"></div>
        </div>
    </div>

<div class="container-fluid my-5">
    <div class="row" style="margin-right: 80px;">


    <div class="col-md-2">
        <h4>צור הודעה קולית כעת</h4>
        <p>בפעולה פשוטה בת כמה שניות תוכל להקליט הודעה דרך הטלפון, או לטעון למערכת קובץ קול מהמחשב. המסר שלך מוכן לשיגור, אך לפני כן - המערכת תחייג אליך אוטומטית ותשמיע את המסר לצורך בקרה ואישור סופי.</p>
    </div>
    <div class="col-md-2">
        <div class="bg-image hover-overlay ripple">
            <img src="/home/spix-icon-home.png">
        </div>
    </div>
    <div class="col-md-2">
        <h4>החשבון שלי</h4>
        <p>באמצעות ממשק פשוט תוכל לנהל את בנק ההודעות שלך, ולברר את יתרת הקרדיט העומדת לרשותך במערכת. המערכת תעניק לך חיווי מדויק ומקיף על ההודעות שהגיעו ליעדן, ותמליץ למי מהנמענים כדאי לבצע שליחה חוזרת.</p>
    </div>
    <div class="col-md-2">
        <div class="bg-image hover-overlay ripple">
            <img src="/home/myaccount02.png">
        </div>
    </div>
    <div class="col-md-2">
        <h4>ניהול פרויקטים</h4>
        <p>כל פעילותך במערכת spix מוצגת במקום אחד, בצורה יעילה ונוחה. כאן שמורים כל הקבצים, רשימות התפוצה, והמידע שהכנסת למערכת. אין צורך בהעברת בסיסי נתונים לצד שלישי שינהל את הקמפיין – הכל נמצא ממש כאן.</p>
    </div>
    <div class="col-md-2">
        <div class="bg-image hover-overlay ripple">
            <img src="/home/projects0.png">
        </div>
    </div>



    </div>

    <div class="row" style="margin-right: 80px;">


        <div class="col-md-2">
            <h4>אנשי קשר</h4>
            <p>כאן מאוחסנות ומנוהלות כל רשימות התפוצה שלך. אם מדובר בהפצת מסרים פרסומיים - ישנה חשיבות מכרעת לבנייה נכונה של הרשימות והתאמת המסרים לפילוח המדויק. תוכל להזין מספרי נמענים, או לטעון רשימות תפוצה בקבצי Excel.</p>
        </div>
        <div class="col-md-2">
            <div class="bg-image hover-overlay ripple">
                <img src="/home/home_icon_04.png">
            </div>
        </div>
        <div class="col-md-2">
            <h4>מצב חשבון</h4>
            <p>מערכת spix מאפשרת לך שליטה מלאה בהוצאות הקמפיין והפצת ההודעות הקוליות. כאן תוכל לברר את מצב החשבון, ולהגדיל את הקרדיט באמצעות רכישה מאובטחת בכרטיסי אשראי, או דרך פלטפורמת PayPal.</p>
        </div>
        <div class="col-md-2">
            <div class="bg-image hover-overlay ripple">
                <img src="/home/accountstatus05.png">
            </div>
        </div>
        <div class="col-md-2">
            <h4>עדכון פרטים</h4>
            <p>הדף האישי שלך במערכת מאפשר לך לעדכן את פרטיך, כדי שנוכל להיות בקשר. בנוסף, נשמח לשמוע הערות או בקשות בנוגע למערכת spix.</p>
        </div>
        <div class="col-md-2">
            <div class="bg-image hover-overlay ripple">
                <img src="/home/updat0.png">
            </div>
        </div>



    </div>
</div>













<?php





require 'footer.php';