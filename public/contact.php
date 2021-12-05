<?php require 'head.php';?>

<form method="post">
<div class="container">
    <h2 class="font-weight-bold text-center h1 my-5">צור קשר</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="md-form">
                <input type="text" name="yor_name" class="form-control">
                <label for="contact-name" class="">הזן את שמך</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="md-form">
                <input type="email" name="email" class="form-control">
                <label for="contact-name" class="">הכנס את האימייל שלך</label>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="md-form">
                <textarea type="text" name="message" class="md-textarea form-control" rows="3"></textarea>
                <label for="contact-message">הזן את טקסט ההודעה שלך</label>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="md-form">
                <button type="submit" class="btn btn-warning">שלח הודעה</button>
            </div>
        </div>
    </div>
</div>
</form>

<?php

if (isset($_POST['yor_name']))
{
    $yor_name = $db->cleanInputData($_POST['yor_name']);
    $email = $db->cleanInputData($_POST['email']);
    $message = $db->cleanInputData($_POST['message']);
    mail('525210@gmail.com', 'דואר מהאתר', 'שם - ' . $yor_name . ' ' . 'כתובת אימייל - ' . $email . ' ' .'הודעה - ' . $message);
}

require 'footer.php';