<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="miss"; // Database name 
$tbl_name="buku"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$category = $_POST['category'];
$supplier_id = $_POST['supplier_id'];
$supplier_name = $_POST['supplier_name'];
$email = $_POST['email'];


$sql="INSERT INTO buku (isbn,title,author,year,category,supplier_id,supplier_name,email) 

VALUES ('$isbn','$title','$author','$year','$category','$supplier_id','$supplier_name','$email')";


$result=mysql_query($sql);

//$count=mysql_num_rows($result);

if($result){
	echo "The book successfully added!";

 
header("location:index1.php?page=papar");
}


else 
{
echo "Add new book fail the book isbn already have";
}


?>