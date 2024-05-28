<?php
include 'db_konektimi.php';

// Create an instance of the Database class
$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    // Create users table
    $sql = "CREATE TABLE IF NOT EXISTS users (
        uid INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'users' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'users': " . $conn->$error . "<br>";
    }

    // Create evente table
    $sql = "CREATE TABLE IF NOT EXISTS evente (
        eid INT AUTO_INCREMENT PRIMARY KEY,
        titulli VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        event_date DATE NOT NULL,
        lokacioni VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'evente' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'evente': " . $conn->$error . "<br>";
    }

    // Create regjistrimi table
    $sql = "CREATE TABLE IF NOT EXISTS regjistrimi (
        rid INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        event_id INT NOT NULL,
        registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(uid),
        FOREIGN KEY (event_id) REFERENCES evente(eid)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'regjistrimi' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'regjistrimi': " . $conn->$error . "<br>";
    }

    // Create blogu table
    $sql = "CREATE TABLE IF NOT EXISTS blogu (
        bid INT AUTO_INCREMENT PRIMARY KEY,
        titulli VARCHAR(255) NOT NULL,
        kontenti TEXT NOT NULL,
        date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'blogu' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'blogu': " . $conn->$error . "<br>";
    }

    // Create komente table
    $sql = "CREATE TABLE IF NOT EXISTS komente (
        kid INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        post_id INT NOT NULL,
        kontenti TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(uid),
        FOREIGN KEY (post_id) REFERENCES blogu(bid)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'komente' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'komente': " . $conn->$error . "<br>";
    }

    // Create tregime table
    $sql = "CREATE TABLE IF NOT EXISTS tregime (
        tid INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        titulli VARCHAR(255) NOT NULL,
        kontenti TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(uid)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'tregime' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'tregime': " . $conn->$error . "<br>";
    }

    // Create kontakti table
    $sql = "CREATE TABLE IF NOT EXISTS kontakti (
        id INT AUTO_INCREMENT PRIMARY KEY,
        emri VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        mesazhi TEXT NOT NULL,
        date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'kontakti' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'kontakti': " . $conn->$error . "<br>";
    }

    // Create post table
    $sql = "CREATE TABLE IF NOT EXISTS post (
        post_id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        title VARCHAR(255) NOT NULL,
        content TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(uid)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Tabela 'post' u krijua me sukses!<br>";
    } else {
        echo "Gabim gjatë krijimit të tabelës 'post': " . $conn->$error . "<br>";
    }

    // Close the connection
    $conn = null;
} else {
    echo "Database connection could not be established.";
}
