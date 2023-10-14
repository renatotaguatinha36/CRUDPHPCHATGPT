<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM employee WHERE id=?";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    header("Location: index.php");
}
?>
