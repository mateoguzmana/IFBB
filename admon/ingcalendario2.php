<?
include("conexion.php");
include("resize-class.php");

$Nombre		=		$_REQUEST["Nombre"];
$Fecha		=		$_REQUEST["Fecha"];
$Lugar		=		$_REQUEST["Lugar"];


$sql="INSERT INTO  EventosC (Nombre, Fecha, Lugar)";
$sql.= "VALUES ('$Nombre', '$Fecha', '$Lugar')";
mysql_query($sql);


$query="SELECT* FROM EventosC Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

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


(copy($archivo2, "../Eventos/c/".$foto0));

$query="UPDATE EventosC set Archivo='$foto0' Where Id='$Id'";
$result=mysql_query($query, $id);
}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('calendario.php');

</script>

