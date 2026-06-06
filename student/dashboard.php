<?php

session_start();

if(!isset($_SESSION['student_name']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Student Dashboard</title>

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

<a href="../logout.php"
class="btn btn-dark">

🚪 Logout

</a>

</div>

</nav>

<div class="container mt-4">

<div class="card p-5 mb-4">

<h1>
👋 Welcome <?php echo $_SESSION['student_name']; ?>
</h1>

<p class="text-muted">
View Attendance, Marks and Academic Results
</p>

</div>

<div class="row">

<div class="col-md-4 mb-4">

<div class="card p-4 h-100">

<h2>📅 Attendance</h2>

<hr>

<p class="text-muted">
Check your attendance records
</p>

<a href="view_attendance.php"
class="btn btn-primary">

View Attendance

</a>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card p-4 h-100">

<h2>📝 Marks</h2>

<hr>

<p class="text-muted">
View subject-wise marks
</p>

<a href="view_marks.php"
class="btn btn-success">

View Marks

</a>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card p-4 h-100">

<h2>📊 Result</h2>

<hr>

<p class="text-muted">
Check overall performance
</p>

<a href="result.php"
class="btn btn-warning">

View Result

</a>

</div>

</div>

</div>

</div>

</body>

</html>
