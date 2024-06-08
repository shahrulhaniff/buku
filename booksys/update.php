<?php
$c = oci_connect("system", "033606", "localhost/XE");

$query1 = "SELECT * FROM INC_BOOK WHERE ID='".$_GET['id']."'";
$s1 = ociparse($c,$query1);
$m1 = ociexecute($s1);
$row1 = oci_fetch_array($s1);

$query2 = "SELECT * FROM INC_SUPPLIER WHERE BOOK_ID='".$_GET['id']."'";
$s2 = ociparse($c,$query2);
$m2 = ociexecute($s2);
$row2 = oci_fetch_array($s2);
?>

<form name="form1" action="index1.php?page=update1" method="post">
<input type="hidden" name="id" value="<?php echo $row1['ID'];?>">
<table width="500px">
<tr>
<td colspan="2"><b>:: Update Book Info</b></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2"><b>Book Info</b></td>
</tr>
<tr>
<td width="150px">ISBN Code</td>
<td width="350px"><input type="text" name="isbn" size="10" value="<?php echo $row1['ISBN'];?>"></td>
</tr>
<tr>
<td width="150px">Title</td>
<td width="350px"><input type="text" name="title" size="40" value="<?php echo $row1['TITLE'];?>"></td>
</tr>
<tr>
<td width="150px">Author(s)</td>
<td width="350px"><input type="text" name="author" size="40" value="<?php echo $row1['AUTHOR'];?>"></td>
</tr>
<tr>
<td width="150px">Year</td>
<td width="350px"><input type="text" name="year" size="10" value="<?php echo $row1['YEAR'];?>"></td>
</tr>
<tr>
<td width="150px">Category</td>
<td width="350px">
<select name="category">
<option value="" <?php if ($row1['CATEGORY']=="") echo"";?>>-- Select --</option>
<option value="Science" <?php if ($row1['CATEGORY']=="Science") echo"selected";?>>Science</option>
<option value="Management" <?php if ($row1['CATEGORY']=="Management") echo"selected";?>>Management</option>
</select>
</td>
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
<td width="350px"><input type="text" name="supplier_name" size="40" value="<?php echo $row2['NAME'];?>"></td>
</tr>
<tr>
<td width="150px">Email</td>
<td width="350px"><input type="text" name="email" size="40" value="<?php echo $row2['EMAIL'];?>"></td>
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