<?php

session_start();

include("../includes/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM students
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
    $row = mysqli_fetch_assoc($result);

    $_SESSION['student_id'] = $row['id'];

    $_SESSION['student_name'] = $row['name'];

    header("Location: dashboard.php");
}
else
{
    echo "Invalid Email or Password";
}

?>