<?php

echo "<!DOCTYPE html>
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
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item active'>
                        <a class='nav-link' href='/'>דף הבית<span class='sr-only'>(current)</span></a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='dashboard.php'>חשבון</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='about.php'>אודות</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='package_site.php'>מחירון</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>יצירת קשר</a>
                    </li>
                </ul>
            </div>
            <div class='d-flex align-items-center'>
                <a href='login.php' type='button' class='btn btn-warning px-3 me-2'>
                    כניסת לקוחות
                </a>
                <a href='register.php' type='button' class='btn btn-warning me-3'>
                    הרשמה למערכת
                </a>
            </div>
        </div>
    </nav>
</header>
";