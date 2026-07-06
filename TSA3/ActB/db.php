<?php
$databaseHost = "localhost";
$databaseUser = "root";
$databasePassword = "";
$databaseName = "mydb";

mysqli_report(MYSQLI_REPORT_OFF);

$conn = new mysqli($databaseHost, $databaseUser, $databasePassword);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS `$databaseName` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");

if (!$conn->select_db($databaseName)) {
    die("Database selection failed: " . $conn->error);
}

$conn->set_charset("utf8mb4");

$conn->query(
    "CREATE TABLE IF NOT EXISTS users (
        id int(11) NOT NULL AUTO_INCREMENT,
        first_name varchar(50) NOT NULL,
        middle_name varchar(50) NOT NULL,
        last_name varchar(50) NOT NULL,
        username varchar(50) NOT NULL,
        password_hash varchar(255) NOT NULL,
        birthday varchar(50) NOT NULL,
        email varchar(100) NOT NULL,
        contact_number varchar(30) NOT NULL,
        created_at timestamp NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (id),
        UNIQUE KEY username (username),
        UNIQUE KEY email (email)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci"
);