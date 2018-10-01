<?php

session_start();
include_once 'connection.php';

$name  = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_NUMBER_INT);

$querySelect = $link->query("SELECT Email FROM TB_USERS ORDER BY Email");
$array_emails = [];

while ($emails = $querySelect->fetch_assoc()):
    $existing_emails = $emails['Email'];
    array_push($array_emails, $existing_emails);
endwhile;

if (in_array($email, $array_emails)):
    $_SESSION['msg'] = "<p class='center deep-orange-text'>".'There is already a registered user with this email.'."</p>";
    header("Location:../");
else:
    $queryInsert = $link->query("INSERT INTO TB_USERS VALUES(default, '$name','$email','$phone')"); 
    $affected_rows = mysqli_affected_rows($link);

    if ($affected_rows > 0):
        $_SESSION['msg'] = "<p class='center teal-text darken-3-text'>".'Registration successfully Complete.'."</p>";
        header("Location:../");
    endif;
endif;
