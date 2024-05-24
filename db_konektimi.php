<?php
$servername = "localhost";  // Emri i serverit (zakonisht 'localhost')
$username = "root";         // Emri i përdoruesit të MySQL (zakonisht 'root')
$password = "rina123";             // Fjalëkalimi për MySQL (lëreni bosh nëse nuk keni fjalëkalim)
$dbname = "AnesMalit";  // Emri i bazës së të dhënave që dëshironi të përdorni

// Krijimi i një konseksioni
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrolli i konseksionit
if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}
echo "Lidhja u realizua me sukses!";
