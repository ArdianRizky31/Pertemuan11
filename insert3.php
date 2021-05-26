<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error($con));
 }
mysqli_select_db($con, "lat_dbase");
$sql="INSERT INTO tbl_mhs (FirstName, LastName, Age) 
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($con, $sql))
 {
 die('Error: ' . mysqli_error($con));
 }
echo "1 record added";
mysqli_close($con);