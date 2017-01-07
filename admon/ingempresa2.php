<?
include("conexion.php");
include("resize-class.php");

$Nombre		=		$_REQUEST["Nombre"];
$Texto		=		$_REQUEST["Texto"];


$sql="INSERT INTO  Empresa (Nombre, Texto, Pos)";
$sql.= "VALUES ('$Nombre', '$Texto', '$Pos')";
mysql_query($sql);


$query="SELECT* FROM Empresa Order By Id Asc";
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

(copy($archivo1, "../Empresa/".$foto1));

$query="UPDATE Empresa set Foto='$foto1' Where Id='$Id'";
$result=mysql_query($query, $id);



	// *** 1) Initialise / load image
	$resizeObj = new resize("../Empresa/".$foto1);

	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(950, 395, 'auto');

	// *** 3) Save image
	$resizeObj -> saveImage("../Empresa/g/".$foto1, 100);


	// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
	$resizeObj -> resizeImage(230, 175, 'crop');

	// *** 3) Save image
	$resizeObj -> saveImage("../Empresa/p/".$foto1, 100);
	
	
	
}





if(!empty($archivo2))
{
$foto0= $Id.".".$ext2;


(copy($archivo2, "../Empresa/l/".$foto0));

$query="UPDATE Empresa set Archivo='$foto0' Where Id='$Id'";
$result=mysql_query($query, $id);
}
?>

<script type="text/javascript">

	alert('La operacion se realizo con exito.');
	parent.location.href=('empresa.php');

</script>

