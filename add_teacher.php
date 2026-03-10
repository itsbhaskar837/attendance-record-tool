<?php
include 'includes/db.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$subject=$_POST['subject'];

$sql="INSERT INTO teachers(name,subject)
VALUES('$name','$subject')";

$conn->query($sql);
}
?>

<form method="POST">
<input type="text" name="name" placeholder="Teacher Name">
<input type="text" name="subject" placeholder="Subject">
<button type="submit" name="submit">Add Teacher</button>
</form>
