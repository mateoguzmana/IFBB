<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Id				=		$_REQUEST["Id"];

$Nombre1		=		$_REQUEST["Nombre1"];
$Texto1			=		$_REQUEST["Texto1"];
$Link1			=		$_REQUEST["Link1"];

$Nombre2		=		$_REQUEST["Nombre2"];
$Texto2			=		$_REQUEST["Texto2"];
$Link2			=		$_REQUEST["Link2"];

$Nombre3		=		$_REQUEST["Nombre3"];
$Texto3			=		$_REQUEST["Texto3"];
$Link3			=		$_REQUEST["Link3"];

$query="UPDATE Espacios set Nombre1='$Nombre1', Texto1='$Texto1', Link1='$Link1', Nombre2='$Nombre2', Texto2='$Texto2', Link2='$Link2', Nombre3='$Nombre3', Texto3='$Texto3', Link3='$Link3' Where Id= '$Id' ";
$result=mysql_query($query, $id);


$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];



if(!empty($archivo1))
{
$foto0= $Id.".".$ext;


(copy($archivo1, "../Logo/".$foto0));

$query1="UPDATE Espacios set Foto='$foto0' Where Id='$Id'";
$result1=mysql_query($query1, $id);
}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	location.href=('espacios.php');

</script>

