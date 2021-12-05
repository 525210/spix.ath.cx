<?php
session_start();
//require 'Db.php';
require 'head.php';
//$db = new Db();
//$db->printHeaderMenu();
//if (isset($_POST[$db->firstName]))
//{
//    echo "jdjdjdjdjdjdjj";
//    $db->firstName = $db->cleanInputData($_POST['firstName']);
//    $db->lastName = $db->cleanInputData($_POST['lastName']);
//    $db->phone = $db->cleanInputData($_POST['phone']);
//    $db->email = $db->cleanInputData($_POST['email']);
//
//    print_r($this->firstName . ' ' . $this->lastName . ' ' . $this->phone . ' ' . $this->email);
//    $db->updateUserDetails();
//}
if ($_SESSION['email'] == '')
{
    echo "<script>document.location.href='register.php'</script>";
}

?>

<div class="container-fluid shadow-5 mt-1">
    <div class="row">
        <div class="col-3" style="background-image:url('/public/home/bg-main.png')"></div>
        <div class="col-3" style="background-image:url('/public/home/bg-main.png')">
            <div class="d-flex justify-content-start m-4">
                <h2>עדכון פרטי לקוח</h2>
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
    <div class='card' style="width: 450px">

        <div class='card-body'>
            <blockquote class='blockquote mb-0'>
                <p>
                    הרשמה
                </p>

                <?php

                if (isset($_SESSION['email']))
                {
                    echo "<form class='form-signin' method='post'>
                    <input type='text' name='firstName' class='form-control' placeholder='שם פרטי' required autofocus>
                    <br>
                    <input type='text' name='lastName' class='form-control' placeholder='שם משפחה' required autofocus>
                    <br>
                    <input type='tel' name='phone' class='form-control' placeholder='מספר טלפון' required autofocus>
                    <br>
                    <input type='email' name='email' class='form-control' value=' " . $_SESSION['email'] ."  ' required autofocus>
                    <br>
                    <button class='btn btn-warning' type='submit'>הרשמה</button>
                </form>";
                    echo "test";

                    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['phone']))
                    {
                        $db->firstName = $db->cleanInputData($_POST['firstName']);
                        $db->lastName = $db->cleanInputData($_POST['lastName']);
                        $db->phone = $db->cleanInputData($_POST['phone']);
                        $db->email = $db->cleanInputData($_POST['email']);
                        $db->updateUserDetails();
                        echo "<script>document.location.href='login.php'</script>";
                    }
                }
                ?>

            </blockquote>
        </div>
    </div>

</div>

<?php

require_once 'footer.php';


?>
