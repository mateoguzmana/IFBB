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
$Pos			=		$_REQUEST["Pos"];

$query="UPDATE Categorias set Nombre='$Nombre', Titulo='$Titulo', Texto='$Texto', Pos='$Pos' Where Id= '$Id' ";
$result=mysql_query($query, $id);

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../Categorias/".$foto1));



$query="UPDATE Categorias set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../Categorias/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(715, 315, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../Categorias/g/".$foto1, 100);
	
	
	// *** 1) Initialise / load image
	$resizeObj = new resize("../Categorias/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(300, 180, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../Categorias/p/".$foto1, 100);
}





?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('cats.php');

</script>

