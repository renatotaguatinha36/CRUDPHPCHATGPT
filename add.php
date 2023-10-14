<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];

    $query = "INSERT INTO employee (first_name, last_name, email, job_title) VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$first_name, $last_name, $email, $job_title]);

    header("Location: index.php");
}
?>

<!-- Add Employee Form (HTML) -->
<!-- ... -->
