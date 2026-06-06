<?php

session_start();

if(!isset($_SESSION['name']))
{
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM faculty WHERE id=$id";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Faculty</title>
</head>
<body>

<h2>Edit Faculty</h2>

<form action="update_faculty.php" method="POST">

<input type="hidden"
       name="id"
       value="<?php echo $row['id']; ?>">

Faculty Name:
<input type="text"
       name="faculty_name"
       value="<?php echo $row['faculty_name']; ?>">

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

<button type="submit">
Update Faculty
</button>

</form>

</body>
</html>