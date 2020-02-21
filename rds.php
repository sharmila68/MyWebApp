<!DOCTYPE html>
<html>
<body>

<h1>RDS db</h1>

<?php

<?php 
$username = "admin"; 

$password = "password"; 

$hostname = "workshop.cmkzognajsuy.ap-southeast-1.rds.amazonaws.com"; 

$dbname = "workshop";


//connection to the database

$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

echo "Connected to MySQL using username - $username, password - $password, host - $hostname<br>"; 

$selected = mysql_select_db("$dbname",$dbhandle)   or die("Unable to connect to MySQL DB - check the database name and try again."); 

?>

</body>
</html>

