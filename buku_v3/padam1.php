<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="miss"; // Database name 
$tbl_name="buku"; // Table name 
$conn = mysql_connect($host, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$isbn = $_POST['isbn'];


$sql = "DELETE FROM buku
       WHERE isbn ='$isbn'" ;

mysql_select_db('miss');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Data successfully deleted\n";
mysql_close($conn);

header("location:index1.php?page=papar");


		
	?>