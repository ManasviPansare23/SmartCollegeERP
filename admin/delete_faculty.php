<?php

include("../includes/db.php");

$id = $_GET['id'];

$sql = "DELETE FROM faculty WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location: view_faculty.php");
}
else
{
    echo "Error";
}

?>