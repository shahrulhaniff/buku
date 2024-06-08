<?php
$c = oci_connect("system", "033606", "localhost/XE");

$query = "SELECT * FROM INC_BOOK, INC_SUPPLIER WHERE INC_BOOK.ID=INC_SUPPLIER.BOOK_ID ";
$s = oci_parse($c, $query);
$m = oci_execute($s);


echo"<b>&nbsp;BOOKS</b><br>";

echo"<br><table width='600px' align='center' border='1' cellspacing='0.5'>";

echo"<tr>";
echo"<td width='150px' height='25px' bgcolor='#f6a7a7'><b>TITLE</b></td>";
echo"<td width='150px' height='25px' bgcolor='#f6a7a7'><b>AUTHOR</b></td>";
echo"<td width='100px' height='25px' bgcolor='#f6a7a7'><b>SUPPLIER</b></td>";
echo"</tr>";

while ($row = oci_fetch_array($s))
{
	echo"<tr>";
	echo"<td width='150px' valign='top'><a href='index1.php?page=display&id=".$row['ID']."'>".$row['TITLE']."</a></td>";
	echo"<td width='150px' valign='top'>".$row['AUTHOR']."</td>";
	echo"<td width='100px' valign='top'>".$row['NAME']."</td>";
	echo"</tr>";
}

echo"</table>";
?>

