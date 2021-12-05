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
                <h2>כניסת לקוחות</h2>
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
    <form class="text-center border border-light p-5" method="post">
        <p class="h4 mb-4">התחברות לחשבון</p>
        <input type="email" name="email" class="form-control mb-4" placeholder="מייל" required autofocus>
        <input type="password" name="password" class="form-control mb-4" placeholder="סיסמא" required>
        <div class="d-flex justify-content-around">
            <div>
            </div>
            <div class="d-flex justify-content-around">
                <!-- Forgot password -->
                <a href="reset_password.php">שכחת סיסמא?</a>
            </div>
        </div>
        <!-- Sign in button -->
        <button class="btn btn-warning btn-block my-4" type="submit">כניסה</button>
        <!-- Register -->
        <p>עוד לא נרשמת ?
            <a href="register.php">הרשם עכשיו!!!</a>
        </p>
    </form>
        <div class="card-footer">

            <?php
            if (isset($_POST['email']))
            {
                $db->email = $db->cleanInputData($_POST['email']);
                $db->pass = $db->cleanInputData($_POST['password']);
                $error = $db->logIn($db->email, $db->pass);
                if ($error == 1)
                {
                    $token = $db->getTokeFromDataBase($db->email);
                    $db->setCookie($token['token']);
                    $_SESSION['email'] = $db->email;
                    echo "<script>document.location.href='dashboard.php'</script>";
                }
                else
                {
                    echo "<div class='alert alert-danger visible' role='alert'>" . $error . "</div>";
                }

            }
            ?>

        </div>
    </div>

        </div>



<?php require_once 'footer.php';?>
