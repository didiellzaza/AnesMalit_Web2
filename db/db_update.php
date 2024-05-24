<?php
include 'db_connect.php';


$sql = "UPDATE evente SET titulli = 'Titulli i ri i eventit', lokacioni = 'Lokacioni i ri' WHERE eid = 1";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u përditësua me sukses në tabelën 'evente'!<br>";
} else {
    echo "Gabim gjatë përditësimit të rreshtit në tabelën 'evente': " . $conn->error . "<br>";
}


$sql = "UPDATE regjistrimi SET user_id = 2, event_id = 2 WHERE rid = 1";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u përditësua me sukses në tabelën 'regjistrimi'!<br>";
} else {
    echo "Gabim gjatë përditësimit të rreshtit në tabelën 'regjistrimi': " . $conn->error . "<br>";
}

$sql = "UPDATE blogu SET titulli = 'Titulli i ri i blogut', kontenti = 'Përmbajtja e re e blogut' WHERE bid = 1";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u përditësua me sukses në tabelën 'blogu'!<br>";
} else {
    echo "Gabim gjatë përditësimit të rreshtit në tabelën 'blogu': " . $conn->error . "<br>";
}


$sql = "UPDATE komente SET kontenti = 'Komenti i ri në blog' WHERE kid = 1";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u përditësua me sukses në tabelën 'komente'!<br>";
} else {
    echo "Gabim gjatë përditësimit të rreshtit në tabelën 'komente': " . $conn->error . "<br>";
}


$sql = "UPDATE tregime SET titulli = 'Titulli i ri i tregimit', kontenti = 'Përmbajtja e re e tregimit' WHERE tid = 1";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u përditësua me sukses në tabelën 'tregime'!<br>";
} else {
    echo "Gabim gjatë përditësimit të rreshtit në tabelën 'tregime': " . $conn->error . "<br>";
}


$sql = "UPDATE kontakti SET emri = 'Emri i ri', email = 'email@personi.com', mesazhi = 'Mesazhi i ri' WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u përditësua me sukses në tabelën 'kontakti'!<br>";
} else {
    echo "Gabim gjatë përditësimit të rreshtit në tabelën 'kontakti': " . $conn->error . "<br>";
}


$conn->close();
