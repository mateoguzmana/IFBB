<?
include("conexion.php");
include("resize-class.php");

date_default_timezone_set("America/Bogota");


$Fecha 		= 		date('Y-m-d');

$Nombre		=		$_REQUEST["Nombre"];
$Texto		=		$_REQUEST["Texto"];


$sql="INSERT INTO  Noticias (Nombre, Texto, Fecha, Pos)";
$sql.= "VALUES ('$Nombre', '$Texto', '$Fecha', '$Pos')";
mysql_query($sql);


$query="SELECT* FROM Noticias Order By Id Asc";
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

(copy($archivo1, "../Noticias/".$foto1));

$query="UPDATE Noticias set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);



	// *** 1) Initialise / load image
	$resizeObj = new resize("../Noticias/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(950, 395, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Noticias/g/".$foto1, 100);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../Noticias/".$foto1);
	
	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(230, 175, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../Noticias/p/".$foto1, 100);
	
	
	
}





if(!empty($archivo2))
{
$foto0= $Id.".".$ext2;


(copy($archivo2, "../Noticias/l/".$foto0));

$query="UPDATE Noticias set Archivo='$foto0' Where Id='$Id'";
$result=mysql_query($query, $id);
}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('noticias.php');

</script>

