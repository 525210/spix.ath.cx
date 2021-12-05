<?php
session_start();
require 'head.php';

if (isset($_SERVER['REDIRECT_QUERY_STRING']) != '')
{
    if (isset($_GET['email']) != '' && isset($_GET['token']) != '')
    {
        echo "<div class='row d-flex justify-content-center'><div class='col-md-2 text-center'>";
        $db->email = $_GET['email'];
        $db->printResetPassForm();
        echo "</div></div>";
    }
}
else
{
    if (isset($_SERVER['HTTP_REFERER']) == 'http://spix.ath.cx/login.php')
    {
        echo "<div class='position-absolute top-50 start-50 translate-middle'>
<form method='post'>
    <div class='card text-center'>
        <div class='card-header'>לאפס את הסיסמה</div>
        <div class='card-body'>
            <h5 class='card-title'>כדי לאפס את הסיסמה שלך הזן את האימייל שלך</h5>
            <p class='card-text'>
                <input type='email' name='email' class='form-control' placeholder='הכנס מייל' required autofocus>
            </p>
            <button type='submit' class='btn btn-warning'>שלח אימייל</button>
        </div>
    </div>
</form>
</div>";

        if (isset($_POST['email']))
        {
            $db->email = $db->cleanInputData($_POST['email']);
            $db->debug($db->email);
            $db->resetLoginPassword();
            $_SESSION['msg'] = 'קישור לאיפוס הסיסמה נשלח לאימייל ' . $db->email;
            echo "<script>document.location.href='msg.php'</script>";

        }
    }
    else
    {
        echo "<script>document.location.href='login.php'</script>";
    }
}









require 'footer.php';