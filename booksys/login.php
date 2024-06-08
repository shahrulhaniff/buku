<?php
session_start();
$c = oci_connect("system", "033606", "localhost/XE");

$query = "SELECT * FROM INC_USER WHERE USERNAME='".$_POST['username']."' AND PASSWORD='".$_POST['password']."'";
$s = oci_parse($c, $query);
$m = oci_execute($s);

$row = oci_fetch_array($s);

if ($row['USERNAME']!='')
{
	$_SESSION['USERNAME'] = $row['USERNAME'];
	echo"<script>document.location.href='index1.php?page=main';</script>";
}

else
{
	echo"<script>alert('Username and Password not Match !');document.location.href='index.php';</script>";
}
?>