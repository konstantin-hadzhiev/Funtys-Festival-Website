<?php


ob_start();
session_start();



if (isset($_POST['login'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);



	if ($email&&$password)
	{
		require 'config2.php';


	$query = mysql_query("SELECT * FROM users1 WHERE email='$email'");

	$numrows = mysql_num_rows($query);

	if ($numrows!=0)
	{

	  while($row = mysql_fetch_assoc($query))
	  {
		$dbemail = $row['email'];
		$dbpassword = $row['password'];
		$activated = $row['activated'];
		
		if ($activated=='0')
			die ("You have not activated your account! Please ckeck your e-mail for the activation code!");
	  }


	  if ($email==$dbemail&&$password==$dbpassword)
	  {
		$_SESSION['email']=$email;
	  
	    /* $query = mysql_query("SELECT firstname FROM users1 WHERE email='$dbemail'"); */
		/*  echo "You have successfully logged in as $email! Please click <a href='member.php'>here</a> to continue!"; */ 
		 header("Location:member.php"); 
	  /* exit(); */
		 
	  }
	  else
		  header("Location:wrongpass.php");
		  

	}

	 else
		 header("Location:invaliduser.php");


	}
	else
		header("Location:enteruserpassword.php");
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<!-- rounded corners for IE -->
<script src="DD_roundies_0.0.2a-min.js"></script>
<script>
DD_roundies.addRule("#nav", "5px");
DD_roundies.addRule("#nav li", "5px");
</script>
<script>
$(document).ready(function(){
	$nav_li=$("#nav li");
	$nav_li_a=$nav_li.children("a");
	var animSpeed=450; //fade speed
	var hoverTextColor="#fff"; //text color on mouse over
	var hoverBackgroundColor="#9e0039"; //background color on mouse over
	var textColor=$nav_li_a.css("color");
	var backgroundColor=$nav_li.css("background-color");
	$nav_li_a.hover(function() {
		var $this=$(this);
		$this.stop().animate({ color: hoverTextColor }, animSpeed).parent().stop().animate({ backgroundColor: hoverBackgroundColor }, animSpeed);
	},function() {
		var $this=$(this);
		$this.stop().animate({ color: textColor }, animSpeed).parent().stop().animate({ backgroundColor: backgroundColor }, animSpeed);
	});
});
</script>
</head>
<body>



<div id="nav">
	<ul>
		<li><a href="info.php">Info</a></li>
        <li><a href="Line-up.php">LineUp</a></li>
		<li><a href="form.php">Buy A Ticket</a></li>
        <li><a href="ticketdeal.php">Profile</a></li>
        <li><a href="camping.php">Camping</a></li>
        <li><a href="faq.php">FAQ</a></li>
		
    </ul>
    <div class="clear"></div>
</div>
<div id="logo"><a href="index.php"><img src="img/logo.jpg"></a></div>
<div id="cont">
	<div id="title"><h2>Log In</div>
	<div>
	
	<form action="ticketdeal.php" method="post">
	<table cellspacing="20">
	<h3 align="center">Hello! Please Log In to continue!</h3>
	<tr>
	
		<td>E-mail: </td><td><input type="text" name="email"  class="bg"  ></td>		
		</tr>
		<tr>
		<td>Password: </td><td><input type="password" name="password" size="40" maxlength="40" class="bg"></td>	
		
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login" value="Login" class="btn" style="margin-left:60px;"></td></td>
		
		</tr>
		<tr>
			<td></td>
			<td><a href="passforgot.php"> Forgot your password?</a>
		<br/>
			<a href="form.php"> Don`t have a ticket?</a></td>
		</tr>
			
			
	</table>
	</form>
	
	</div>
	</div>


</div>
	
<div id="footer">
 <table style="width:680px;margin:0 auto;">
  <tr>
   <td align="left"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFuntysFestival2013&amp;width=220&amp;height=62&amp;show_faces=false&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px; height:62px;" allowTransparency="true"></iframe></td><td><h3 style="color:white;">Copyright &#169; 2013  Funtys Mind Ltd.</h3></td><td><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/FuntysFestival">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td></tr></table>
   
 
 
 </footer>	
	
	
	</body>
</html>