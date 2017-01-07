<?
include("conexion.php");
include("resize-class.php");

$Nombre			=		$_REQUEST["Nombre"];
$Pos			=		$_REQUEST["Pos"];


$sql="INSERT INTO  Internas (Nombre)";
$sql.= "VALUES ('$Nombre')";
mysql_query($sql);


$query="SELECT* FROM Internas Order By Id Asc";
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

(copy($archivo1, "../Internas/".$foto1));



	$query="UPDATE Internas set Foto='$foto1' Where Id='$Id'";
	$result=mysql_query($query, $id);


	// *** 1) Initialise / load image
	$resizeObj = new resize("../Internas/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(800, 800, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Internas/".$foto1, 100);
	
	
}





?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('fotosinternas.php');

</script>

