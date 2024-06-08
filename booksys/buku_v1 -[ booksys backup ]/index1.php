<link href="css.css" rel="stylesheet" type="text/css">
<table width="700px" align="center" border="1">
<tr>
<td height="100px">
<img src="image/header.jpg">
</td>
</tr>
<tr>
<td height="25px">
:: <a href="index1.php?page=main">Main</a> 
:: <a href="index1.php?page=books">Books</a> 
:: <a href="index1.php?page=add_new">Add New Book</a> 
:: <a href="index1.php?page=updateid">Update</a>
:: <a href="index1.php?page=deleteid">Delete</a>
:: <a href="index1.php?page=logout">Logout</a>  
</td>
</tr>
<tr>
<td height="450px" valign="top">

<?php

if ($_GET['page']=="books")
{
	include "books.php";
}

else if ($_GET['page']=="add_new")
{
	include "add_new.php";
}

else if ($_GET['page']=="add_new1")
{
	include "add_new1.php";
}

else if ($_GET['page']=="add_new_s1")
{
	include "add_new_s1.php";
}

else if ($_GET['page']=="add_new_s")
{
	include "add_new_s.php";
}


else if ($_GET['page']=="display")
{
	include "display.php";
}

else if ($_GET['page']=="updateid")
{
	include "updateid.php";
}

else if ($_GET['page']=="update")
{
	include "update.php";
}

else if ($_GET['page']=="update1")
{
	include "update1.php";
}

else if ($_GET['page']=="deleteid")
{
	include "deleteid.php";
}

else if ($_GET['page']=="delete")
{
	include "delete.php";
}



else if ($_GET['page']=="logout")
{
	include "logout.php";
}

else if ($_GET['page']=="main") 
{
	include "main.php";
}
?>

</td>
</tr>
<tr>
<td height="20px" align="center" bgcolor="F3C6CB">@2010 Copyright<br>Universiti Sultan Zainal Abidin<br>Kampus Gong Badak<br>Kuala Terengganu, Terengganu</td>
</tr>
</table>
