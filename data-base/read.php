<?php

include_once 'connection.php';

$querySelect = $link->query("SELECT * FROM TB_USERS ORDER BY Name");

while ($registers = $querySelect->fetch_assoc()):
    $id    = $registers['ID'];
    $name  = $registers['Name'];
    $email = $registers['Email'];
    $phone = $registers['Phone'];

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
    echo "<td>$phone</td>";
    echo "<td><a href='edit.php?id=$id'><i class='material-icons indigo-text'>edit</i></a></td>";
    echo "<td><a href='data-base/delete.php?id=$id'><i class='material-icons indigo-text'>delete</i></a></td>";
    echo "</tr>";

endwhile;
