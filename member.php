<?php


//ob
ob_start();
session_start();



$session_email= $_SESSION['email'];


if(!isset($session_email))
{
	header("Location:error.php");
	exit();
}
 else

{
     require "config2.php";

	$query = mysql_query("SELECT * FROM users1 WHERE email = '".$session_email."'");
	$row = mysql_fetch_array($query);
	$id = $row['id'];
	$query2 = mysql_query("SELECT * FROM eventaccount WHERE idEventAccount = '".$id."'");
	$row2 = mysql_fetch_array($query2);
	

	
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
        <?php if(!isset($_SESSION['email'])){
        echo "<li><a href='ticketdeal.php'>Profile</a></li>";}
		else { echo "<li><a href='member.php'>Profile</a></li>";} ?>
        <li><a href="camping.php">Camping</a></li>
        <li><a href="faq.php">FAQ</a></li>
		
    </ul>
    <div class="clear"></div>
</div>
<div id="logo"><a href="index.php"><img src="img/logo.jpg"></a></div>
<div id="cont">
	<div id="title"><h2>Profile</div>
	<div id="profile">
	<table width="400" align="center" cellspacing="30">
	<h3 align="center" >Hello, <?php echo $row['firstname'];  ?></h3>
	<tr>
	<td>Ticket Payment</td>
	<td><?php if($row2['Paid']==0) {
	echo "No! ";}
	else {echo "Yes!";} ?></td>
	</tr>
	<tr>
	<td>Balance</td>
	<td><?php echo $row2['balance'];?></td>
	</tr>
	<tr>
	<td>Camping</td>
	<td><?php if($row2['CampingSpot_camping_spot_id']==null) {
	echo "No! ";}
	else {echo "Yes!";} ?></td>
	</tr>
	<tr>
	<td>Camping ID</td>
	<td><?php echo $row2['CampingSpot_camping_spot_id']; ?></td>
	</tr>

	
	</table>
	
	<center><a href="passchange.php"> Click here to change your password!</a><br/></center>
	<center><a href="logout.php"><input type="submit" name="logout" value="Logout" class="btn"></a></center>
	
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