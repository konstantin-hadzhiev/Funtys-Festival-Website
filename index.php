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
<link rel="stylesheet" type="text/css" href="engine1/style.css" />

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
	
<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/above.jpg" alt="Above & Beyond" title="Above & Beyond" id="wows1_0"/>Genre : Trance
Country : England</li>
<li><img src="data1/images/armin.jpg" alt="Armin Van Buuren" title="Armin Van Buuren" id="wows1_1"/>Genre : Trance
Country : Netherlands</li>
<li><img src="data1/images/cs.jpg" alt="Chase & Status" title="Chase & Status" id="wows1_2"/>Genre : Trance
Country : England</li>
<li><img src="data1/images/dash.jpg" alt="Dash Berlin" title="Dash Berlin" id="wows1_3"/>Genre : Trance
Country : Netherlands</li>
<li><img src="data1/images/dennis.jpg" alt="Dennis Sheperd" title="Dennis Sheperd" id="wows1_4"/>Genre : Trance
Country : Germany</li>
<li><img src="data1/images/ferry.jpg" alt="Ferry Corsten" title="Ferry Corsten" id="wows1_5"/>Genre : Trance
Country : Netherlands</li>
<li><img src="data1/images/markus.jpg" alt="Markus Schulz" title="Markus Schulz" id="wows1_6"/>Genre : Trance
Country : USA</li>
<li><img src="data1/images/tiesto.jpg" alt="Tiesto" title="Tiesto" id="wows1_7"/>Genre : Trance
Country : Netherlands</li>
<li><img src="data1/images/tritonal.jpg" alt="Tritonal" title="Tritonal" id="wows1_8"/>Genre : Trance
Country : USA</li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Above & Beyond"><img src="data1/tooltips/above.jpg" alt="Above & Beyond"/>1</a>
<a href="#" title="Armin Van Buuren"><img src="data1/tooltips/armin.jpg" alt="Armin Van Buuren"/>2</a>
<a href="#" title="Chase & Status"><img src="data1/tooltips/cs.jpg" alt="Chase & Status"/>3</a>
<a href="#" title="Dash Berlin"><img src="data1/tooltips/dash.jpg" alt="Dash Berlin"/>4</a>
<a href="#" title="Dennis Sheperd"><img src="data1/tooltips/dennis.jpg" alt="Dennis Sheperd"/>5</a>
<a href="#" title="Ferry Corsten"><img src="data1/tooltips/ferry.jpg" alt="Ferry Corsten"/>6</a>
<a href="#" title="Markus Schulz"><img src="data1/tooltips/markus.jpg" alt="Markus Schulz"/>7</a>
<a href="#" title="Tiesto"><img src="data1/tooltips/tiesto.jpg" alt="Tiesto"/>8</a>
<a href="#" title="Tritonal"><img src="data1/tooltips/tritonal.jpg" alt="Tritonal"/>9</a>
</div></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>

</div>
	
	<div id="footer">
 <table style="width:680px;margin:0 auto;">
  <tr>
   <td align="left"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFuntysFestival2013&amp;width=220&amp;height=62&amp;show_faces=false&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px; height:62px;" allowTransparency="true"></iframe></td><td><h3 style="color:white;">Copyright &#169; 2013  Funtys Mind Ltd.</h3></td><td><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/FuntysFestival">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td></tr></table>
   
 
 
 </footer>	
	
	
	</body>
</html>