<?php

session_start();

if(!isset($_SESSION['faculty_name']))
{
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$result = mysqli_query($conn,"SELECT * FROM students");

?>

<!DOCTYPE html>

<html>

<head>

<title>Mark Attendance</title>

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

<a href="dashboard.php"
class="btn btn-light">

⬅ Dashboard

</a>

</div>

</nav>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card p-5">

<h2 class="text-center mb-4">
📅 Mark Attendance
</h2>

<form action="save_attendance.php"
method="POST">

<div class="mb-3">

<label class="form-label">
Student
</label>

<select name="student_id"
class="form-select">

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<option value="<?php echo $row['id']; ?>">

<?php echo $row['name']; ?>

</option>

<?php
}
?>

</select>

</div>

<div class="mb-3">

<label class="form-label">
Attendance Date
</label>

<input type="date"
name="attendance_date"
class="form-control"
required>

</div>

<div class="mb-4">

<label class="form-label">
Status
</label>

<select name="status"
class="form-select">

<option value="Present">
Present
</option>

<option value="Absent">
Absent
</option>

</select>

</div>

<button type="submit"
class="btn btn-success w-100">

✅ Save Attendance

</button>

</form>

</div>

</div>

</div>

</div>

</body>

</html>
