<?php
$c = oci_connect("BUKU", "BUKU", "localhost/XE");

$S_ID = $_POST['id'];
$S_ISBN = $_POST['isbn'];
$S_TITLE = $_POST['title'];
$S_AUTHOR = $_POST['author'];
$S_YEAR = $_POST['year'];
$S_CATEGORY = $_POST['category'];
$S_SUPPLIER_ID = $_POST['supplier_id'];
$S_SUPPLIER_NAME = $_POST['supplier_name'];
$S_EMAIL = $_POST['email'];

//call stored procedured proc_update
$query = "BEGIN proc_update('".$S_ID."','".$S_ISBN."','".$S_TITLE."','".$S_AUTHOR."','".$S_YEAR."','".$S_CATEGORY."'); END;";

//parse the query
$s = ociparse($c, $query);

//execute the query
$m = ociexecute($s);

//call stored procedured proc_update1
$query1 = "BEGIN proc_update1('".$S_ID."','".$S_SUPPLIER_ID."','".$S_SUPPLIER_NAME."','".$S_EMAIL."'); END;";

//parse the query
$s1 = ociparse($c, $query1);

//execute the query
$m1 = ociexecute($s1);

if (($m) && ($m1))
{
	echo"<br><center><b>Data Was Updated</b><br><a href='index1.php?page=books'>Back</a></center>";
}
?>
