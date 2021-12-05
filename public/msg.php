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
                    <h2>הודעה</h2>
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
                        if (isset($_SESSION['msg']) != '')
                        {
                            echo "<div class='d-flex justify-content-center'><h2 class='text-center'>" . $_SESSION['msg'] . "</h2></div>";

                            session_unset();
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