<?php

include_once '../inc/settings.php';
include_once '../db/models/User.php';
include_once '../db/Database.php';

$db = new Database();

if (isset($_POST['register-btn'])) {
    $user = User::checkIfContains($db, $_POST['register-email']);
    if (is_null($user)) {
        if ($_POST['register-password'] == $_POST['register-confirm-password'] && $_POST['register-email'] != "" && $_POST['register-password'] != "" && $_POST['register-name'] != "" && strlen($_POST['register-password']) >= 6) {

            success("account succesfully created!", $db);
        } else if ($_POST['register-name'] == "") {

            failure("Empty name!");
        } else if ($_POST['register-email'] == "" || !strpos($_POST['register-email'], "@")) {
            failure("Empty or bad email!");
        } else if ($_POST['register-password'] == "") {
            failure("Empty password!");
        } else if ($_POST['register-password'] != $_POST['register-confirm-password']) {
            failure("Passwords does not match!");
        } else if (strlen($_POST['register-password']) < 6) {
            failure('Password is too short!');
        }
    }
    failure("account already exists!");
}


function success($message, $database)
{
    $_SESSION['register-result'] = $message;

    User::insert($database, new User(null, $_POST['register-email'], $_POST['register-password'], $_POST['register-name'], false));
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}

function failure($message)
{
    $_SESSION['register-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}
