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
<script type="text/javascript">
function validate()
{
        var password=document.getElementById("password").value
        var at=document.getElementById("email").value.indexOf("@");
        var dot=document.getElementById("email").value.indexOf(".");
        submitOK="true";

        if (at==-1) //kalau x isi, dia pgg -1
        {
        alert("Not a valid e-mail, @ missing!");
        submitOK="false";
        }        
        else
                if (dot==-1)
                {
                alert("Not a valid e-mail, dot missing!");
                submitOK="false";
                }
                
        if (password<1)
        {
        document.getElementById("password").select();
        alert("Your must enter your password !");
        submitOK="false";
        }
                
        if (submitOK=="false")  //selagi salah 3 syarat ni, dia xkn msk ke database
        {
        return false;  //kalau salah dia stay dlm form ni kalau betul mskkan header location..^^
        }
}
</script>
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
                        <a href="index.php">Welcome</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Sign in
                        <strong>to BookSys</strong>
                    </h2>
                    <hr>
					<center>
<form action="login2.php" onsubmit="return validate()" method="POST">
<table width="550" border="0" cellpadding="0" cellspacing="0" align="center">
                <tr>
                        <td width="50"></td>
                        <td width="500" align="center" valign="top">

                                        
                                <table cellpadding="0" width="500" border="0" align="center">
                                <br></br>
                                        <tr>
                                                <td class="fontblack" width="150" align="left">Email:</td>
                                                <td width="500" align="center">
                                                <input name="email" id="email" type="text" maxlength="50" placeholder="Email"        class="form-control">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="fontblack"  width="150" height="25" align="left">Password:</td>
                                                <td width="500" height="25" align="center">
                                                <label class="hidden-label" for="Passwd"></label>
                                                <input name="password" id="password" type="password" maxlength="23"        placeholder="Password" class="form-control">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="fontblack"  width="150" height="25" align="left">Reenter Password:</td>
                                                <td width="500" height="25" align="center">
                                                <label class="hidden-label" for="Passwd"></label>
                                                <input name="repassword" id="repassword" type="password" maxlength="23"        placeholder="Repassword" class="form-control">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="fontblack" width="150" height="18"></td>
                                                <td width="400" height="18"></td>
                                        </tr>
                                                
                                </table>
                                
                                <div align="center">
                                        <button onclick="validate()">Submit</button>
                                        <br><br>
                                                <?php
                                                        if (isset($_GET['msg'])){
                                                                echo $_GET['msg'];
                                                        }
                                                ?>
                                </div>
                                <div align="center"><center></center></div>
                        </td>
                </tr>
</table>
        <input type="hidden" name="MM_insert" value="signupForm">
</form>
					</center>
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
