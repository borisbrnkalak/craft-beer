<?php

include_once '../inc/settings.php';
include_once '../db/models/Employee.php';
include_once '../db/Database.php';

$db = new Database();

if (isset($_POST['submit-emp'])) {

    if (move_uploaded_file($_FILES['image']['tmp_name'], '../img/Employees/' . basename($_FILES['image']['name']))) {
        if ($_POST['name'] == "") {
            failure("Missing name of the employee!");
        } else if ($_POST['text'] == "") {
            failure('Missing description!');
        } else if (!strpos($_FILES['image']['name'], 'jpg')) {
            failure('Bad type of file!');
        } else {

            Employee::insert($db, new Employee(null, $_POST['name'], $_POST['text'], $_FILES['image']['name']));
            success('Image succesfully added!');
        }
    } else {
        failure("Image does not add!");
    }
}

function success($message)
{
    $_SESSION['employee-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}

function failure($message)
{
    $_SESSION['employee-result'] = $message;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();
}
