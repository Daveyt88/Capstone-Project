<?php
session_start();
 
$dbhost = "mysql8.000webhost.com";
$dbname= "a7301978_team1";
$dbuser = "a7301978_root";
$dbpass = "Gallaudet.15";
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>