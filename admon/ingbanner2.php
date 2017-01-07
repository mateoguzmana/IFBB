<?
session_start();
if (empty($_SESSION['sesion']))
{
header("Location: index.php");
}

include("conexion.php");
include("resize-class.php");

$Nombre			=		$_REQUEST["Nombre"];
$Titulo			=		$_REQUEST["Titulo"];
$Texto			=		$_REQUEST["Texto"];
$Pos			=		$_REQUEST["Pos"];


$sql="INSERT INTO  Banner (Nombre, Titulo, Texto, Pos)";
$sql.= "VALUES ('$Nombre', '$Titulo', '$Texto', '$Pos')";
mysql_query($sql);


$query="SELECT* FROM Banner Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

$archivo1 = $_FILES['file1']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../slider/".$foto1));



$query="UPDATE Banner set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);

/*
	// *** 1) Initialise / load image
	$resizeObj = new resize("../slider/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(1600, 500, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../slider/".$foto1, 100);
	*/
	
	// *** 1) Initialise / load image
	$resizeObj = new resize("../slider/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(800, 300, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../slider/p/".$foto1, 100); 
}





?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('banner.php');

</script>

