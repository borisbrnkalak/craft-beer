<?php
include_once "./inc/settings.php";
include_once "./db/Database.php";
include_once "./db/models/User.php";
include_once "./db/models/Beer.php";
//include_once "./inc/login-response.php";

$db = new Database();

if (isset($_COOKIE['is-logged'])) {
  $user = User::getByID($db, $_COOKIE['is-logged']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/leaflet.css">
</head>

<body>

  <?php
  if (isset($_SESSION['login-result'])) {
    echo '<script>window.addEventListener("DOMContentLoaded", () => {
            openModal();
          });</script>';
  }

  if (isset($_SESSION['register-result'])) {
    echo
    '<script>window.addEventListener("DOMContentLoaded", () => {
            openRegister();
          });</script>';
  }
  ?>