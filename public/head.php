<?php

require 'Db.php';
$db = new Db();

if (isset($_COOKIE['token']))
{
    $getFistName = $db->getFirstNameForButton($_COOKIE['token']);
}


?>
<!DOCTYPE html>
<html lang='he' dir='rtl'>

<head>
    <!--  Required meta tags always come first  -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Spix - מערכת אוטומטית לשליחת הודעות קוליות</title>

    <link
            href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'
            rel='stylesheet'
    />
    <link
            href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap'
            rel='stylesheet'
    />
    <link
            href='https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css'
            rel='stylesheet'
    />
    <style>

        .navbar {
            background-color: #6f7782;
        }
        footer.page-footer {
            background-color: #6f7782;
        }

    </style>
</head>
<body>
<header>
    <nav class='navbar navbar-expand-lg navbar-dark'>
        <div class='container'>
            <a class='navbar-brand' href='/'><strong>Spix.co.il</strong></a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
                    aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse'>
                <ul class='navbar-nav mr-auto'>
                    <?php //if ($_SERVER['PHP_SELF'] == '/public/index.php'){echo "active";}?>
                    <li class='nav-link'><a class='nav-link <?php if ($_SERVER['PHP_SELF'] == '/public/index.php'){echo "active";}?>' href='/'>דף הבית</a></li>
                    <li class='nav-link'><a class='nav-link <?php if ($_SERVER['PHP_SELF'] == '/public/dashboard.php'){echo "active";}?>' href='dashboard.php'>חשבון</a></li>
                    <li class='nav-link'><a class='nav-link <?php if ($_SERVER['PHP_SELF'] == '/public/about.php'){echo "active";}?>' href='about.php'>אודות</a></li>
                    <li class='nav-link'><a class='nav-link <?php if ($_SERVER['PHP_SELF'] == '/public/package_site.php'){echo "active";}?>' href='package_site.php'>מחירון</a></li>
                    <li class='nav-link'><a class='nav-link <?php if ($_SERVER['PHP_SELF'] == '/public/contact.php'){echo "active";}?>' href='contact.php'>יצירת קשר</a></li>
                </ul>
            </div><div class='d-flex align-items-center'>
<?php
            if (isset($_COOKIE['token']))
            {
                echo "
                <a href='login.php' type='button' class='btn btn-warning px-3 me-2' style='width: 140px';>
                שלום
                    " . $getFistName['firstName'] . "
                </a>
                <a href='exit.php' type='button' class='btn btn-warning me-3' style='width: 140px';>
                    יציאה
                </a>";
            }
            else
            {
                echo "
                <a href='login.php' type='button' class='btn btn-warning px-3 me-2' style='width: 140px';>
                    כניסת לקוחות
                </a>
                <a href='register.php' type='button' class='btn btn-warning me-3' style='width: 140px';>
               
                    הרשמה למערכת
                </a>";
            }

?>

            </div>
        </div>
    </nav>
</header>

