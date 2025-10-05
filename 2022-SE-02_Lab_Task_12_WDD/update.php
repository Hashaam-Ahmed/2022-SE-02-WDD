<?php 
include 'db.php'; 

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$student = null;

// ✅ Only run query if a valid id is passed
if ($id > 0) {
    $result = $conn->query("SELECT * FROM students WHERE id=$id");
    if ($result && $result->num_rows > 0) {
        $student = $result->fetch_assoc();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h2>Update Student</h2>

    <?php if ($student): ?>
        <form method="post">
            Name: <input type="text" name="name" value="<?php echo $student['name']; ?>" required><br><br>
            Email: <input type="email" name="email" value="<?php echo $student['email']; ?>" required><br><br>
            Age: <input type="number" name="age" value="<?php echo $student['age']; ?>" required><br><br>
            <button type="submit" name="update">Update</button>
        </form>
    <?php else: ?>
        <p>No student found to update.</p>
    <?php endif; ?>

    <br><a href="students.php">Back</a>

<?php
if (isset($_POST['update']) && $id > 0) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE students SET name='$name', email='$email', age='$age' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: students.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>
