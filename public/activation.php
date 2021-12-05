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

                        $data = $db->getUserEmailAndToken($_GET['email']);
                        if ($data['token'] == $_GET['token'] && $data['email'] == $_GET['email'])
                        {
                            $db->userActivation($_GET['email']);
                            $_SESSION['email'] = $_GET['email'];
                            echo "<script>document.location.href='update_details.php'</script>";
                        }
                        else
                        {
                            echo "משהו השתבש";
                        }

                        ?>
                    </p>

                </blockquote>
            </div>
        </div>

    </div>
<?php require 'footer.php'; ?>