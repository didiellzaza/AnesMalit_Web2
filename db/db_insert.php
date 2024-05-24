<?php
include 'db_connect.php';


$sql = "INSERT INTO evente (titulli, description, event_date, lokacioni) 
        VALUES ('Ne male me dy rrota', 'Ciklizem', '2024-05-25', 'Rugove')";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u shtua me sukses në tabelën 'evente'!<br>";
} else {
    echo "Gabim gjatë shtimit të rreshtit në tabelën 'evente': " . $conn->error . "<br>";
}


$sql = "INSERT INTO regjistrimi (user_id, event_id) 
        VALUES (1, 1)";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u shtua me sukses në tabelën 'regjistrimi'!<br>";
} else {
    echo "Gabim gjatë shtimit të rreshtit në tabelën 'regjistrimi': " . $conn->error . "<br>";
}


$sql = "INSERT INTO blogu (titulli, kontenti) 
        VALUES ('Ne male me dy rrota', 'Përmbajtja e blogut')";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u shtua me sukses në tabelën 'blogu'!<br>";
} else {
    echo "Gabim gjatë shtimit të rreshtit në tabelën 'blogu': " . $conn->error . "<br>";
}


$sql = "INSERT INTO komente (user_id, post_id, kontenti) 
        VALUES (1, 1, 'Ishte nje dite e paharrueshme')";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u shtua me sukses në tabelën 'komente'!<br>";
} else {
    echo "Gabim gjatë shtimit të rreshtit në tabelën 'komente': " . $conn->error . "<br>";
}


$sql = "INSERT INTO tregime (user_id, titulli, kontenti) 
        VALUES (1, 'Titulli i tregimit', 'Përmbajtja e tregimit')";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u shtua me sukses në tabelën 'tregime'!<br>";
} else {
    echo "Gabim gjatë shtimit të rreshtit në tabelën 'tregime': " . $conn->error . "<br>";
}


$sql = "INSERT INTO kontakti (emri, email, mesazhi) 
        VALUES ('Emri i personit', 'email@personi.com', 'Mesazhi i kontaktit')";

if ($conn->query($sql) === TRUE) {
    echo "Rreshti u shtua me sukses në tabelën 'kontakti'!<br>";
} else {
    echo "Gabim gjatë shtimit të rreshtit në tabelën 'kontakti': " . $conn->error . "<br>";
}


$conn->close();
