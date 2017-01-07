<?
include("conexion.php");


$Id				=		$_REQUEST["Id"];


$SQL2="Delete From Categoriasregla Where Id='$Id'";
mysql_query($SQL2);	

$SQL2="Delete From Reglamentos Where Idcat='$Id'";
mysql_query($SQL2);


?>


<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('categoriasr.php');

</script>


