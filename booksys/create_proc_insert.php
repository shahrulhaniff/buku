<html>
<head>
<title>Add Record</title>
</head>

<body>

<?php

$c = oci_connect("system", "033606", "localhost/XE");

$plsql =  " create or replace procedure "
		. " proc_insert(input1 in varchar2, input2 in varchar2, input3 in varchar2, input4 in varchar2, input5 in varchar2) as "
		. " begin "
		. "      insert into INC_BOOK (ID,ISBN,TITLE,AUTHOR,YEAR,CATEGORY) values (ID.nextval,input1,input2,input3,input4,input5); "
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