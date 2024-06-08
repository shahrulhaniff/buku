<?php
session_start();
//connect db
        $con=mysqli_connect("localhost","root","","miss");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$x=$_POST['email'];
$y=$_POST['password'];
$z=$_POST['repassword'];
$q="SELECT * FROM account WHERE A_Email like '$x'"; 

// SQL statement
$result=mysqli_query($con,$q);
$ada=mysqli_num_rows($result);

//kalu ada dalam database
if($ada>0){
        $row = mysqli_fetch_array($result);
        $pass2 = $row['A_Password'];
                
        if(($pass2 == $y) && ($pass2 == $z))
         {   
           header('Location: index1.php?page=utama');  
           }
        else
        if (($pass2 == $y) || ($pass2 == $z))
           { 
           header('Location: index.php?msg=Your Password does not match . Please try again.');
           }
        else
        if ($y!=$pass2){ 
            header('Location: index.php?msg=Your password are wrong. Try again.');
                }
}
 else {
            header('Location: index.php?msg=You are not a member. Please register first.');
			echo "tak jadi";
        }
?>
