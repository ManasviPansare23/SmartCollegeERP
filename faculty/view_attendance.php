<?php

session_start();

if(!isset($_SESSION['faculty_name']))
{
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$sql = "SELECT students.name,
               attendance.attendance_date,
               attendance.status
        FROM attendance
        JOIN students
        ON attendance.student_id = students.id";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Attendance</title>

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

<div class="card p-4">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2>
📅 Attendance Records
</h2>

</div>

<div class="table-responsive">

<table class="table table-hover table-striped align-middle">

<thead class="table-success">

<tr>

<th>Student Name</th>
<th>Date</th>
<th>Status</th>

</tr>

</thead>

<tbody>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td>
<?php echo $row['name']; ?>
</td>

<td>
<?php echo $row['attendance_date']; ?>
</td>

<td>

<?php
if($row['status'] == 'Present')
{
?>

<span class="badge bg-success">
Present
</span>

<?php
}
else
{
?>

<span class="badge bg-danger">
Absent
</span>

<?php
}
?>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

</div>

</div>

</div>

</body>

</html>
