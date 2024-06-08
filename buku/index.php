<html>
<title>MyBook System</title>
<head>

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
<body leftmargin="8" topmargin="0" marginwidth="0" marginheight="0" >

<form action="login2.php" onsubmit="return validate()" method="POST">
<table width="550" border="0" cellpadding="0" cellspacing="0" align="center">
                <tr>
                        <td width="50"></td>
                        <td width="500" align="center" valign="top">
                        <p>&nbsp;</p>
                        <table width="500" border="0">
                                <tr>
                                        <td class="titlered" align="center" width="100%" height="30">ACCOUNT LOGIN</td>
                        </tr>
                        </table>
                                        
                                <table cellpadding="0" width="500" border="0" align="center">
                                <br></br>
                                        <tr>
                                                <td class="fontblack" width="150" align="left">Email:</td>
                                                <td width="500" align="center">
                                                <input name="email" id="email" type="text" maxlength="50" placeholder="Email"        class="">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="fontblack"  width="150" height="25" align="left">Password:</td>
                                                <td width="500" height="25" align="center">
                                                <label class="hidden-label" for="Passwd"></label>
                                                <input name="password" id="password" type="password" maxlength="23"        placeholder="Password" class="">
                                                </td>
                                        </tr>
                                        <tr>
                                                <td class="fontblack"  width="150" height="25" align="left">Reenter Password:</td>
                                                <td width="500" height="25" align="center">
                                                <label class="hidden-label" for="Passwd"></label>
                                                <input name="repassword" id="repassword" type="password" maxlength="23"        placeholder="Repassword" class="">
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
</body>
</html>