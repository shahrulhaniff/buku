<title>MyBook System</title>
<font face="Arial, Helvetica, sans-serif">
<link href="css.css" rel="stylesheet" type="text/css">
<table width="700px" align="center" border="1">
<tr>
<td height="100px">
<img src="image/header.jpg">
</td>
</tr>
<tr>
<td height="25px">
:: <a href="index1.php?page=utama">Home</a> 
:: <a href="index1.php?page=daftar">Create</a> 
:: <a href="index1.php?page=papar">Display</a> 
:: <a href="index1.php?page=kemaskini">Update</a>
:: <a href="index1.php?page=padam">Delete</a> 
:: <a href="index1.php?page=carian">Search</a> 
:: <a href="index1.php?page=logout">Logout</a> 
</td>
</tr>
<tr>
<td height="450px" valign="top">

<?php

if ($_GET['page']=="utama")
{
	include "utama.php";
}

else if ($_GET['page']=="daftar")
{
	include "daftar.php";
}
else if ($_GET['page']=="daftar1")
{
	include "daftar1.php";
}

else if ($_GET['page']=="papar")
{
	include "papar.php";
}

else if ($_GET['page']=="kemaskini")
{
	include "kemaskini.php";
}

else if ($_GET['page']=="kemaskini1")
{
	include "kemaskini1.php";
}

else if ($_GET['page']=="kemaskini2")
{
	include "kemaskini2.php";
}

else if ($_GET['page']=="padam")
{
	include "padam.php";
}

else if ($_GET['page']=="padam1")
{
	include "padam1.php";
}

else if ($_GET['page']=="carian")
{
	include "carian.php";
}

else if ($_GET['page']=="logout")
{
	include "logout.php";
}
?>

</td>
</tr>
<tr>
<td height="20px" align="center" bgcolor="CCCCCC">Universiti Sultan Zainal Abidin<br>Sistem Alumni</td>
</tr>
</table>
</font>