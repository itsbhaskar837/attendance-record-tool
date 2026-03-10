<?php
include 'includes/db.php';
include 'includes/header.php';

$sql="SELECT * FROM attendance";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){

echo $row['person_type']." - ".$row['person_id']." - ".$row['status']." - ".$row['date']."<br>";

}
?>

<h2>Attendance Records</h2>

<p>Attendance list will appear here</p>

</div>
</body>
</html>
