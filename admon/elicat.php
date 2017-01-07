<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");


$Id				=		$_REQUEST["Id"];

$query008="SELECT* FROM Categorias where Id = '$Id' " ;
$result008=mysql_query($query008, $id);

While($row008=mysql_fetch_array($result008))
{
		$Foto1		=	$row008["Foto"];
		
		if (!empty($Foto1))
		{
		unlink('../Categorias/'.$Foto1);
		unlink('../Categorias/p/'.$Foto1);
		}
}

$SQL2="Delete From Categorias Where Id='$Id'";
mysql_query($SQL2);	




?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('cats.php');

</script>

