<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];

$query008="SELECT* FROM Publicaciones where Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Foto1		=	$row008["Foto"];
		$Archivo	=	$row008["Archivo"];
		
		if (!empty($Foto1))
		{
		unlink('../Publicaciones/'.$Foto1);
		unlink('../Publicaciones/p/'.$Foto1);
		}
		
		if (!empty($Archivo))
		{
		unlink('../Publicaciones/l/'.$Archivo);
		}
		
}

$SQL2="Delete From Publicaciones Where Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('publicaciones.php');

</script>


