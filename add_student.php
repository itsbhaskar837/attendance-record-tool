<?php
include 'includes/db.php';
include 'includes/header.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$class=$_POST['class'];

$sql="INSERT INTO students(name,class)
VALUES('$name','$class')";

$conn->query($sql);
}
?>


<h2>Add Student</h2>

<form method="POST">

<input type="text" name="name" placeholder="Student Name">
<input type="text" name="class" placeholder="Class">

<button type="submit">Add</button>

</form>

</div>
</body>
</html>
