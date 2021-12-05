<?php
session_start();
//require 'Db.php';
//$db = new Db();
require 'head.php';

?>

<div class="container-fluid">

    <!--    ==================================================================================================================-->

    <div class="row">
        <div class="col-md" style="background-image: url('/home/bg-main.png');"></div>
        <div class="col-md" style="background-image: url('/home/bg-main.png');">
            <?php require 'carousel.php'; ?>
        </div>
        <div class="col-md" style="background-color: #FEDE27; padding-right: 0;">
            <img src="/home/megaphone-logo-home-page.png">
        </div>
        <div class="col-md" style="background-color: #FEDE27"></div>
    </div>

    <div class="container">
<!--        <section class="text-center wow fadeIn" data-wow-delay="0.3s">-->
            <hr>
            <!--Section heading-->
<!--            <h1 class="font-weight-bold text-center h1 my-5">It speaks for you</h1>-->

            <!--Grid row-->

            <div class="row mt-4">
                <div class="col-sm-4">
                    <div class='card text-center' style="height: 23rem;">
                        <div class='card-header'><h4>למה spix</h4></div>
                        <div class='card-body'>
                            
                            <p class='card-text'>
                                מערכת spix מאפשרת לראשונה לכל אדם להפיץ מסרים קוליים לקבוצות נמענים בפשטות ויעילות. כבר בדקות הקרובות תוכל לשלוח מסרים ללא מגבלות, ולקבל משוב מדויק ומיידי על קליטתם.
                                spix הינה פשוטה לתפעול, ומיועדת לשימושם של ארגונים, חברות מסחריות, ואנשים פרטיים. בכל רגע נתון ומכל מקום תוכל להפיץ מסר קולי, לקבל אישורי השתתפות בכנסים ואירועים, לערוך סקרים, ועוד. עכשיו זה פשוט לדבר לכולם.
                            </p>

                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class='card text-center' style="height: 23rem;">
                        <div class='card-header'><h4>בפעולה spix</h4></div>
                        <div class='card-body'>
                            
                            <p class='card-text'>
                                צירת הודעות
                                בפעולה פשוטה בת כמה שניות תוכל להקליט הודעה דרך הטלפון, או לטעון למערכת קובץ קול מהמחשב.
                                        ניהול פרויקטים
                                        כל פעילותך במערכת מוצגת במקום אחד, המאפשר ניהול רשימות התפוצה ובקרה על תהליכי משלוח המסרים.
                            </p>

                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class='card text-center' style="height: 23rem;">
                        <div class='card-header'><h4>הרשם וקבל חבילת הודעות חינם!</h4></div>
                        <div class='card-body'>
                            
                            <p class='card-text'>
                                <?php $db->printRegForm();?>
                            </p>

                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--    ==================================================================================================================-->

    <!--    ==================================================================================================================-->


    <!--    ==================================================================================================================-->

</div>


<?php require_once 'footer.php'; ?>
