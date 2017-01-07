<?
include("conexion.php");
include("resize-class.php");

$Texto			=		$_REQUEST["Texto"];
$Id				=		$_REQUEST["Id"];
$Mapa			=		$_REQUEST["Mapa"];
$Ciudad			=		$_REQUEST["Ciudad"];
$Tel1			=		$_REQUEST["Tel1"];
$Tel2			=		$_REQUEST["Tel2"];
$Email			=		$_REQUEST["Email"];


$query="UPDATE Contacto set Texto='$Texto', Mapa='$Mapa' , Ciudad='$Ciudad' , Tel1='$Tel1' , Tel2='$Tel2' , Email='$Email' Where Id= '$Id' ";
$result=mysql_query($query, $id);

?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('contacto.php');

</script>

