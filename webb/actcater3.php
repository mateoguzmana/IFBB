<?
include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Nombre			=		$_REQUEST["Nombre"];


$query="UPDATE Categoriasregla set Nombre='$Nombre' Where Id= '$Id' ";
$result=mysql_query($query, $id);


$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];



if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../Categoriasr/".$foto1));

$query="UPDATE Categoriasregla set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);
	
	
}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('categoriasr.php');

</script>

