<?php
include("db.php");

// Display a list of employees
$query = "SELECT * FROM employee";
$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee CRUD</title>
</head>
<body>
    <h1>Employee List</h1>

    <a href="add.php">Add New Employee</a>

    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Job Title</th>
            <th>Actions</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['job_title'] . "</td>";
            echo "<td>
                <a href='edit.php?id=" . $row['id'] . "'>Edit</a>
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
