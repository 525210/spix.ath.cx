<?php
//session_start();
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
                    <h2>הרשם וקבל חבילת הודעות חינם</h2>
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
        <div class="col-sm-12">
            <div class='card text-center' style="height: 23rem;">
                <div class='card-header'><h4>הרשם וקבל חבילת הודעות חינם!</h4></div>
                <div class='card-body'>

                    <p class='card-text'>
                        <?php
                        $db->printRegForm();
//                        $db->setCookie();
                        ?>
                    </p>

                </div>

            </div>
        </div>

    </div>
    <!--</div>-->


<?php


require 'footer.php';