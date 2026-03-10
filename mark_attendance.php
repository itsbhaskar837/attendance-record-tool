<?php
include 'includes/db.php';

if(isset($_POST['submit'])){

$type=$_POST['type'];
$id=$_POST['person_id'];
$status=$_POST['status'];
$date=date("Y-m-d");

$sql="INSERT INTO attendance(person_type,person_id,status,date)
VALUES('$type','$id','$status','$date')";

$conn->query($sql);
}
?>

<form method="POST">

<select name="type">
<option value="student">Student</option>
<option value="teacher">Teacher</option>
</select>

<input type="text" name="person_id" placeholder="ID">

<select name="status">
<option value="Present">Present</option>
<option value="Absent">Absent</option>
</select>

<button type="submit" name="submit">Submit</button>

</form>
