<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Course-Student System</title>
    <link rel="stylesheet" href="Lab Task 11_2022-SE-02.css">
</head>
<body>
   <h2>All Students</h2>
    <a href="create.php">+ Add Student</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Age</th>
        </tr>
       <?php include 'db.php'; ?>
        <?php
        $result = $conn->query("SELECT * FROM students");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['age']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }

        $conn->close();
        ?>
    </table>

    <br>
    <a href="students.php">Back</a>
</body>
</html>
