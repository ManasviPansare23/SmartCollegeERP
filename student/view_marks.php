<?php

session_start();

if(!isset($_SESSION['student_name']))
{
    header("Location: login.php");
    exit();
}

include("../includes/db.php");

$student_id = $_SESSION['student_id'];

$sql = "SELECT subject, marks
        FROM marks
        WHERE student_id='$student_id'";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>My Marks</title>

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

<div class="container mt-5">

<div class="card p-4">

<h2 class="mb-4">
📝 My Marks
</h2>

<div class="table-responsive">

<table class="table table-hover table-striped align-middle">

<thead class="table-warning">

<tr>

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
