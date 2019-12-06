<link rel="stylesheet" type="text/css" href="style.css"/>
<?php
include "server.php";

$sql = "SELECT id, name, title, author FROM book";
$result = $conn->query($sql);

?><a href="form_create.php"  class="button button2">  CREATE  </a> <br><br><?php
if ($result->num_rows > 0) {
    // output data of each row
	echo "<table border='1'>";
		echo "<tr>";
		echo "<td>BOOK ID</td>";
		echo "<td>Title</td>";
		echo "<td>Name</td>";
		echo "<td>Author</td>";
		echo "<td>Action</td>";
		echo "</tr>";
		
    while($row = $result->fetch_assoc()) {
		$id = $row["id"];
		$name = $row["name"];
		$title = $row["title"];
		$author = $row["author"];
		echo "<tr>";
		echo "<td>" . $row["id"]. "</td>";
		echo "<td>" . $row["title"]. "</td>";
		echo "<td>" . $row["name"]. "</td>";
		echo "<td>" . $row["author"]. "</td>";
		echo "<td>";
?>		


<a href="form_update.php?id=<?=$id?>&title=<?=$title?>&name=<?=$name?>&author=<?=$author?>"  class="button button1">  UPDATE  </a> &nbsp;



<a href="delete.php?id=<?=$id?>" onclick="return confirm('Are you sure?');"  class="button button3">  DELETE  </a> 
<?php	
		echo"</td>";
		echo "</tr>";
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["title"]. "<br>";
		
	}
		echo "</table>";
	
} else {
    echo "0 results";
}
$conn->close();
?>