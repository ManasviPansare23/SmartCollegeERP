<?php

session_start();

if(!isset($_SESSION['faculty_name']))
{
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>Students List</title>

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
👨‍🎓 Students List
</h2>

</div>

<div class="table-responsive">

<table class="table table-hover table-striped align-middle">

<thead class="table-success">

<tr>

<th>ID</th>
<th>Roll No</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Year</th>
<th>Attendance</th>
<th>Marks</th>

</tr>

</thead>

<tbody>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['roll_no']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['year']; ?></td>

<td>

<a href="mark_attendance.php?student_id=<?php echo $row['id']; ?>"
class="btn btn-primary btn-sm">

📅 Attendance

</a>

</td>

<td>

<a href="enter_marks.php?student_id=<?php echo $row['id']; ?>"
class="btn btn-success btn-sm">

📝 Marks

</a>

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
