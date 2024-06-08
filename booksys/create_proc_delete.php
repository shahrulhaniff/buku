<html>
<head>
<title>Update Record</title>
</head>

<body>

<?php

$c = oci_connect("system", "033606", "localhost/XE");

$plsql =  " create or replace procedure "
		. " proc_delete(input1 in varchar2) as "
		. " begin "
		. "      DELETE FROM INC_BOOK WHERE ID = input1; "
		. "      DELETE FROM INC_SUPPLIER WHERE BOOK_ID = input1; "
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