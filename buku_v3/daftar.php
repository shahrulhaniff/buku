<form name="form1" action="index1.php?page=daftar1" method="post">
<table width="500px">
<tr>
<td colspan="2"><b>:: Add New Book</b></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2"><b>Book Info</b></td>
</tr>
<tr>
<td width="150px">ISBN Code</td>
<td width="350px"><input type="text" name="isbn" size="10" class="form-control"></td>
</tr>
<tr>
<td width="150px">Title</td>
<td width="350px"><input type="text" name="title" size="40" class="form-control"></td>
</tr>
<tr>
<td width="150px">Author(s)</td>
<td width="350px"><input type="text" name="author" size="40" class="form-control"></td>
</tr>
<tr>
<td width="150px">Year</td>
<td width="350px"><input type="text" name="year" size="10" class="form-control"></td>
</tr>
<tr>
<td width="150px">Category</td>
<td width="350px">
<select name="category" class="form-control">
<option value="">-- Select --</option>
<option value="Science">Science</option>
<option value="Management">Management</option>
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
<td width="350px"><input type="text" name="supplier_id" size="20" class="form-control"></td>
</tr>
<tr>
<td width="150px">Supplier Name</td>
<td width="350px"><input type="text" name="supplier_name" size="40" class="form-control"></td>
</tr>
<tr>
<td width="150px">Email</td>
<td width="350px"><input type="text" name="email" size="40" class="form-control"></td>
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