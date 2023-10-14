<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM employees WHERE id=?";

    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);

    header("Location: index.php");
}
?>
