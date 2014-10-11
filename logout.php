<?php session_start(); ?>
<META HTTP-EQUIV="refresh"
CONTENT="0.2;URL=index.php">
<?php

 
  
  session_destroy();
   echo '<script language="javascript">alert("You have successfully logged out!")</script>'; 
?>