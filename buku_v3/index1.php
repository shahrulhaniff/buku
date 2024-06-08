<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Book System</div>
    <div class="address-bar">BOOKSYS | VERSION | 3.0</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Book System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index1.php?page=utama">Home</a>
                    </li>
					<li>
                        <a href="index1.php?page=daftar">Create</a>
                    </li>
					<li>
                        <a href="index1.php?page=papar">Display</a>
                    </li>
					<li>
                        <a href="index1.php?page=kemaskini">Update</a>
                    </li>
					<li>
                         <a href="index1.php?page=padam">Delete</a>
                    </li>
					<li>
                        <a href="index1.php?page=carian">Search</a>
                    </li>
					<li>
                        <a href="index1.php?page=logout">Logout</a> 
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



        <div class="row">
            <div class="box">
                <div class="col-lg-12"><center>
				<table border="0" width="700px"> <tr><td height="450px" valign="top">
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
</td></tr></table>				</center>
					</div>
            </div>
        </div>

        

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; BookSys version 3.0</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
