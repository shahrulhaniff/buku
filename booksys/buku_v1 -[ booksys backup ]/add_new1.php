<?php
$c = oci_connect("BUKU", "BUKU", "localhost/XE");

$S_ID = $_POST['id'];
$S_ISBN = $_POST['isbn'];
$S_TITLE = $_POST['title'];
$S_AUTHOR = $_POST['author'];
$S_YEAR = $_POST['year'];
$S_CATEGORY = $_POST['category'];
//$S_SUPPLIER_ID = $_POST['supplier_id'];
//$S_NAME = $_POST['supplier_name'];
//$S_EMAIL = $_POST['email'];

//call stored procedured proc_insert
$query = "BEGIN proc_insert('".$S_ID."','".$S_ISBN."','".$S_TITLE."','".$S_AUTHOR."','".$S_YEAR."','".$S_CATEGORY."'); END;";

//$query2 = "BEGIN proc_insert1('".$S_ID."','".$S_SUPPLIER_NAME."','".$S_EMAIL."','".$S_SUPPLIER_ID."'); END;";

//parse the query
$s = ociparse($c, $query);

//execute the query
$m = ociexecute($s);

//$query1 = "SELECT * FROM INC_BOOK ORDER BY ID DESC";
//$s1 = ociparse($c,$query1);
//$m1 = ociexecute($s1);
//$row1 = oci_fetch_array($s1);
//$book_id = $row1['ID']; 

//call stored procedured proc_insert1
//$query2 = "BEGIN proc_insert1 ('".$supplier_id."','".$book_id."','".$supplier_name."','".$email."'); END;";

//parse the query
//$s2 = ociparse($c, $query2);

//execute the query
//$m2 = ociexecute($s2);

//if (($m)&&($m2))
//{
	echo"<br><b><center>Data Was Added.</b></center>";
	echo"<script>document.location.href='index1.php?page=add_new_s';</script>";
//}
?>
