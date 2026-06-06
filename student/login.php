<!DOCTYPE html>

<html>

<head>

<title>Student Login | Smart College ERP</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
    background:linear-gradient(135deg,#4f46e5,#6366f1);
    min-height:100vh;
}

.login-card{
    margin-top:80px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,0.15);
    border:none;
}

.logo{
    font-size:55px;
}

.form-control{
    border-radius:12px;
    padding:12px;
}

.btn-login{
    border-radius:12px;
    font-weight:600;
    padding:12px;
}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card login-card">

<div class="card-body p-5">

<div class="text-center">

<div class="logo">
👨‍🎓
</div>

<h2 class="mb-2">
Student Portal
</h2>

<p class="text-muted mb-4">
Smart College ERP
</p>

</div>

<form action="authenticate.php"
method="POST">

<div class="mb-3">

<label class="form-label">
Email Address
</label>

<input type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

</div>

<div class="mb-4">

<label class="form-label">
Password
</label>

<input type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

</div>

<button type="submit"
class="btn btn-warning btn-login w-100">

🎓 Student Login

</button>

</form>

<hr>

<div class="text-center">

<a href="../index.php"
class="btn btn-outline-secondary">

⬅ Back to Portal

</a>

</div>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
