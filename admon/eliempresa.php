<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];

$query008="SELECT* FROM Empresa where Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Foto1		=	$row008["Foto"];
		$Archivo	=	$row008["Archivo"];
		
		if (!empty($Foto1))
		{
		unlink('../Empresa/'.$Foto1);
		unlink('../Empresa/p/'.$Foto1);
		}
		
		if (!empty($Archivo))
		{
		unlink('../Empresa/l/'.$Archivo);
		}
		
}

$SQL2="Delete From Empresa Where Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('empresa.php');

</script>


