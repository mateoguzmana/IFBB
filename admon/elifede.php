<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];

$query008="SELECT* FROM Federaciones where Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Foto1		=	$row008["Foto"];
		$Archivo	=	$row008["Archivo"];
		
		if (!empty($Foto1))
		{
		unlink('../Federaciones/'.$Foto1);
		unlink('../Federaciones/p/'.$Foto1);
		}
		
		if (!empty($Archivo))
		{
		unlink('../Federaciones/l/'.$Archivo);
		}
		
}

$SQL2="Delete From Federaciones Where Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('federaciones.php');

</script>


