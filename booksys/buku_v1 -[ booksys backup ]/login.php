<?php
include("config.php");
session_start();


$query = "SELECT * FROM INC_USER WHERE USERNAME='".$_POST['username']."' AND PASSWORD='".$_POST['password']."'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
      
$count = mysqli_num_rows($result);
      

if ($row['USERNAME']!='')
{
	$_SESSION['USERNAME'] = $row['USERNAME'];//IF PASSWORD MATCH
	echo"<script>document.location.href='index1.php?page=main';</script>";
}

else
{ //IF NOT MATCH
	echo"<script>alert('Username and Password not Match!');document.location.href='index.php';</script>";
}
?>
