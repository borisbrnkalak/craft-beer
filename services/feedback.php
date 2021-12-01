<?php

include_once '../inc/settings.php';
include_once '../db/models/Feedback.php';
include_once '../db/Database.php';
include_once '../db/models/User.php';

$db = new Database();

$admin = User::getByID($db, $_COOKIE['is-logged']);

if (isset($_POST['feedback-submit'])) {
    Feedback::insert($db, new Feedback(null, $_POST['feedback-topic'], $_POST['feedback-message'], $_COOKIE['is-logged']));
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}

if (isset($_GET['delete'])) {
    $feed = Feedback::getByID($db, $_GET['feedback_id']);

    if (is_null($feed)) return;

    if ($_COOKIE['is-logged'] == $feed->getUserId() || ($_COOKIE['is-logged'] && $admin->getIsAdmin() == 1)) {

        Feedback::delete($db, $feed->getId());
    }
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
