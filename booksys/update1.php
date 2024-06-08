<?php
$c = oci_connect("system", "033606", "localhost/XE");

$id = $_POST['id'];
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$category = $_POST['category'];
$supplier_id = $_POST['supplier_id'];
$supplier_name = $_POST['supplier_name'];
$email = $_POST['email'];

//call stored procedured proc_update
$query = "BEGIN proc_update('".$id."','".$isbn."','".$title."','".$author."','".$year."','".$category."'); END;";

//parse the query
$s = ociparse($c, $query);

//execute the query
$m = ociexecute($s);

//call stored procedured proc_update1
$query1 = "BEGIN proc_update1('".$id."','".$supplier_id."','".$supplier_name."','".$email."'); END;";

//parse the query
$s1 = ociparse($c, $query1);

//execute the query
$m1 = ociexecute($s1);

if (($m) && ($m1))
{
	echo"<br><center><b>Data Was Updated</b><br><a href='index1.php?page=books'>Back</a></center>";
}
?>