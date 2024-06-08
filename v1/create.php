<?php
include "server.php";

$id = $_POST['id'];
$title = $_POST['title'];
$name = $_POST['name'];
$author = $_POST['author'];

$sql = "INSERT INTO book ( title, name, author)
VALUES ('".$title."','".$name."','".$author."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo "<script>alert('New record created successfully');document.location.href='retrieve.php'</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
	echo "<script>alert('Book has been added');document.location.href='index.php'</script>";
}

$conn->close();
?>