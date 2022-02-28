<?php

$stud_id=$_GET['id'];

$conn=mysqli_connect("localhost","root","","crud") or die("connection failed");

$sql="DELETE FROM student WHERE sid={$stud_id}";

$result=mysqli_query($conn,$sql) or die("Query unsuccessful.");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>