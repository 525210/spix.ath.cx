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
                <h2>לוח הבקרה של המשתמש</h2>
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

<div class="position-absolute top-50 start-50 translate-middle">

    <div class="card text-center" style="width: 25rem;">

        <div class="card-footer">

            <?php
            if (isset($_COOKIE['token']))
            {
                $test = $db->checkingTheLoggedInUser($_COOKIE['token']);
                $db->debug($test);
                $db->debug($_SESSION);
                echo "אתה מורשה בהצלחה במערכת";
            }
            else
            {
                echo "<script>document.location.href='login.php'</script>";
            }

            ?>

        </div>
    </div>

</div>



<?php require_once 'footer.php';?>
