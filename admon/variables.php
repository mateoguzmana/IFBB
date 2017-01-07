<?
$Title = "SISTEMA DE ADMINISTRACION - csff-ifbb";

$host="localhost";
$user="ifbbcolombia";
$password="u,kDAnmwSaUb";
$database="ifbbcolo_web";
$id=mysql_connect($host,$user, $password);
mysql_select_db($database, $id);


ini_set('memory_limit', "128M"); 
?>