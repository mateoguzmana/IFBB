<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Id				=		$_REQUEST["Id"];
$Fb				=		$_REQUEST["Fb"];
$Tw				=		$_REQUEST["Tw"];
$Yt				=		$_REQUEST["Yt"];
$Rs				=		$_REQUEST["Rs"];
$Fl				=		$_REQUEST["Fl"];
$It 			=       $_REQUEST["It"];

$query="UPDATE Redes set Fb='$Fb', Tw='$Tw', Yt='$Yt', It='$It' Where Id= '$Id' ";
$result=mysql_query($query, $id);


?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	location.href=('actredes.php');

</script>

