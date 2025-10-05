<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
</head>
<body>
    <h2>Student Management System</h2>
    <br>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM students");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['age']}</td>
                        <td>
                            <a href='update.php?id={$row['id']}'>Edit</a> |
                            <a href='delete.php?id={$row['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No students found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
