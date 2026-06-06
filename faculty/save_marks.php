<?php

include("../includes/db.php");

$student_id = $_POST['student_id'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];

$sql = "INSERT INTO marks
(student_id, subject, marks)
VALUES
('$student_id', '$subject', '$marks')";

?>

<!DOCTYPE html>

<html>

<head>

<title>Save Marks</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
    background:linear-gradient(135deg,#4f46e5,#6366f1);
    min-height:100vh;
}

.result-card{
    margin-top:120px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,0.15);
    border:none;
}

</style>

</head>

<body>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card result-card">

<div class="card-body text-center p-5">

<?php

if(mysqli_query($conn,$sql))
{
?>

<h1>✅</h1>

<h3 class="text-success">
Marks Saved Successfully
</h3>

<?php
}
else
{
?>

<h1>❌</h1>

<h3 class="text-danger">
Error Saving Marks
</h3>

<p>
<?php echo mysqli_error($conn); ?>
</p>

<?php
}
?>

<br>

<a href="enter_marks.php"
class="btn btn-success">

📝 Enter More Marks

</a>

<a href="dashboard.php"
class="btn btn-primary">

🏠 Dashboard

</a>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
