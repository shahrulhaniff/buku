<?php
$c = oci_connect("system", "033606", "localhost/XE");

$id = $_GET['id'];

//call stored procedured proc_delete
$query = "BEGIN proc_delete ('".$id."'); END;";

//parse the query
$s = ociparse($c, $query);

//execute the query
$m = ociexecute($s);

if ($m)
{
	echo"<br><center><b>Data Was Deleted</b><br><a href='index1.php?page=books'>Back</a></center>";
}
?>