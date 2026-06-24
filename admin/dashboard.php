<?php

session_start();

if(!isset($_SESSION['name']))
{
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

$student_count =
mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM students")
);

$faculty_count =
mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM faculty")
);

$attendance_count =
mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM attendance")
);

$marks_count =
mysqli_num_rows(
mysqli_query($conn,"SELECT * FROM marks")
);

?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

<div class="container">

<a class="navbar-brand fw-bold">
🎓 Smart College ERP
</a>

<a href="../logout.php"
class="btn btn-light">

🚪 Logout

</a>

</div>

</nav>

<!-- Main Container -->

<div class="container mt-4">

<!-- Welcome Card -->

<div class="card welcome-card p-5 mb-4">

<h1>
👋 Welcome <?php echo $_SESSION['name']; ?>
</h1>

<p class="mb-0">
Manage Students, Faculty and Academic Records
</p>

</div>

<!-- Statistics Row -->

<div class="row mb-4">

<div class="col-md-3">

<div class="card text-center p-3">

<h2>👨‍🎓</h2>

<h3><?php echo $student_count; ?></h3>

<p>Total Students</p>

</div>

</div>

<div class="col-md-3">

<div class="card text-center p-3">

<h2>👨‍🏫</h2>

<h3><?php echo $faculty_count; ?></h3>

<p>Total Faculty</p>

</div>

</div>

<div class="col-md-3">

<div class="card text-center p-3">

<h2>📅</h2>

<h3><?php echo $attendance_count; ?></h3>

<p>Attendance Records</p>

</div>

</div>

<div class="col-md-3">

<div class="card text-center p-3">

<h2>📝</h2>

<h3><?php echo $marks_count; ?></h3>

<p>Marks Records</p>

</div>

</div>

</div>

<!-- Main Modules -->

<div class="row">

<div class="col-md-6 mb-4">

<div class="card p-4 module-card h-100">

<h2>👨‍🎓 Students</h2>

<hr>

<p class="text-muted">
Manage student records and information
</p>

<a href="add_student.php"
class="btn btn-primary mb-3">

➕ Add Student

</a>

<a href="view_students.php"
class="btn btn-success">

📋 View Students

</a>

</div>

</div>

<div class="col-md-6 mb-4">

<div class="card p-4 module-card h-100">

<h2>👨‍🏫 Faculty</h2>

<hr>

<p class="text-muted">
Manage faculty records and information
</p>

<a href="add_faculty.php"
class="btn btn-primary mb-3">

➕ Add Faculty

</a>

<a href="view_faculty.php"
class="btn btn-success">

📋 View Faculty

</a>

</div>

</div>

</div>

</div>

</body>

</html>