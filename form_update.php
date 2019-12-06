<?php
$id = $_GET['id'];
$title = $_GET['title'];
$name = $_GET['name'];
$author = $_GET['author'];
?>
<table>
<tr>
<form action="update.php" method="POST">
<tr><td>id</td><td>:</td>
<td><?=$id?><input type="hidden" name="id" value="<?=$id?>" readonly></td></tr>
<tr><td>title</td><td>:</td>
<td><input type="text" name="title" value="<?=$title?>"></td></tr>
<tr><td>name</td><td>:</td>
<td><input type="text" name="name" value="<?=$name?>"></td></tr>
<tr><td>author</td><td>:</td>
<td><input type="text" name="author" value="<?=$author?>"></td></tr>
<tr>
<td colspan="3" align="right"><input type="submit"></td>
</tr>
</form>

</table>