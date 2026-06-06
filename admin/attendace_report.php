<?php

include("../includes/db.php");

$sql = "SELECT
students.name,

COUNT(attendance.id) AS total_days,

SUM(
CASE
WHEN attendance.status='Present'
THEN 1
ELSE 0
END
) AS present_days

FROM students

LEFT JOIN attendance
ON students.id = attendance.student_id

GROUP BY students.id";

$result = mysqli_query($conn,$sql);

?>

<table border="1" cellpadding="10">

<tr>
    <th>Name</th>
    <th>Total Days</th>
    <th>Present Days</th>
    <th>Attendance %</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{

$total = $row['total_days'];
$present = $row['present_days'];

if($total > 0)
{
    $percentage =
    ($present/$total)*100;
}
else
{
    $percentage = 0;
}
?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $total; ?></td>

<td><?php echo $present; ?></td>

<td><?php echo round($percentage,2); ?>%</td>

</tr>

<?php
}
?>

</table>