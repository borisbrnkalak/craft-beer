<?php
if (isset($_POST['logout-btn'])) {
    setcookie("is-logged", "", time() - (86400 * 30), "/");
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}
