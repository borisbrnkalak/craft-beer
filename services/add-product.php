<?php

include_once '../inc/settings.php';
include_once '../db/models/Beer.php';
include_once '../db/Database.php';

$db = new Database();

if (isset($_POST['submit'])) {

    if (move_uploaded_file($_FILES['image']['tmp_name'], '../img/Products/' . basename($_FILES['image']['name']))) {
        if ($_POST['name'] == "") {
            failure("Missing name of the beer!");
        } else if ($_POST['price'] == "" || preg_match("/^[A-Za-z]+$/", $_POST['price'])) {
            failure("Empty price, or price contains letters!");
        } else if ($_POST['country'] == "") {
            failure("Missing country!");
        } else if ($_POST['text'] == "") {
            failure('Missing description!');
        } else if (!strpos($_FILES['image']['name'], 'png')) {
            failure('Bad type of file!');
        } else {

            Beer::insert($db, new Beer(null, $_POST['name'], $_POST['text'], $_POST['price'], $_POST['country'], $_FILES['image']['name']));
            success('Image succesfully added!');
        }
    } else {
        failure("Image does not add!");
    }
}

function success($message)
{
    $_SESSION['file-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}

function failure($message)
{
    $_SESSION['file-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}
