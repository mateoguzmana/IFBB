<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
include("resize-class.php");

$Id				=		$_REQUEST["Id"];
$Nombre			=		$_REQUEST["Nombre"];
$Titulo			=		$_REQUEST["Titulo"];
$Texto			=		$_REQUEST["Texto"];
$Idcat			=		$_REQUEST["Idcat"];

$query="UPDATE Imagenes set Nombre='$Nombre', Titulo='$Titulo', Texto='$Texto', Idcat='$Idcat' Where Id= '$Id' ";
$result=mysql_query($query, $id);

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../Imagenes/".$foto1));



$query="UPDATE Imagenes set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../Imagenes/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(715, 315, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../Imagenes/g/".$foto1, 100);
	
	
	// *** 1) Initialise / load image
	$resizeObj = new resize("../Imagenes/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(372, 241, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../Imagenes/p/".$foto1, 100);
}





?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('imagenes.php');

</script>

