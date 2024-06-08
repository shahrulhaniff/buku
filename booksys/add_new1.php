<?php
$c = oci_connect("system", "033606", "localhost/XE");

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$category = $_POST['category'];
$supplier_id = $_POST['supplier_id'];
$supplier_name = $_POST['supplier_name'];
$email = $_POST['email'];

//call stored procedured proc_insert
$query = "BEGIN proc_insert ('".$isbn."','".$title."','".$author."','".$year."','".$category."'); END;";

//parse the query
$s = ociparse($c, $query);

//execute the query
$m = ociexecute($s);

$query1 = "SELECT * FROM INC_BOOK ORDER BY ID DESC";
$s1 = ociparse($c,$query1);
$m1 = ociexecute($s1);
$row1 = oci_fetch_array($s1);
$book_id = $row1['ID']; 

$query2 = "BEGIN proc_insert1 ('".$supplier_id."','".$book_id."','".$supplier_name."','".$email."'); END;";
$s2 = ociparse($c,$query2);
$m2 = ociexecute($s2);

if (($m)&&($m2))
{
	echo"<br><center><b>Data Was Added.</b></center>";
}
?>
