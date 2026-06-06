<?php

session_start();

if(!isset($_SESSION['name']))
{
    header("Location: ../login.php");
    exit();
}

include("../includes/db.php");

$sql = "SELECT * FROM faculty";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Faculty</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="../assets/css/style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

<div class="container">

<a class="navbar-brand fw-bold">
🎓 Smart College ERP
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
👨‍🏫 Faculty Records
</h2>

<a href="add_faculty.php"
class="btn btn-primary">

➕ Add Faculty

</a>

</div>

<div class="table-responsive">

<table class="table table-hover table-striped align-middle">

<thead class="table-primary">

<tr>

<th>ID</th>
<th>Faculty Name</th>
<th>Email</th>
<th>Department</th>
<th>Actions</th>

</tr>

</thead>

<tbody>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['faculty_name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['department']; ?></td>

<td>

<a href="edit_faculty.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning btn-sm">

✏ Edit

</a>

<a href="delete_faculty.php?id=<?php echo $row['id']; ?>"
class="btn btn-danger btn-sm">

🗑 Delete

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
