<?php

session_start();

if(!isset($_SESSION['faculty_name']))
{
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$sql = "SELECT students.name,
               marks.subject,
               marks.marks
        FROM marks
        JOIN students
        ON marks.student_id = students.id";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Marks</title>

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
📝 Student Marks Records
</h2>

<a href="enter_marks.php"
class="btn btn-success">

➕ Enter Marks

</a>

</div>

<div class="table-responsive">

<table class="table table-hover table-striped align-middle">

<thead class="table-success">

<tr>

<th>Student Name</th>
<th>Subject</th>
<th>Marks</th>

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
<?php echo $row['subject']; ?>
</td>

<td>

<?php
if($row['marks'] >= 40)
{
?>

<span class="badge bg-success">
<?php echo $row['marks']; ?>
</span>

<?php
}
else
{
?>

<span class="badge bg-danger">
<?php echo $row['marks']; ?>
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
