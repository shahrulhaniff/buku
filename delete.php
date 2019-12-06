<?php
include "server.php";
$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM book WHERE id='".$id."' ";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data Deleted');document.location.href='retrieve.php'</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>