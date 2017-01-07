<?
include("conexion.php");
include("resize-class.php");

$Nombre		=		$_REQUEST["Nombre"];
$Link		=		$_REQUEST["Link"];


$sql="INSERT INTO  Patrocinadores (Nombre, Link, Pos)";
$sql.= "VALUES ('$Nombre', '$Link', '$Pos')";
mysql_query($sql);


$query="SELECT* FROM Patrocinadores Order By Id Asc";
$result=mysql_query($query, $id);

While($row=mysql_fetch_array($result))
{
$Id=$row["Id"];
}

$archivo1 = $_FILES['file1']['tmp_name'];
$archivo3 = $_FILES['file2']['tmp_name'];

$archiv			=			$_FILES['file1']['name'];
$extension 		= 			explode(".",$archiv);
$ext			= 			$extension[1];


$archiv2		=			$_FILES['file2']['name'];
$extension2 	= 			explode(".",$archiv2);
$ext2			= 			$extension2[1];




if(!empty($archivo1))
{
$foto1= $Id.".".$ext;

(copy($archivo1, "../Patrocinadores/".$foto1));

$query="UPDATE Patrocinadores set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);



	// *** 1) Initialise / load image
	$resizeObj = new resize("../Patrocinadores/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(300, 200, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Patrocinadores/g/".$foto1, 100);

	// *** 1) Initialise / load image
	$resizeObj = new resize("../Patrocinadores/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(200, 80, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Patrocinadores/p/".$foto1, 100);

	
	
}









?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('patrocinadores.php');

</script>

