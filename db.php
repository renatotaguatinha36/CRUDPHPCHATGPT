<?php
$host = "localhost";  // Change this to your database host
$username = "root";   // Change this to your database username
$password = "";       // Change this to your database password
$database = "employees";

// Create a connection to the database
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
#################PDO##################################### 

<?php
$host = "localhost"; // Change to your database host
$dbname = "employees";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
