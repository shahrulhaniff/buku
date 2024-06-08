<html>
<head>
<title>Add Record</title>
</head>

<body>

<?php

$c = oci_connect("system", "033606", "localhost/XE");

$plsql =  " create or replace procedure "
		. " proc_insert1(input1 in varchar2,input2 in varchar2,input3 in varchar2,input4 in varchar2) as "
		. " begin "
		. "      insert into INC_SUPPLIER (SUPPLIER_ID,BOOK_ID,NAME,EMAIL) values (input1,input2,input3,input4); "
		. " end;";


$s = ociparse($c, $plsql);
$m = ociexecute($s);

if ($m) {
	echo 'Procedure created';
	echo "\n <a href='index.php'>Back</a>";
}

?>

</body>

</html>