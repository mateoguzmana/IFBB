<?
include("_includes/conexion.php");

$query   =  "SELECT * FROM Contacto";
$result  =  mysql_query($query,$id);

while($row  =  mysql_fetch_array($result)){

$Texto      =  $row["Texto"]; 
$Mapa       =  $row["Mapa"]; 
$Ciudad     =  $row["Ciudad"]; 
$Tel1       =  $row["Tel1"]; 
$Tel2       =  $row["Tel2"]; 
$Email      =  $row["Email"];

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
<link href="haider.css" rel="stylesheet">
<link href="assets/css/menu.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/widget.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/css/font-awesome.css"/>
<link rel="stylesheet" href="assets/css/css/font-awesome.min.css"/>

<link href="assets/scripts/mainmenu/sticky.css" rel="stylesheet">


<!-- Carousle CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>

<!-- Counter CSS -->
<link rel="stylesheet" href="assets/css/countdown.demo.css" type="text/css">
<link rel="stylesheet" href="assets/css/responsiveslides.css">
<!--<link rel="stylesheet" href="assets/css/demo.css">-->
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
<!--Main Wrapper-->
<div class="wrapper wrapper_boxed">
    <!--Header-->
    
    <!--Header-->
    <header  id="header">
    <?include("_includes/header.php");?>
    </header>
    <!--Header-->
    <!--Header-->
     <div class="breadcrumb-sec align-left" style="background: url(assets/extra-images/breadcrumb-bg2.png) no-repeat; background-size:cover; height:137px;">
        <div class="container">
          <div class="pageinfo">
            <div class="cs-table">
              <h1>Contacto</h1>
            </div>
          </div>
        </div>
      </div>

  <div id="main"> 
   
  
    <div class="page-section" style="margin-bottom:30px;">
      <div class="container">
        <div class="row">
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="cs-contact-page ">
                      <div class="cs-section-title">
                        <h2>Información de Contacto</h2>
                        <div class="stripe-line"></div>
                      </div>
                    <ul class="list-address">
                    
                    
                    
                          <li>
                            <ul>
                            
                                <li><i class="fa fa-map-o"></i></li>
                                <li>
                                    <div class="right-text-services">
                                        <h6>Dirección</h6>
                                        <p><?=$Texto?></p>
                                    </div>
                                </li>
                            </ul>
                            
                          </li>
                          
                          <li>
                            <ul>
                                <li><i class="fa fa-phone"></i></li>
                                <li>
                                    <div class="right-text-services">
                                        <h6>Teléfono</h6>
                                        <p><?=$Tel1?></p>
                                    </div>
                                </li>
                            </ul>
                          </li>
                          
                          
                          <li>
                            <ul>
                                <li><i class="fa fa-mobile"></i></li>
                                <li>
                                    <div class="right-text-services">
                                    <h6>Celular</h6>
                                    <p><?=$Tel2?></p>
                                    </div>
                                </li>
                            </ul>
                          </li>
                         
                          <li>
                            <ul>
                                <li><i class="fa fa-envelope-o"></i></li>
                                <li>
                                    <div class="right-text-services">
                                        <h6>Email </h6>
                                        <p><a href="#"><?=$Email?></a></p>
                                    </div>
                                </li>
                            </ul>
                          </li>
                        </ul>
                </div>    
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="contact-map">
                  <div class="cs-section-title">
                        <h2>Localización</h2>
                        <div class="stripe-line"></div>
                  </div>
                  <div class="map-section">
                  <?=$Mapa?>
                  </div>
                </div>  
            </div>
        </div>
      </div>
    </div>

 

  <div class="page-section" style="background:url(assets/images/contact-form-bg.jpg) no-repeat scroll 0 0; background-size:cover; padding-top:50px;padding-bottom:20px;">
  <div class="container">
  	<div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<div class="full-heading">
              <h2 style="font-size:24px;text-transform: uppercase; text-align:center;">Solicitar Información</h2>
           
              <span class="divider-1"></span>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
           <div class="cs-contact-form">
            <form class="contact-form-fields">
    	<div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            	<label>Nombre <span>(Requerido)</span></label>
            	<input type="text" id="name" class="form-control" required>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            	<label>Email <span>(Requerido)</span></label>
            	<input type="text" id="email" class="form-control" required>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            	<label>Asunto <span>(Requerido)</span></label>
            	<input type="text" id="subject" class="form-control" required>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<label>Mensaje <span>(Requerido)</span></label>
            	<textarea id="description" class="form-control" rows="6"></textarea>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="top-padding">
                    <button type="submit" class="btn btn-default cs-bgcolor">Enviar</button> <span class="button-text"></span>
                </div>    
            </div>
        </div>
    </form>
    		</div>
        </div>
    </div>
  </div>  
</div>
  </div>
<?include("_includes/patrocinadores.php");?>



  <!-- Main End --> 
  <!-- Footer Start -->
  <?
  include("_includes/footer.php");
  ?>
  <!-- Footer End --> 
</div> 
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