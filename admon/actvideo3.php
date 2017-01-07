<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Nombre			=		$_REQUEST["Nombre"];
$Video			=		$_REQUEST["Video"];
$Pos			=		$_REQUEST["Pos"];

$query="UPDATE Videos set Video='$Video', Nombre='$Nombre', Pos='$Pos' Where Id= '$Id' ";
$result=mysql_query($query, $id);


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('videos.php');

</script>

