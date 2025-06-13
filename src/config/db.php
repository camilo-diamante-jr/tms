<?php

require 'config.php';


$dsn = "mysql:host=" . DB_HOST . ";" . "dbname=" . DB_NAME . ";" . "charset=" . DB_CHARSET;


try {
    $conn = new PDO($dsn, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Database connection error:" . $e->getMessage() . "       ", 3, __DIR__ . '/../logs/db_errors.log');
    die("A database error occurred. Please try again later.");
}
