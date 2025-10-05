<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <button type="submit" name="save">Save</button>
    </form>
    <br><a href="students.php">Back</a>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";
    if ($conn->query($sql)) {
        header("Location: students.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>
