<?php

session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "miss";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

//$id = $_POST['id'];
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$category = $_POST['category'];
$supplier_id = $_POST['supplier_id'];
$supplier_name = $_POST['supplier_name'];
$email = $_POST['email'];

mysql_query("UPDATE buku SET 
isbn='$isbn',
title='$title',
author='$author',
year='$year',
category='$category',
supplier_id='$supplier_id',
supplier_name='$supplier_name',
email='$email'
WHERE isbn='$isbn'
");

header("location:index1.php?page=papar");
//mysql_close($con);

?>