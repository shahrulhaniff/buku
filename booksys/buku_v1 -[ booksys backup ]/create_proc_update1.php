<html>
<head>
<title>Update Record</title>
</head>

<body>

<?php

$c = oci_connect("BUKU", "BUKU", "localhost/XE");

$plsql =  " create or replace procedure "
		. " proc_update1(input1 in number, input2 in varchar2,input3 in varchar2,input4 in varchar2) as "
		. " begin "
		. "      UPDATE INC_SUPPLIER SET SUPPLIER_ID=input2, NAME=input3, EMAIL=input4 WHERE BOOK_ID=input1;"
		. " end;";


$s = oci_parse($c, $plsql);
$m = oci_execute($s);

if ($m) {
	echo 'Procedure created';
	echo "\n <a href='index.php'>Back</a>";
}

?>

</body>

</html>
