<?php

include("../includes/db.php");

$student_id = $_POST['student_id'];
$attendance_date = $_POST['attendance_date'];
$status = $_POST['status'];

$sql = "INSERT INTO attendance
(student_id, attendance_date, status)
VALUES
('$student_id','$attendance_date','$status')";

if(mysqli_query($conn,$sql))
{
    echo "Attendance Saved Successfully";
}
else
{
    echo "Error";
}

?>