<?php
include 'includes/db.php';

$sql="SELECT * FROM attendance";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){

echo $row['person_type']." - ".$row['person_id']." - ".$row['status']." - ".$row['date']."<br>";

}
?>
