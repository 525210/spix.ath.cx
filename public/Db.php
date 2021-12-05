<?php

class Db
{
    public $user;
    public $password;
    public $db;
    public $host;
    public $dsn;
    public $conn;
    public $email;
    public $pass;
    public $re_pass;
    public $error;
    public $token;
    public $firstName;
    public $lastName;
    public $phone;
    public $cookie_hash;


    public function __construct()
    {
        $this->user = 'root';
        $this->password = 'red-e525210';
        $this->db = 'spix.ath.cx';
        $this->host = 'localhost';
        $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $this->conn = new PDO($this->dsn, $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public function debug($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }


    public function printRegForm()
    {
        echo "<form method='post'>
                  <div class='md-form mt-3'>
                    <input type='email' name='email' class='form-control' placeholder='מייל:'>
                  </div>
                  <div class='md-form mt-3'>
                    <input type='password' name='pass' class='form-control' placeholder='סיסמא:'>
                 </div>
                  <div class='md-form mt-3'>
                    <input type='password' name='re_pass' class='form-control' placeholder='אימות סיסמה:'>
                  </div>
                  <div class='text-center'>
                    <button type='submit' class='btn btn-indigo btn-rounded mt-3'>הרשמה</button>
                  </div>
        </form>";

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->email = $this->cleanInputData($_POST['email']);
            $this->pass = $this->cleanInputData($_POST['pass']);
            $this->re_pass = $this->cleanInputData($_POST['re_pass']);
            self::checkPasswordLength();
        }
    }

    public function printResetPassForm()
    {
        echo "    <div class='position-absolute top-50 start-50 translate-middle'>
        <div class='card'>
            <div class='card-body'>
                <blockquote class='blockquote mb-0'>
                    
                    <form method='post'>
                  <div class='md-form mt-3'>
                    <input type='password' name='pass' class='form-control' placeholder='סיסמא:'>
                 </div>
                  <div class='md-form mt-3'>
                    <input type='password' name='re_pass' class='form-control' placeholder='אימות סיסמה:'>
                  </div>
                  <div class='text-center'>
                    <button type='submit' class='btn btn-indigo btn-rounded mt-3'>לאפס את הסיסמה</button>
                  </div>
        </form>
                            
                </blockquote>
            </div>
        </div>
    </div>
        ";

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $this->pass = $this->cleanInputData($_POST['pass']);
            $this->re_pass = $this->cleanInputData($_POST['re_pass']);
        }
        if($this->pass == '' || $this->re_pass == '')
        {
            $this->error = 'הכנס סיסמה';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        elseif(strlen($this->pass) <= 5)
        {
            $this->error = 'הסיסמה חייבת להיות יותר משישה תווים';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        elseif($this->pass != $this->re_pass)
        {
            $this->error = 'סיסמה לא תואמת';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        self::updatePassword();
    }

    private function checkPasswordLength()
    {
        if($this->email == '')
        {
            $this->error = 'הכנס מייל';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        elseif($this->pass == '' || $this->re_pass == '')
        {
            $this->error = 'הכנס סיסמה';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        elseif(strlen($this->pass) <= 5)
        {
            $this->error = 'הסיסמה חייבת להיות יותר משישה תווים';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        elseif($this->pass != $this->re_pass)
        {
            $this->error = 'סיסמה לא תואמת';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        elseif (self::checkAccessibleEmailAddress($this->email))
        {
            $this->error = 'כתובת דואר זו תפוסה';
            echo "<div class='alert alert-danger mt-2'>" . $this->error . "</div>";
            return;
        }
        elseif ($this->error == '')
        {
            self::sendRegMail();
//            self::setCookie($this->cookie_hash);
            echo "<script>document.location.href='message_page.php'</script>";
        }

    }

    public function checkingTheLoggedInUser($cookie_hash)
    {
        $sql = "SELECT `token` FROM `users` WHERE `token` = '$cookie_hash'";
        $query = $this->conn->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC)['token'];

    }


    public function cleanInputData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function logIn($email, $password)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $query = $this->conn->query($sql);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        if ($data == null)
        {
            $error = "משתמש עם כתובת " . $email . " לא נמצא";
            return $error;
        }
        if (password_verify($password, $data["password"]))
        {
            return true;
        }
        else
        {
            $password_error = "הזנת סיסמה שגויה";
            return $password_error;
        }
    }

    public function sendRegMail()
    {
        $this->token = password_hash($this->email, PASSWORD_DEFAULT);
        $this->pass = password_hash($this->pass, PASSWORD_DEFAULT);
        $this->cookie_hash = password_hash($this->email, PASSWORD_DEFAULT);
        $this->insertEmailToDb($this->email, $this->pass, $this->token, $this->cookie_hash);
        $from    = '525210@gmail.com';
        $subject = 'אישור דואר באתר spix.ath.cx';
        $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
        $activate_link = 'http://spix.ath.cx/activation.php?email=' . $_POST['email'] . '&token=' . $this->token;
        $message = '<p>:אנא אשר את כתובת הדוא"ל שלך באמצעות קישור זה</p><a href="' . $activate_link . '">' . $activate_link . '</a>';
        mail($this->email, $subject, $message, $headers);
        $_SESSION['message'] = $this->email;
    }

    public function getTokeFromDataBase($email)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $query = $this->conn->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function setCookie($token)
    {
        setcookie('token', $token, time() +3600 * 24 * 30, "/");
    }

    public function insertEmailToDb($email, $pass, $token, $cookie_hash)
    {
        $sql = "INSERT INTO `users` (`email`, `password`, `token`, `verified`, `cookie_hash`) VALUES (?, ?, ?, ?, ?)";
        $query = $this->conn->prepare($sql);
        $query->execute([$email, $pass, $token, $verified = 0, $cookie_hash]);
    }

    public function userActivation($email)
    {
        $sql = "UPDATE `users` SET `verified` = 1 WHERE `email` = '$email'";
        $query = $this->conn->prepare($sql);
        $query->execute();
    }

    public function updateUserDetails()
    {
        $sql = "UPDATE `users` SET `firstName` = '$this->firstName', `lastName` = '$this->lastName', `phone` = '$this->phone' WHERE `email` = '$this->email'";
        $query = $this->conn->prepare($sql);
        $query->execute();

    }

    public function getUserEmailAndToken($email)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $query = $this->conn->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function checkAccessibleEmailAddress($email)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $query = $this->conn->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function resetLoginPassword()
    {
        $sql = "SELECT * FROM `users` WHERE `email` = '$this->email'";
        $query = $this->conn->query($sql);
        $reset_data = $query->fetch(PDO::FETCH_ASSOC);
        $from    = '525210@gmail.com';
        $subject = 'אישור דואר באתר spix.ath.cx';
        $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
        $activate_link = 'http://spix.ath.cx/reset_password.php?email=' . $reset_data['email'] . '&token=' . $reset_data['token'];
        $message = '<p>:כדי לאפס את הסיסמה שלך עבור לקישור זה</p><a href="' . $activate_link . '">' . $activate_link . '</a>';
        mail($this->email, $subject, $message, $headers);
    }

    public function getFirstNameForButton($token)
    {
        $sql = "SELECT * FROM `users` WHERE `token` = '$token'";
        $query = $this->conn->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePassword()
    {
        $this->pass = password_hash($this->pass, PASSWORD_DEFAULT);
        $sql = "UPDATE `users` SET `password` = '$this->pass' WHERE `email` = '$this->email'";
        $query = $this->conn->prepare($sql);
        $query->execute();
    }
}
