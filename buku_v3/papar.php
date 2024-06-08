<?php // Connects to your Database 
mysql_connect("localhost", "root", "")
 or die(mysql_error());
  
 mysql_select_db("miss") 
 or die(mysql_error()); 
 
 $data = mysql_query("SELECT * FROM buku") 
 or die(mysql_error()); 
 
 echo"<table border cellpadding=7>"; 
 
 echo"<tr>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>isbn</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>title</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>author</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>year</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>category</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>supplier_id</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>supplier_name</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>email</b></td>";
echo"</tr>";


 while($info = mysql_fetch_array( $data )) {

	
	 echo "<tr>"; 
	  echo "<td>".$info['isbn'] . " </td>";
	  echo "<td>".$info['title'] . " </td>";
	  echo "<td>".$info['author'] . " </td>";
	  echo "<td>".$info['year'] . " </td>";
	  echo "<td>".$info['category'] . " </td>";
	  echo "<td>".$info['supplier_id'] . " </td>";
	  echo "<td>".$info['supplier_name'] . " </td>";
	  echo "<td>".$info['email'] . " </td>";


	  } echo "</table>"; 
	  ?>