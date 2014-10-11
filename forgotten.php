<?php
//session_start();
require "config2.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; />

		
				
				
	<?php 





if(isset($_POST['send'])) 
{ 
$email = $_POST['email']; 
$checkemail = mysql_query("SELECT username,password FROM users WHERE email='$email'"); 
$row = mysql_fetch_array($checkemail); 
$numrows = mysql_num_rows($checkemail); 
if ($numrows!=0) { 
$name = $row['username']; 
$password = $row['password']; 


$subject = "Your password"; 
$message = "Dear $name, this e-mail has been sent because you have forgotten your password.
Details about your account: 
Username: $name 
Password: $password 

Thank you , 
FUNTYSMIND"; 

mail($email, $subject, $message, "From: <admin@funtysmind.com>nX-Mailer:PHP/" . phpversion()); 
echo "<div style='color:orange'><center><b><u>The password has been sent!</b></u></center></div>"; 
}else{ 
echo "<div style='color:orange'><center><b><u>The email you entered does not exist in our database!</b></u></center></div>"; 
} 
} 
?>  
<span>Enter the email with which you made your registration</span><br /><br> 
<form action="forgotten.php" method="POST"> 
<strong style="color:orange;">E-mail Address:</strong><input type="text" name="email" size="15" /> 
<input type="submit" value="Send password" class="submit" name="send"/></div></center>

	</body>
</html>