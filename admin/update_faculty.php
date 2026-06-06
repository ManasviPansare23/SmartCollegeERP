<?php

include("../includes/db.php");

$id = $_POST['id'];

$faculty_name = $_POST['faculty_name'];
$email = $_POST['email'];
$department = $_POST['department'];

$sql = "UPDATE faculty
        SET
        faculty_name='$faculty_name',
        email='$email',
        department='$department'
        WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location: view_faculty.php");
}
else
{
    echo "Error";
}

?>