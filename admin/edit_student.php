<?php

session_start();

if(!isset($_SESSION['name']))
{
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>

<body>

<h2>Edit Student</h2>

<form action="update_student.php" method="POST">

    <input type="hidden"
           name="id"
           value="<?php echo $row['id']; ?>">

    Roll No:
    <input type="text"
           name="roll_no"
           value="<?php echo $row['roll_no']; ?>">
    <br><br>

    Name:
    <input type="text"
           name="name"
           value="<?php echo $row['name']; ?>">
    <br><br>

    Email:
    <input type="email"
           name="email"
           value="<?php echo $row['email']; ?>">
    <br><br>

    Department:
    <input type="text"
           name="department"
           value="<?php echo $row['department']; ?>">
    <br><br>

    Year:
    <input type="text"
           name="year"
           value="<?php echo $row['year']; ?>">
    <br><br>

    <button type="submit">
        Update Student
    </button>

</form>

</body>
</html>