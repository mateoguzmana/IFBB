<?
include("_includes/conexion.php");
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
    
     
    
     <div  class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="cs-main-logo"><div class="cs-logo"> <a href="index.html"><img src="assets/images/logo.png" alt=""/></a> </div></div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
              <div class="cs-top-links-strip">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="cs-top-text"> Federación Internacional de Fisicoculturismo - Colombia
 </div></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                  <ul class="nav cs-navbar-top-links navbar-right">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-facebook"></i> Facebook</span> </a></li>
                    <!-- /.dropdown -->
                   
                   
                      <!-- /.dropdown-alerts --> 
                    </li>
                  
                  </ul>
                </div>
              </div>
              
              
              <div id="trueHeader">
              
              <!--MENU-->
              <?
              include("_includes/menu.php");
              ?>
              <!--FIN MENU-->
              
              </div>
            </div>
          </div>
        </div>
      </div>

	
    
    
    </header>
	<!-- Header End -->
	<div class="breadcrumb-sec align-left" style="background: url(assets/extra-images/breadcrumb-bg2.png) no-repeat; background-size:cover; height:137px;">
	      <div class="container">
	        <div class="pageinfo">
	          <div class="cs-table">
	            <h1>Reglamentos - Formatos</h1>
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
							
							
								<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 
                                 
                           
		  
				
								<?
								$query  	=  "SELECT * FROM ReglamentoM ORDER BY Pos";
								$result 	=  mysql_query($query,$id);

								while($row  =  mysql_fetch_array($result)){

								$Nombre     =  $row["Nombre"];
								$Archivo    =  $row["Archivo"];
								
								?>
                    			<div class="call-actions ac-modren">
									<div class="inner-sec" style="background: url(assets/extra-images/bg-cell-action.jpg) no-repeat 0 0 / cover;">
										<div class="cell call-icon">
											<i class="icon-help"></i>
										</div>
										<div class="cell heading">
											<div class="ac-text">
												<h5><?=$Nombre?></h5>
											</div>
										</div>
										<div class="cell call-btn">
											<a target="_blank" href="../Reglamento/m/<?=$Archivo?>"><i class="fa fa-file-text"></i> Ampliar</a>
										</div>
									</div>
                        		</div>
                       			<?}?>
                        
				
			
		
		 
                                 
								</div>
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
									<li > <i class="fa fa-check-square-o"></i>  <a href="reglamentos.html">Físico Culturismo y Fitness</a>  </li>
								
									
                                       <li class="active1" > <i class="fa fa-check-square-o"></i> <a href="formatos.html">Formatos</a></li>
                               <li> <i class="fa fa-check-square-o"></i> <a href="infografias.html">Infografías</a></li>
								
								</ul>
							</div>
                            
                            
                             <div class="widget widget-recentpost">
                      <div class="widget-section-title">
                        <h6>Noticias Recientes</h6>
                        <div class="stripe-line"></div>
                      </div>
                      <div>
                         <figure><img src="assets/extra-images/recentpost1.png" alt=""></figure>
                         <div class="cs-text">
                          <h6><a href="detalles.html">Resultados Arnold Amateur Ohio 2016</a></h6>
                          <time datetime="2011-01-12"> <i class="fa fa-clock-o"></i>Marzo 24, 2016</time>
                         </div>
                      </div>
                      <div>
                         <figure><img src="assets/extra-images/recentpost2.png" alt=""></figure>
                         <div class="cs-text">
                          <h6><a href="detalles.html">Programa de competencias Arnold Amateur ohio 2016</a></h6>
                          <time datetime="2011-01-12"> <i class="fa fa-clock-o"></i>Marzo 24, 2016</time>
                         </div>
                      </div>
                      <div>
                         <figure><img src="assets/extra-images/recentpost3.png" alt=""></figure>
                         <div class="cs-text">
                          <h6><a href="detalles.html">Reporte de inspección del Arnold Classic Amateur Ohio 2016</a></h6>
                         <time datetime="2011-01-12"> <i class="fa fa-clock-o"></i>Marzo 24, 2016</time>
                         </div>
                      </div>
                      <div>
                         <figure><img src="assets/extra-images/recentpost4.png" alt=""></figure>
                         <div class="cs-text">
                          <h6><a href="detalles.html">Open Internacional Clásico Paisa 2016</a></h6>
                          <time datetime="2011-01-12"> <i class="fa fa-clock-o"></i>Marzo 24, 2016</time>
                         </div>
                      </div>
                    </div>
                            
                            
							  <div class="widget widget-event">
								<div class="widget-section-title">
									<h6>Próximos Eventos</h6>
									<div class="stripe-line"></div>
								</div>
								<div>
									<div class="cs-date"> <span>19</span> <em>FEB</em> </div>
									<div class="cs-text">
										<h6><a target="_blank" href="assets/extra-images/pdf.pdf">Open Internacional Clasico Paisa</a></h6>
										<time datetime="2011-01-12"> <span>08:00AM a 01:00pm</span> </time>
										<address>
										 <span>Febrero 19 al 21 de 2016<br>
										Medellin, Colombia</span>
										</address>
										<a target="_blank" href="assets/extra-images/pdf.pdf" class="map-btn">ver <i class="fa fa-play"></i></a> 
									</div>
								</div>
								<div>
									<div class="cs-date"> <span>3</span> <em>MAR</em> </div>
									<div class="cs-text">
										<h6><a target="_blank" href="assets/extra-images/pdf.pdf">Arnold Amateur Ohio 2016</a></h6>
										<time datetime="2011-01-12"> <span>08:00AM a 01:00pm</span> </time>
										<address>
										  <span>Marzo 3 - 6 de 2016<br>Columbus, Ohio </span>
										</address>
										<a target="_blank" href="assets/extra-images/pdf.pdf" class="map-btn">ver <i class="fa fa-play"></i></a> 
									</div>
								</div>
								<div>
									<div class="cs-date"> <span>1</span> <em>ABR</em> </div>
									<div class="cs-text">
										<h6><a target="_blank" href="assets/extra-images/pdf.pdf">Arnold Amateur Brasil 2016</a></h6>
										<time datetime="2011-01-12"> <span>08:00AM a 01:00pm</span> </time>
										<address>
										 <span>Abril 1 - 3 de 2016<br>
										Rio de Janeiro Brasil</span>
										</address>
										<a target="_blank" href="assets/extra-images/pdf.pdf" class="map-btn">ver <i class="fa fa-play"></i></a> 
									</div>
								</div>
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