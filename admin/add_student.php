<?php

session_start();

if(!isset($_SESSION['name']))
{
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Add Student</title>

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

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card p-5">

<h2 class="text-center mb-4">
👨‍🎓 Add Student
</h2>

<form action="insert_student.php" method="POST">

<div class="mb-3">

<label class="form-label">
Roll No
</label>

<input type="text"
name="roll_no"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Name
</label>

<input type="text"
name="name"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Email
</label>

<input type="email"
name="email"
class="form-control"
required>

</div>
<div class="mb-4">

<label class="form-label">
Password
</label>

<input type="password"
name="password"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Department
</label>

<input type="text"
name="department"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">
Year
</label>

<input type="text"
name="year"
class="form-control"
required>

</div>



<button type="submit"
class="btn btn-primary w-100">

➕ Add Student

</button>

</form>

</div>

</div>

</div>

</div>

</body>

</html>
