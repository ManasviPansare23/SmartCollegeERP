<?php

session_start();

if(!isset($_SESSION['student_name']))
{
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$student_id = $_SESSION['student_id'];

/* MARKS DATA */

$sql_marks = "SELECT
SUM(marks) AS total_marks,
COUNT(subject) AS total_subjects
FROM marks
WHERE student_id='$student_id'";

$result_marks = mysqli_query($conn,$sql_marks);

$marks_data = mysqli_fetch_assoc($result_marks);

$total_marks = $marks_data['total_marks'];
$total_subjects = $marks_data['total_subjects'];

if($total_subjects > 0)
{
    $percentage = $total_marks / $total_subjects;
}
else
{
    $percentage = 0;
}

/* ATTENDANCE DATA */

$sql_attendance = "SELECT
COUNT(*) AS total_days,

SUM(
CASE
WHEN status='Present'
THEN 1
ELSE 0
END
) AS present_days

FROM attendance

WHERE student_id='$student_id'";

$result_attendance = mysqli_query($conn,$sql_attendance);

$attendance_data = mysqli_fetch_assoc($result_attendance);

$total_days = $attendance_data['total_days'];
$present_days = $attendance_data['present_days'];

if($total_days > 0)
{
    $attendance_percentage =
    ($present_days / $total_days) * 100;
}
else
{
    $attendance_percentage = 0;
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Result Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow">

<div class="container">

<a class="navbar-brand fw-bold text-dark">
👨‍🎓 Student Portal
</a>

<a href="dashboard.php"
class="btn btn-dark">

⬅ Dashboard

</a>

</div>

</nav>

<div class="container mt-4">

<div class="card p-5 mb-4">

<h1>
👋 Welcome <?php echo $_SESSION['student_name']; ?>
</h1>

<p class="text-muted">
Academic Performance Summary
</p>

</div>

<div class="row">

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h2>📚</h2>

<h3><?php echo $total_subjects; ?></h3>

<p>Total Subjects</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h2>📝</h2>

<h3><?php echo $total_marks; ?></h3>

<p>Total Marks</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h2>📊</h2>

<h3><?php echo round($percentage,2); ?>%</h3>

<p>Percentage</p>

</div>

</div>

<div class="col-md-3 mb-4">

<div class="card p-4 text-center">

<h2>📅</h2>

<h3><?php echo round($attendance_percentage,2); ?>%</h3>

<p>Attendance</p>

</div>

</div>

</div>

<div class="card p-4">

<h4>Result Status</h4>

<hr>

<?php
if($percentage >= 40)
{
?>

<div class="alert alert-success">

✅ PASS

</div>

<?php
}
else
{
?>

<div class="alert alert-danger">

❌ FAIL

</div>

<?php
}
?>

</div>

</div>

</body>

</html>
