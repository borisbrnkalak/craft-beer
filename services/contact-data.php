<?php
include_once "../inc/settings.php";
include_once "../db/Database.php";
include_once "../db/models/Contact.php";

$db = new Database();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    Contact::insert($db, new Contact(null, $email, $name, $message));
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}
