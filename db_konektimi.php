<?php
$servername = "localhost";
$username = "root";
$password = "rina123";
$dbname = "AnesMalit";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}
echo "Lidhja u realizua me sukses!";
