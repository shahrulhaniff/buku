<?php
include "server.php";

$id = $_POST['id'];
$title = $_POST['title'];
$name = $_POST['name'];
$author = $_POST['author'];

$sql = "
UPDATE book 
SET 

name='".$name."', 
title='".$title."',
author='".$author."' 

WHERE id='".$id."'"
;

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
	echo "<script>alert('Data Updated');document.location.href='retrieve.php'</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>