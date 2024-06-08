<form name="form1" action="index1.php?page=kemaskini1" method="POST">

<center>ISBN TO UPDATE: <select name="lala" id="lala"><option value="" selected >Chose one..</option>
<?php 
mysql_connect("localhost", "root", "")
 or die(mysql_error());
  
 mysql_select_db("miss") 
 or die(mysql_error()); 
 
 $data = mysql_query("SELECT * FROM buku") 
 or die(mysql_error()); 
 												


 while($info = mysql_fetch_array( $data )) {

	echo "<option>".$info['isbn'] . "</option>";
}
?> </select>

<br>
<input type="submit" name="submit" value="Update">   </center>
</form>
