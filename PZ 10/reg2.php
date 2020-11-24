<?php

require_once 'db.php';
$query = "INSERT INTO users(first_name, last_name, password, login, id_role)
VALUES(
'".$_POST['firstName']."',
'".$_POST['lastName']."',
'".$_POST['password']."',
'".$_POST['login']."',
1);";

if (mysqli_query($conn, $query)) {
    echo "Zapis sozdana";
} else {
    echo "Oy, chto-to poshlo ne tak!";
}

