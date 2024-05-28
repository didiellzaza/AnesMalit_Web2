<?php
include 'db_konektimi.php';

// Create an instance of the Database class
$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    // Check if the post table exists
    $checkTable = $conn->query("SHOW TABLES LIKE 'post'");
    if ($checkTable->rowCount() == 0) {
        // Table does not exist, create it
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
    } else {
        // Table exists, perform update or modifications if needed
        echo "Tabela 'post' ekziston tashmë.<br>";
        // Example of an update: Adding a new column
        $sql = "ALTER TABLE post ADD COLUMN new_column VARCHAR(255) NULL";

        if ($conn->query($sql) === TRUE) {
            echo "Kolona 'new_column' u shtua me sukses në tabelën 'post'!<br>";
        } else {
            echo "Gabim gjatë shtimit të kolonës në tabelën 'post': " . $conn->$error . "<br>";
        }
    }

    // Close the connection
    $conn = null;
} else {
    echo "Database connection could not be established.";
}
