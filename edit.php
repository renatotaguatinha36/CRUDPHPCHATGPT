<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];

    $query = "UPDATE employee SET first_name=?, last_name=?, email=?, job_title=? WHERE id=?";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$first_name, $last_name, $email, $job_title, $id]);

    header("Location: index.php");
}
?>

<!-- Edit Employee Form (HTML) -->
<!-- ... -->
