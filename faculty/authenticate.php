<?php

session_start();

include("../includes/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM faculty
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);

    $_SESSION['faculty_id'] = $row['id'];
    $_SESSION['faculty_name'] = $row['faculty_name'];

    header("Location: dashboard.php");
}
else
{
    echo "Invalid Email or Password";
}

?>