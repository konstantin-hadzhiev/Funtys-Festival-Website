<meta http-equiv="content-type" content="text/html;>
<META HTTP-EQUIV="refresh"
CONTENT="2;URL=index.php">
<?php
require 'config2.php';


$id = $_GET['id'];
$code = $_GET['code'];

if ($id&&$code)
{

       $check = mysql_query("SELECT * FROM users1 WHERE id='$id' AND random='$code'");
       $checknum = mysql_num_rows($check);
		
	
       if ($checknum==1)
       {
          //run a query to activate the account
          $acti = mysql_query("UPDATE users1 SET activated='1' WHERE id='{$id}'");
		  $website = "http://athena.fhict.nl/users/i272798/tester2/index.php";
          echo "You successfully activated your account! Click <a href='{$website}'>here</a> to continue!";
		  die();
         
       }
       else
           die("Your activation code is not valid!");


}
else
    die("Missing data!");
?>