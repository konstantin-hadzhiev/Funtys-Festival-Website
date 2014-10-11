<?php
session_start();
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

<script src="jqueryInfo.js"> </script>
<script src="jqueryInfo2.js"> </script>
<script src="jqueryInfo3.js"> </script>
<script src="jqueryInfo4.js"> </script>
<script src="jqueryInfo5.js"> </script>
<script src="jqueryInfo6.js"> </script>
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
	<div id="title"><h2>Information</div>
	
		<h3 id="flip"> Funtysland Opening hours:</h3> 	
		
		<br /><p id="panel">Friday 26 July 2013:12h00 - 01h00 <br/>
Saturday 27 July 2013:12h00 - 01h00 <br/>
Sunday 28 July 2013:12h00 - 00h00<br/>
Friday 26th – Saturday 27th – It will be possible to check in until 22:00. After this time access will be denied.<br/>
Sunday 28th July - It will be possible to check in until 21:00. After this time access will be denied.<br/>
Camping Opening hours: <br/>
The camping is open from Thursday 25 July 2013 until Monday 29 July 2013<br/>
Check In:<br/>
24 HOUR check in available from 11am Thursday & all day Friday<br/>
Thursday 25 July 2013: from 11h00 (NOT earlier) <br/>
Friday 26 July 2013: 24 hours<br/>
Saturday 27 July 2013: possible until 12h00 (later only possible at Main Entrance The camping)<br/>
Sunday 28 July 2013: Only at Main Entrance The camping<br/>
Please note it will not be possible to check in before 11am on Thursday 25th July.<br/>
Everyone must check out by 14h00 on Monday 29th July.<br/>
</P>

<h3 id="flip2"> Location</h3> 	
		
		<br /><p id="panel2">Funtysland takes place on camping Valkenhof in Westerbork.<br />
The town of Westerbork is situated in Netherlands, between Groningen & Zwolle.<br/>
</P>

<h3 id="flip3"> Ticket Sale</h3> 	
		
		<br /><p id="panel3">The Worldwide official ticket sale starts at 17h00 on Saturday 16 February 2013. (CET = Central European Time)

Global Journey Packages (Worldwide) will be available from 17h00 on 14 February 2013. (CET = Central European Time)

The travel packages presented by our Official External Travel Partners can be bought directly with the partner from 17h00 on Saturday 16 February. (CET = Central European Time)<br/>
</P>
<h3 id="flip4"> Online Registration & Ticket Ordering</h3> 	
		
		<br /><p id="panel4"> ATTENTION! In order to be eligible for the Funtysland Presale and buy your ticket to this year’s festival you MUST complete the registration. If you have not registered before presale opens you will not be able to access the Tomorrowland ticket page. Important: Registration does not guarantee you a ticket.

All tickets are strictly personal. After making your purchase you must be able to register every ticket with the correct name of each individual ticketholder.

<br />
Registration process:<br />
<b>STEP 1:</b>Personal registration
(Name, Surname, Date of Birth, Country)
<b>STEP 2:</b> Ticket purchase<br />
<i>Please check the different types of tickets available prior to this so that you do not select the wrong ticket.</i>
<br/><b>STEP 3:</b> Ticket payment – you must pay for your ticket within 2 weeks or your order will be cancelled and your tickets will go back on sale.
Once payment has been completed you will receive a confirmation e-mail. This is e-mail is confirmation of your payment. It is <b>NOT </b>your ticket and you will not be able to use it to gain access to the festival.
</P>
<h3 id="flip5"> Your Festival Bracelet</h3> 	
		
		<br /><p id="panel5">Starting this year you will now receive your personal festival bracelet at home.; reducing entrance queues and thus making entry to Tomorrowland and Dreamville more convenient.

This will be a unique bracelet and will be used for access to the festival and campsites. You will not need 2 separate bracelets for festival and camping.

Your bracelet will be sent to the address registered during ticket purchase. We are not able to send bracelets to a Postbox address.<br/>
</P>  

<h3 id="flip6"> General Conditions</h3> 	
		
		<br /><p id="panel6"> When ordering your ticket you MUST agree with the general conditions. If you do not agree, you won’t be able to buy a ticket.<br/>
</P> 
</div>
	
<div id="footer">
 <table style="width:680px;margin:0 auto;">
  <tr>
   <td align="left"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFuntysFestival2013&amp;width=220&amp;height=62&amp;show_faces=false&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px; height:62px;" allowTransparency="true"></iframe></td><td><h3 style="color:white;">Copyright &#169; 2013  Funtys Mind Ltd.</h3></td><td><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/FuntysFestival">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td></tr></table>
   
 
 
 </footer>	
	
	
	</body>
</html>