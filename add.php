

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $email = $_POST['email'];
//     $job_title = $_POST['job_title'];

//     $query = "INSERT INTO employee (first_name, last_name, email, job_title) VALUES (?, ?, ?, ?)";

//     $stmt = $pdo->prepare($query);
//     $stmt->execute([$first_name, $last_name, $email, $job_title]);

//     header("Location: index.php");
// }
// 

<!-- Add Employee Form (HTML) -->
<!-- ... -->
<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];

    $query = "INSERT INTO employee (first_name, last_name, email, job_title) VALUES ('$first_name', '$last_name', '$email', '$job_title')";
    $mysqli->query($query);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form method="POST">
        <label>First Name: <input type="text" name="first_name" required></label>
        <label>Last Name: <input type="text" name="last_name" required></label>
        <label>Email: <input type="email" name="email" required></label>
        <label>Job Title: <input type="text" name="job_title" required></label>
        <button type="submit">Add</button>
    </form>
</body>
</html>
