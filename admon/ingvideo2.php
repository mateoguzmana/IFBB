<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
include("resize-class.php");

$Nombre			=		$_REQUEST["Nombre"];
$Video			=		$_REQUEST["Video"];


$sql="INSERT INTO  Videos (Nombre, Video)";
$sql.= "VALUES ('$Nombre', '$Video')";
mysql_query($sql);


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('videos.php');

</script>

