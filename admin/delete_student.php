<?php

include("../includes/db.php");

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location: view_students.php");
}
else
{
    echo "Error";
}

?>