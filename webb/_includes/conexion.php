<?

$host="localhost";
$user="ifbbcolombia";
$password="u,kDAnmwSaUb";
$database="ifbbcolo_web";
$id=mysql_connect($host,$user, $password);
mysql_select_db($database, $id);

mysql_query("SET CHARACTER SET utf8 ");
mysql_select_db($database, $id);
?>