<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Smart College ERP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<style>
body{
    background:linear-gradient(135deg,#4f46e5,#6366f1);
    min-height:100vh;
}
.portal-card{
    max-width:850px;
    margin:auto;
    margin-top:80px;
    border-radius:25px;
}
.role-btn{
    height:90px;
    font-size:22px;
    font-weight:600;
    border-radius:18px;
}
</style>
</head>
<body>
<div class="container">
<div class="card portal-card p-5">
<div class="text-center">
<h1 class="mb-3">
🎓 Smart College ERP
</h1>
<p class="text-muted">
College Management System
</p>
<hr>
<h4 class="mb-4">
Choose Your Portal
</h4>
</div>
<div class="row g-4">
<div class="col-md-4">
<a href="login.php" class="btn btn-primary role-btn w-100">
👨‍💼
<br>
Admin
</a>
</div>
<div class="col-md-4">
<a href="faculty/login.php" class="btn btn-success role-btn w-100">
👨‍🏫
<br>
Faculty
</a>
</div>
<div class="col-md-4">
<a href="student/login.php" class="btn btn-warning role-btn w-100">
👨‍🎓
<br>
Student
</a>
</div>
</div>
<br>
<div class="text-center text-muted">
Smart College ERP © 2026
<br>
<?php echo "College ERP Connected Successfully"; ?>
</div>
</div>
</div>
</body>
</html>