<?php
$c = oci_connect("BUKU", "BUKU", "localhost/XE");

$query1 = "SELECT * FROM INC_BOOK WHERE ID='".$_POST['id']."'";
$s1 = ociparse($c,$query1);
$m1 = ociexecute($s1);
$row1 = oci_fetch_array($s1);

?>

<form name="form1" action="index1.php?page=updateS1" method="POST">

<input type="hidden" name="id" value="<?php echo $row1['ID'];?>">
<table width="500px">
<tr>
<td colspan="2"><b>:: Update Book Info</b></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2"><b><b>Supplier Info</b></b></td>
</tr>
<tr>
<td width="150px">Supplier Reg. ID</td>
<td width="350px"><input type="text" name="supplier_id" size="20" value="<?php echo $row2['SUPPLIER_ID'];?>"></td>
</tr>
<tr>
<td width="150px">Supplier Name</td>
<td width="350px"><input type="text" name="supplier_name" size="40" value="<?php echo $row2['SUPPLIER_NAME'];?>"></td>
</tr>
<tr>
<td width="150px">Email</td>
<td width="350px"><input type="text" name="email" size="40" value="<?php echo $row2['EMAIL'];?>"></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>

<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="submit" value="Submit">&nbsp;
<input type="reset" name="reset" value="Reset">
</td>
</tr>
</table>
</form>
