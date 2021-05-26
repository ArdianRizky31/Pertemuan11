<?php
 $con = mysqli_connect("localhost","root","");
 // mysqli_select_db("lat_dbase");
mysqli_select_db($con,"lat_dbase");

 $hasil = mysqli_query ($con, "SELECT * FROM tbl_mhs");

 while($data=mysqli_fetch_row($hasil))
 {
 echo "$data[0] $data[1] $data[2]<br>";
 }



?>