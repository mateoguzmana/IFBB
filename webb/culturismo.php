<?
include("_includes/conexion.php");

$Id   =    $_REQUEST["Id"];

$queryR     =  "SELECT * FROM Reglamentos WHERE Idcat='$Id'";
$resultR    =  mysql_query($queryR,$id);

while($rowR =  mysql_fetch_array($resultR)){

$NombreR    =  $rowR["Nombre"];

                  
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

 <style type="text/css">
    #mapa { height: 300px; }
    </style>

 
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
	<!-- Header Start -->
	  <header  id="header">
    <?include("_includes/header.php");?>
    </header>
	<!-- Header End -->
	<div class="breadcrumb-sec align-left" style="background: url(assets/extra-images/breadcrumb-bg2.png) no-repeat; background-size:cover; height:137px;">
	      <div class="container">
	        <div class="pageinfo">
	          <div class="cs-table">
              
              
                <div style="float:right; margin-top:-0px;" class="button-style"> <a href="reglamentos.php" class="continue-btn">Volver</a> </div>
             <div style="float:left;">    <h1>REGLAMENTOS  - <?=$NombreR?></h1></div>
              
              
	         
	          </div>
	        </div>
	      </div>
	    </div>
	<!-- Main Start -->
	<div id="main">
		<div class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="div-content">
							<div class="row">
								
							  <?
                $query  =  "SELECT * FROM Reglamentos WHERE Idcat='$Id'";
                $result =  mysql_query($query,$id);

                while($row =  mysql_fetch_array($result)){

                $Archivo   =  $row["Archivo"];
                ?>
								<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               
                   <iframe src="../Reglamentos/<?=$Archivo?>" style="width:100%; height:1190px; margin-top:5px;" frameborder="0"></iframe>
                                 
								</div>
                <?}?>
							</div>
						</div>
					</div>
					<aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="page-sidebar">
							<div class="widget widget-categories">
								<div class="widget-section-title">
									<h3>Reglamentos</h3>
                                <div class="stripe-line"></div>
								</div>
								<ul>
									<li class="active1" > <i class="fa fa-check-square-o"></i>  <a href="reglamentos.php">Físico Culturismo y Fitness</a>  </li>
								
                                       <li> <i class="fa fa-check-square-o"></i> <a href="formatos.php">Formatos</a></li>
                               <li> <i class="fa fa-check-square-o"></i> <a href="infografias.php">Infografías</a></li>
								
								</ul>
							</div>
                            
                            
                                
                            
                            
                            
                            
						  <div class="widget widget-event">
                <div class="widget-section-title">
                  <h6>Próximos Eventos</h6>
                  <div class="stripe-line"></div>
                </div>
                <?
                $query2     =  "SELECT * FROM EventosC ORDER BY Pos LIMIT 3";
                $result2  =  mysql_query($query2,$id);

                while($row2 =  mysql_fetch_array($result2)){

                $Fecha      =  $row2["Fecha"];
                $Nombre     =  $row2["Nombre"];
                $Lugar      =  $row2["Lugar"];
                $Archivo    =  $row2["Archivo"]; 

                ?>
                <div>
                  <!--<div class="cs-date"><?=$Fecha?></div>-->
                  <div class="cs-text">
                    <h6><a target="_blank" href="../Eventos/c/<?=$Archivo?>"><?=$Nombre?></a></h6>
                    <!--<time datetime="2011-01-12"> <span>08:00AM a 01:00pm</span> </time>-->
                    <address>
                     <span><?=$Fecha?><br>
                    <?=$Lugar?></span>
                    </address>
                    <a target="_blank" href="../Eventos/c/<?=$Archivo?>" class="map-btn">ver <i class="fa fa-play"></i></a> 
                  </div>
                </div>
                <?}?>
              </div>
                            
                            
                             <div class="widget widget-recentpost">
                      <div class="widget-section-title">
                        <h6>Noticias Recientes</h6>
                        <div class="stripe-line"></div>
                      </div>
                      <?
                      $query3      =  "SELECT * FROM Noticias ORDER BY Pos LIMIT 4";
                      $result3     =  mysql_query($query3,$id);

                      while($row3  =  mysql_fetch_array($result3)){

                      $Id3         =  $row3["Id"];
                      $Nombre3     =  $row3["Nombre"];
                      $Texto3      =  $row3["Texto"];
                      $Foto3       =  $row3["Foto"];
                      $Archivo3    =  $row3["Archivo"];
                      ?>
                      <div>
                         <figure><img src="../Noticias/p/<?=$Foto3?>" alt=""></figure>
                         <div class="cs-text">
                          <h6><a href="detalles.php?Id=<?=$Id3?>"><?=$Nombre3?></a></h6>
                          <!--<time datetime="2011-01-12"> <i class="fa fa-clock-o"></i>Marzo 24, 2016</time>-->
                         </div>
                      </div>
                      <?}?>
                    </div>
                  
                        
                        
                        
						</div>
                        
                        
                        
                        
                        
                        
                        
                        
					</aside>
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