<center>

<form action="padam1.php" method="POST" onSubmit="return confirm('Deletion, are you sure?')">
		<p>ISBN :
  <select name="isbn" id="isbn"><option value="" selected >Select to Delete..</option>
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
	  </p>
		<p>
		  
		  <input type="submit" value ="Delete">
	  </p>
	</form> 
    </center>