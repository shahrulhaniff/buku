<html>
<head>
<title>Add Record</title>
</head>

<body>

<?php

$c = oci_connect("BUKU", "BUKU", "localhost/XE");

$plsql =  " create or replace procedure "
		. " proc_update(input1 in number, input2 in varchar2,input3 in varchar2,input4 in varchar2,input5 in varchar2,input6 in varchar2) as "
		. " begin "
		. "      UPDATE INC_BOOK SET ISBN=input2, TITLE=input3,  AUTHOR=input4, YEAR=input5, CATEGORY=input6 WHERE ID=input1;"
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
