<?php
$dbhost							= "localhost";
$dbuser							= "username";
$dbpass							= "password";
$dbname							= "databasename";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");
mysql_select_db($dbname);
?>
