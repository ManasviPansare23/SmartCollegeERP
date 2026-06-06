<?php

include("../includes/db.php");

$roll_no = $_POST['roll_no'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$department = $_POST['department'];
$year = $_POST['year'];

$sql = "INSERT INTO students
(roll_no,name,email,password,department,year)
VALUES
('$roll_no','$name','$email','$password','$department','$year')";

if(mysqli_query($conn,$sql))
{
    echo "Student Added Successfully";
}
else
{
    echo "Error";
}

?>