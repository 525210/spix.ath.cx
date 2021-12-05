<?php

session_start();
//require 'Db.php';
require 'head.php';
//$db = new Db();
//$db->printHeaderMenu();

?>

    <div class="container-fluid shadow-5 mt-1">
        <div class="row">
            <div class="col-3" style="background-image:url('/public/home/bg-main.png')"></div>
            <div class="col-3" style="background-image:url('/public/home/bg-main.png')">
                <div class="d-flex justify-content-start m-4">
                    <h2>נרשמת בהצלחה למערכת</h2>
                </div>
            </div>

            <div class="col-2" style="background-image:url('/public/home/bg-main.png')">
            </div>
            <div class="col-1" style="width: 40px; background-color: #FEDE27">
                <div class="d-flex justify-content-end"><img src="/public/home/megaphone-logo-account.png"></div>
            </div>

            <div class="col" style="width: 50%; background-color: #FEDE27">
            </div>
        </div>
    </div>


    <!--<div class="shadow-5 p-3 mb-5 bg-white rounded">-->
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class='card'>
            <!--            <div class='card-header'>Quote</div>-->
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>
                    <p>
                        <?php
//                        echo "<pre>";
//                        print_r($_SERVER);
                        if (isset($_SESSION['message']) != '')
                        {
                            echo "<div class='d-flex justify-content-center'><h2 class='text-center'>הרשמתך נקלטה</h2></div>
        <div class='d-flex justify-content-center'><p class='text-center'>לצורך הפעלת החשבון נא לחץ על הקישור שנשלח אליך לכתובת האימייל" . ' ' . $_SESSION['message'] . ' ' . "בו נרשמתה</p></div>
        ";
                        }

                        ?>
                    </p>

                </blockquote>
            </div>
        </div>

    </div>
    <!--</div>-->


<?php


require 'footer.php';