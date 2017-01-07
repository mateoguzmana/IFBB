<?
include("conexion.php");
include("resize-class.php");

$Nombre		=		$_REQUEST["Nombre"];
$Texto		=		$_REQUEST["Texto"];
$Fecha		=		$_REQUEST["Fecha"];


$sql="INSERT INTO  Publicaciones (Nombre, Texto, Fecha)";
$sql.= "VALUES ('$Nombre', '$Texto', '$Fecha')";
mysql_query($sql);


$query="SELECT* FROM Publicaciones Order By Id Asc";
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




if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../Publicaciones/".$foto1));

$query="UPDATE Publicaciones set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);



	// *** 1) Initialise / load image
	$resizeObj = new resize("../Publicaciones/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(950, 395, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Publicaciones/g/".$foto1, 100);


	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(230, 175, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../Publicaciones/p/".$foto1, 100);
	
	
	
}





if(!empty($archivo2))
{
$foto0= $Id.".".$ext2;


(copy($archivo2, "../Publicaciones/l/".$foto0));

$query="UPDATE Publicaciones set Archivo='$foto0' Where Id='$Id'";
$result=mysql_query($query, $id);
}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('publicaciones.php');

</script>

