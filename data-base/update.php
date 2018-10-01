<?php
session_start();

include_once 'connection.php';
$id = $_SESSION['id'];

$name  = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate = $link->query("UPDATE TB_USERS SET Name ='$name', Email ='$email', Phone ='$phone' WHERE ID ='$id'");
$affected_rows = mysqli_affected_rows($link);

if ($affected_rows > 0):
    header("Location:../users.php");
endif;
