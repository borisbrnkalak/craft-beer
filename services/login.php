<?php

include_once '../inc/settings.php';
include_once '../db/models/User.php';
include_once '../db/Database.php';

$db = new Database();

if (isset($_POST['submit-btn'])) {
    $user = User::checkIfContains($db, $_POST['login-email']);
    if (is_null($user)) {
        failure("This user does not exist!");
    }

    if (password_verify($_POST['login-password'], $user->getPassword())) {
        success($user->getId(), "User succesfully logged in!");
    }
    failure("Bad password!");
}

function success($userId, $message)
{
    $_SESSION['login-result'] = $message;
    setcookie("is-logged", $userId, time() + (86400 * 30), "/");
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}

function failure($message)
{
    $_SESSION['login-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}
