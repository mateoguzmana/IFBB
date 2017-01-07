<?
include("_includes/conexion.php");

$Id 		=    $_REQUEST["Id"];

$queryX 	=    "SELECT * FROM Categorias WHERE Id='$Id'";
$resultX	=    mysql_query($queryX,$id);

while($rowX =    mysql_fetch_array($resultX)) {

$NombreC 	=    $rowX["Nombre"];

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IFBB - Colombia</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
<link href="assets/css/iconmoon.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="assets/css/menu.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/widget.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/css/font-awesome.css"/>
<link rel="stylesheet" href="assets/css/css/font-awesome.min.css"/>

<link href="assets/scripts/mainmenu/sticky.css" rel="stylesheet">

<link href="assets/scripts/cuberportfolio/css/lightbox.min.css" rel="stylesheet">





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script> 
<script src="assets/scripts/bootstrap.min.js"></script> 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper wrapper_boxed"> 
  <!--Header-->
    <header  id="header">
    <?include("_includes/header.php");?>
    </header>
  <!--Header-->
   <div class="breadcrumb-sec align-left" style="background: url(assets/extra-images/breadcrumb-bg2.png) no-repeat; background-size:cover; height:137px;">
        <div class="container">
          <div class="pageinfo">
            <div class="cs-table">
              <div style="float:right; margin-top:-0px;" class="button-style"> <a href="galeria.php" class="continue-btn">Volver</a> </div>
             <div style="float:left;"><h1 style="font-size:20px;"><?=$NombreC?></h1></div>
            
            
             
            </div>
          </div>
        </div>
      </div>
  <!-- Main Start -->
  <div id="main">
  
  
 
	<div class="page-section" style="margin-bottom:50px;"><div class="cs-instagram">
			<div class="container">
				<div class="row">
					<div class="col-md-12 cs-insta-holder">
						<div class="row">
							<?
							$query  =   "SELECT * FROM Imagenes WHERE Idcat='$Id' ORDER BY Pos";
							$result =   mysql_query($query,$id);

							while($row  =  mysql_fetch_array($result)){

							$Nombre     =  $row["Nombre"];
							$Foto       =  $row["Foto"];

							
							?>
							<div style="padding-bottom:25px;" class="col-md-3">
								<figure class="cs-all-shadow">
									<div class="view second-effect"> <img src="../Imagenes/<?=$Foto?>" alt="" />
										<div class="mask"> <a class="example-image-link info" href="../Imagenes/<?=$Foto?>" data-lightbox="example-set" data-title=""> Read More</a> </div>
									</div>
								</figure>
							</div>
							<?}?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
  </div>
  </div>
  
  
  
  <div class="page-section" style="margin-bottom:30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cs-client">
						<div class="cs-section-title">
							<h2>PATROCINADORES</h2>
							<div class="stripe-line"></div>
						</div>
						<ul class="client-slider">
							<li><img src="assets/images/logo1.png" alt=""/></li>
                            	<li><img src="assets/images/logo2.png" alt=""/></li>
                                
                                	<li><img src="assets/images/logo3.png" alt=""/></li>
                                    	<li><img src="assets/images/logo1.png" alt=""/></li>
                            	<li><img src="assets/images/logo2.png" alt=""/></li>
                                
                                	<li><img src="assets/images/logo3.png" alt=""/></li>
                                                	<li><img src="assets/images/logo1.png" alt=""/></li>
                            	<li><img src="assets/images/logo2.png" alt=""/></li>
                                
                                	<li><img src="assets/images/logo3.png" alt=""/></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



  <!-- Main End --> 
  <!-- Footer Start -->
  <?
  include("_includes/footer.php");
  ?>
  <!-- Footer End --> 
</div>
<!-- Main End -->

<script type="text/javascript" src="assets/scripts/mainmenu/sticky.js"></script>

<script src="assets/scripts/menu.js"></script>  
<script src="assets/scripts/slick.min.js"></script> 
<script src="assets/scripts/jquery.flexisel.js"></script> 
<script src="assets/scripts/newsTicker.js"></script> 
<script src="assets/scripts/countdown.js"></script>  
<script src="assets/scripts/jquery.jplayer.min.js"></script> 
<script src="assets/scripts/jquery.fitvids.js"></script>
<script src="assets/scripts/counter.js"></script>
<script src="assets/scripts/functions.js"></script>



<script src="assets/scripts/cuberportfolio/js/lightbox-plus-jquery.min.js"></script>




 

<script>eval(mod_pagespeed_btCftwxIbK);</script> 
<script>eval(mod_pagespeed_XnwhkE_TCl);</script> 

<script>eval(mod_pagespeed_4rVNCqfhie);</script> 
<script>eval(mod_pagespeed_MFPItEZlO1);</script> 
<script>eval(mod_pagespeed_aFtvoAhjEn);</script> 
<script>eval(mod_pagespeed_sdhqCJrm74);</script> 
<script>eval(mod_pagespeed_Dv_24lVC3m);</script> 
<script>eval(mod_pagespeed_G9vCqUX6mo);</script>
</body>
</html>