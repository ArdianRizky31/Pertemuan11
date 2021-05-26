<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error($con));
 }
mysqli_select_db($con,"lat_dbase");
$cek = mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Karina', 'Suwandi', '29')");
$cek1=mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Glenn', 'Gandari', '32')");
if($cek && $cek1){
	echo "Berhasil Insert data";
}
mysqli_close($con);
?>