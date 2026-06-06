<?php

session_start();

include("includes/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
    $row = mysqli_fetch_assoc($result);

    $_SESSION['name'] = $row['name'];
    $_SESSION['role'] = $row['role'];

    if($row['role']=='admin')
    {
        header("Location: admin/dashboard.php");
    }
}
else
{
    echo "Invalid Login";
}

?>