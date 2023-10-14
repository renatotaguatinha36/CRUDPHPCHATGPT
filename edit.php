<?php
include("db.php");

 $id = $_GET['id'];

//selecting data associated with this particular id
$sql = 'SELECT id, first_name, last_name, email, job_title  FROM employees  WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $job_title = $row['job_title']; 

    
}

    $query = "UPDATE employees SET first_name=?, last_name=?, email=?, job_title=? WHERE id=?";

    $stmt = $conn->prepare($query);
    $stmt->execute([$first_name, $last_name, $email, $job_title, $id]);

    header("Location: index.php");

?>

<!-- Edit Employee Form (HTML) -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Add Employee</h1><hr><hr>
    <form method="POST" action="add.php">
    <div class="form-group">  
        <label>First Name: <input type="text" name="first_name" required class="form-control" value="<?php echo $first_name; ?>"></label>
        <label>Last Name: <input type="text" name="last_name" required class="form-control" value="<?php echo $last_name; ?>"></label>
        <label>Email: <input type="email" name="email" required class="form-control" value="<?php echo $email; ?>"></label>
        <label>Job Title: <input type="text" name="job_title" required class="form-control" value="<?php echo $job_title; ?>"></label>
        <button type="submit">Add</button>
    </div>    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>

