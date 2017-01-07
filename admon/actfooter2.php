<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Id				=		$_REQUEST["Id"];
$Texto			=		$_REQUEST["Texto"];

$query="UPDATE Footer set Texto='$Texto' Where Id= '$Id' ";
$result=mysql_query($query, $id);


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	location.href=('footer.php');

</script>

