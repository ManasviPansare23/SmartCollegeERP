<?php

session_start();

if(!isset($_SESSION['faculty_name']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Faculty Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">

<div class="container">

<a class="navbar-brand fw-bold">
👨‍🏫 Faculty Portal
</a>

<a href="../logout.php"
class="btn btn-light">

🚪 Logout

</a>

</div>

</nav>

<div class="container mt-4">

<div class="card p-5 mb-4">

<h1>
👋 Welcome <?php echo $_SESSION['faculty_name']; ?>
</h1>

<p class="text-muted">
Manage Attendance, Marks and Students
</p>

</div>

<div class="row">

<div class="col-md-4 mb-4">

<div class="card p-4 h-100">

<h2>📅 Attendance</h2>

<hr>

<a href="mark_attendance.php"
class="btn btn-primary mb-3">

✅ Mark Attendance

</a>

<a href="view_attendance.php"
class="btn btn-success">

📋 View Attendance

</a>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card p-4 h-100">

<h2>📝 Marks</h2>

<hr>

<a href="enter_marks.php"
class="btn btn-primary mb-3">

➕ Enter Marks

</a>

<a href="view_marks.php"
class="btn btn-success">

📊 View Marks

</a>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card p-4 h-100">

<h2>👨‍🎓 Students</h2>

<hr>

<a href="view_students.php"
class="btn btn-primary">

👥 View Students

</a>

</div>

</div>

</div>

</div>

</body>

</html>