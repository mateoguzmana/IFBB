<?
include("conexion.php");

$Id= $_POST["Id"];
$usuario= $_POST["usuario"];
$contrasena= $_POST["contrasena"];

$query="UPDATE admon set usuario='$usuario', contrasena='$contrasena' Where Id='$Id'";
$result=mysql_query($query, $id);

header("location: administrar.php");
?>