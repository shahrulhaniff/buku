<?php
$c = oci_connect("BUKU", "BUKU", "localhost/XE");

$query = "SELECT * FROM INC_BOOK  ";
$s = oci_parse($c, $query);
$m = oci_execute($s);


echo"<b>&nbsp;BOOKS</b><br>";

echo"<br><table width='600px' align='center' border='1' cellspacing='0.5'>";

echo"<tr>";
echo"<td width='150px' height='25px' bgcolor='#f6a7a7'><b>ID</b></td>";
echo"<td width='150px' height='25px' bgcolor='#f6a7a7'><b>ISBN</b></td>";
echo"<td width='150px' height='25px' bgcolor='#f6a7a7'><b>TITLE</b></td>";
echo"<td width='100px' height='25px' bgcolor='#f6a7a7'><b>AUTHOR</b></td>";
echo"<td width='100px' height='25px' bgcolor='#f6a7a7'><b>YEAR</b></td>";
echo"<td width='100px' height='25px' bgcolor='#f6a7a7'><b>CATEGORY</b></td>";
echo"</tr>";

while ($row = oci_fetch_array($s))
{
	echo"<tr>";
	echo"<td width='150px' valign='top'>".$row['ID']."</a></td>";
	echo"<td width='150px' valign='top'>".$row['ISBN']."</a></td>";
	echo"<td width='150px' valign='top'>".$row['TITLE']."</td>";
	echo"<td width='100px' valign='top'>".$row['AUTHOR']."</td>";
	echo"<td width='100px' valign='top'>".$row['YEAR']."</td>";
	echo"<td width='100px' valign='top'>".$row['CATEGORY']."</td>";
	echo"</tr>";
}

echo"</table>";
?>
