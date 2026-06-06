<?php

include("../includes/db.php");

$id = $_POST['id'];
$roll_no = $_POST['roll_no'];
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$year = $_POST['year'];

$sql = "UPDATE students
        SET
        roll_no='$roll_no',
        name='$name',
        email='$email',
        department='$department',
        year='$year'
        WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location: view_students.php");
}
else
{
    echo "Error Updating Student";
}

?>