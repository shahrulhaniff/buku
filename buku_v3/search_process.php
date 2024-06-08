<html>
<body>
  <?php
//capture search term and remove spaces at its both ends if the is any
$searchTerm = ($_POST['keyname']);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "<font color='#663300'><h3>Enter keyword to search... </font></h3> ";
	
}

//database connection info
$host = "localhost"; //server
$db = "miss"; //database name
$user = "root"; //dabases user name
$pwd = ""; //password

//connecting to server and creating link to database
$link = mysqli_connect($host, $user, $pwd, $db);

//MYSQL search statement
$query = "SELECT * FROM buku WHERE ( isbn LIKE '%$searchTerm%'  or title LIKE '%$searchTerm%' or author LIKE '%$searchTerm%' or year LIKE '%$searchTerm%' or category LIKE '%$searchTerm%' or supplier_id LIKE '%$searchTerm%' or supplier_name LIKE '%$searchTerm%' or email LIKE '%$searchTerm%' )";

$results = mysqli_query($link, $query);

/* check whethere there were matching records in the table
by counting the number of results returned */

if(mysqli_num_rows($results) >= 1 and $searchTerm != "")
{
	$output = "";
	while($row = mysqli_fetch_array($results))
	{
echo"<font color='white'><h4>";

		$output .= " isbn: " . $row['isbn'] . "<br />";
		$output .= " title: " . $row['title'] . "<br />";
		$output .= "author: " . $row['author'] . "<br />";
		$output .= "year: " . $row['year'] . "<br />";
		$output .= " category: " . $row['category'] . "<br />";
		$output .= " supplier_id: " . $row['supplier_id'] . "<br />";
		$output .= "supplier_name: " . $row['supplier_name'] . "<br />";
		$output .= "email: " . $row['email'] . "<br />";		
echo"<h4></font> ";
	}
	echo $output;
	echo "<br><a href='index1.php?page=carian'>Back</a>";
}
if(mysqli_num_rows($results) == 0 )
{
	echo "<font color='#663300'><h3>No record for '' $searchTerm ''</font></h3> <br><a href='index1.php?page=carian'>Back</a>";
}
?>      
<!***************** close searching ***********************>

      
</body>
</html>