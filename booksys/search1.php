<?php
$c = oci_connect("system", "033606", "localhost/XE");

$name = $_POST['name'];

//call function p_update
$query = "SELECT A('".$name."') TITLE, AUTHOR from INC_BOOK WHERE TITLE='".$name."'";

//parse the query
$s = ociparse($c, $query);

//execute the query
$m = ociexecute($s);

echo"<center>Result for searching '<b><i>".$name."</i></b>'</center><br>";

echo"<table width='400px' align='center' cellspacing='0.5' border='1'>";
echo"<tr>";
echo"<td width='250px' height='25px' bgcolor='#98bef7'><b>TITLE</b></td>";
echo"<td width='150px' height='25px' bgcolor='#98bef7'><b>AUTHOR</b></td>";
echo"</tr>";

while (ocifetch($s))
{
	$title = ociresult($s,"TITLE");
	$author = ociresult($s,"AUTHOR");

	echo"<tr>";
	echo"<td width='250px'>".$title."</td>";
	echo"<td width='150px'>".$author."</td>";
	echo"</tr>";
}

echo"</table>";

?>