<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "smart_college_erp"
);

if(!$conn)
{
    die("Database Connection Failed");
}

?>