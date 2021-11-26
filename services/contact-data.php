<?php
include_once "../inc/settings.php";
include_once "../db/Database.php";
include_once "../db/models/Contact.php";

$db = new Database();

$_SESSION['contact-result'] = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    if ($email != "" && $name != "" && $message != "") {

        Contact::insert($db, new Contact(null, $email, $name, $message));
        success('Message succesfully sent!');
    } else if ($email == "") {
        failure("Please fill your email!");
    } else if ($name == "") {
        failure('Please fill your name!');
    } else if ($message == "") {
        failure('Please fill your message!');
    }
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}


function success($message)
{
    $_SESSION['contact-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}

function failure($message)
{
    $_SESSION['contact-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}
