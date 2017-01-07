<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Nombre			=		$_REQUEST["Nombre"];
$Fecha			=		$_REQUEST["Fecha"];
$Lugar			=		$_REQUEST["Lugar"];


$query="UPDATE ReglamentoI set Nombre='$Nombre' Where Id= '$Id' ";
$result=mysql_query($query, $id);


$archivo1 = $_FILES['file1']['tmp_name'];
$archivo2 = $_FILES['file2']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


$archiv2		=			$_FILES['file2']['name'];
$extension2 	= 			explode(".",$archiv2);
$ext2			= 			$extension2[1];









if(!empty($archivo2))
{
$foto0= $Id.".".$ext2;


(copy($archivo2, "../Reglamento/i/".$foto0));

$query="UPDATE ReglamentoI set Archivo='$foto0' Where Id='$Id'";
$result=mysql_query($query, $id);
}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('infografia.php');

</script>

