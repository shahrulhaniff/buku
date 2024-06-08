<?php
$c = oci_connect("BUKU", "BUKU", "localhost/XE");

$query1 = "SELECT * FROM INC_BOOK ";//WHERE ID='".$_POST['id']."'";
$s1 = ociparse($c,$query1);
$m1 = ociexecute($s1);
$row1 = oci_fetch_array($s1);

$query2 = "SELECT * FROM INC_SUPPLIER
";// WHERE BOOK_ID='".$_POST['id']."'";
$s2 = ociparse($c,$query2);
$m2 = ociexecute($s2);
$row2 = oci_fetch_array($s2);
?>

<form name="form1" action="index1.php?page=delete" method="POST">

Insert book ID : <input type="text" name="id" value="<?php echo $row1['ID'];?>">

<input type="submit" name="submit" value="Submit">
</form>
