<?php

include("../includes/db.php");

$faculty_name = $_POST['faculty_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$department = $_POST['department'];

$sql = "INSERT INTO faculty
(faculty_name,email,password,department)
VALUES
('$faculty_name','$email','$password','$department')";

if(mysqli_query($conn,$sql))
{
    echo "Faculty Added Successfully";
}
else
{
    echo "Error";
}

?>