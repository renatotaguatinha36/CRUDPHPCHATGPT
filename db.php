<?php

$host = "localhost"; // Change to your database host
$dbname = "employees_2023";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?> 
