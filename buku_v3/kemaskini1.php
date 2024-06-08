<?php 
mysql_connect("localhost", "root", "")
 or die(mysql_error());
  
 mysql_select_db("miss") 
 or die(mysql_error()); 
 $lala=$_POST['lala'];
 $data = mysql_query("SELECT * FROM buku WHERE isbn='$lala'") 
 or die(mysql_error()); 
 $row1 = mysql_fetch_array( $data );
 
 
 ?>

<form name="form1" action="index1.php?page=kemaskini2" method="post">
<input type="hidden" name="id" value="<?php echo $row1['isbn'];?>">
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
<td width="350px"><input type="text" name="isbn" size="10" value="<?php echo $row1['isbn'];?>"  class="form-control"></td>
</tr>
<tr>
<td width="150px">Title</td>
<td width="350px"><input type="text" name="title" size="40" value="<?php echo $row1['title'];?>" class="form-control"></td>
</tr>
<tr>
<td width="150px">Author(s)</td>
<td width="350px"><input type="text" name="author" size="40" value="<?php echo $row1['author'];?>" class="form-control"></td>
</tr>
<tr>
<td width="150px">Year</td>
<td width="350px"><input type="text" name="year" size="10" value="<?php echo $row1['year'];?>" class="form-control"></td>
</tr>
<tr>
<td width="150px">Category</td>
<td width="350px">
<select name="category" class="form-control">
<option value="" <?php if ($row1['category']=="") echo"";?>>-- Select --</option>
<option value="Science" <?php if ($row1['category']=="Science") echo"selected";?>>Science</option>
<option value="Management" <?php if ($row1['category']=="Management") echo"selected";?>>Management</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2"><b><b>Supplier Info </b></b></td>
</tr>
<tr>
<td width="150px">Supplier Reg. ID</td>
<td width="350px"><input type="text" name="supplier_id" size="20" value="<?php echo $row1['supplier_id'];?>" class="form-control"></td>
</tr>
<tr>
<td width="150px">Supplier Name</td>
<td width="350px"><input type="text" name="supplier_name" size="40" value="<?php echo $row1['supplier_name'];?>" class="form-control"></td>
</tr>
<tr>
<td width="150px">Email</td>
<td width="350px"><input type="text" name="email" size="40" value="<?php echo $row1['email'];?>" class="form-control"></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="submit" value="Submit" class="btn btn-default">&nbsp;
<input type="reset" name="reset" value="Reset" class="btn btn-default">
</td>
</tr>
</table>
</form>