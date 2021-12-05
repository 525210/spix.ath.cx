<?php
require_once 'Db.php';
$db = new Db();

$db->token = password_hash('idscnin23344teytSDFVDRGVERVGERuybtx23445uwftnwef@_@_@_@_@_fbwey', PASSWORD_DEFAULT);

print_r($db->token);

$from    = '525210@gmail.com';
$subject = 'Account Activation Required';
$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
// Update the activation variable below
$activate_link = 'http://yourdomain.com/phplogin/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
$message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
mail($_POST['email'], $subject, $message, $headers);

