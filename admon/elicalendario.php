<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];

$query008="SELECT* FROM EventosC where Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Archivo	=	$row008["Archivo"];

		
		if (!empty($Archivo))
		{
		unlink('../Eventos/c/'.$Archivo);
		}
		
}

$SQL2="Delete From EventosC Where Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('calendario.php');

</script>


