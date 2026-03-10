<?php
include 'includes/db.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$class=$_POST['class'];

$sql="INSERT INTO students(name,class)
VALUES('$name','$class')";

$conn->query($sql);
}
?>

<form method="POST">
<input type="text" name="name" placeholder="Student Name">
<input type="text" name="class" placeholder="Class">
<button type="submit" name="submit">Add Student</button>
</form>
