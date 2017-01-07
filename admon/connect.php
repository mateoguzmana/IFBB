<?php
$dbhost							= "localhost";
$dbuser							= "ifbbcolombia";
$dbpass							= "u,kDAnmwSaUb";
$dbname							= "ifbbcolo_web";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>