<?php
$db_conn = mysql_connect("athena.fhict.nl", "dbi280354", "TSqFNx9GUT") or die("no connection with the DB");
mysql_select_db("dbi280354", $db_conn) or die("i cannot select a db");
?>