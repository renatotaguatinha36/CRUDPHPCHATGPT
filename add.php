<?php
include("db.php");


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $job_title = $_POST['job_title'];

   $query = "INSERT INTO employees (first_name, last_name, email, job_title) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->execute([$first_name, $last_name, $email, $job_title]);
    $last_id = $conn->lastInsertId();

    $last_id = $conn->lastInsertId();
    echo("Último ID inserido". $last_id);

    header("Location: index.php");
 }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Add Employee</h1>
    <form method="POST" action="add.php">
    <div class="form-group">  
        <label>First Name: <input type="text" name="first_name" required class="form-control"></label>
        <label>Last Name: <input type="text" name="last_name" required class="form-control"></label>
        <label>Email: <input type="email" name="email" required class="form-control"></label>
        <label>Job Title: <input type="text" name="job_title" required class="form-control"></label>
        <button type="submit">Add</button>
    </div>    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>
