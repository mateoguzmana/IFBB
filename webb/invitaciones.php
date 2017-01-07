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

 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
	  <header id="header">
    <?include("_includes/header.php");?>
    </header>
	<!-- Header End -->
	<div class="breadcrumb-sec align-left" style="background: url(assets/extra-images/breadcrumb-bg2.png) no-repeat; background-size:cover; height:137px;">
	      <div class="container">
	        <div class="pageinfo">
	          <div class="cs-table">
	            <h1>EVENTOS - INVITACIONES</h1>
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
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="map-area">
									 <div id="mapa"></div>
									</div>
								</div>
							
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-events list">
                                        <?
                                        $query     =  "SELECT * FROM EventosI ORDER BY Pos";
                                        $result    =  mysql_query($query,$id);

                                        while($row =  mysql_fetch_array($result)){

                                        $Nombre    =  $row["Nombre"];
                                        $Fecha     =  $row["Fecha"];
                                        $Lugar     =  $row["Lugar"];
                                        $Archivo   =  $row["Archivo"];  
                                        ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="inner-sec">
                                                <figure> <a target="_blank" href="../Eventos/c/<?=$Archivo?>"><img src="assets/extra-images/event-list4.jpg" alt="#"></a>
                                                    <figcaption><a target="_blank" href="../Eventos/c/<?=$Archivo?>"><i class="fa fa-ticket"></i></a></figcaption>
                                                </figure>
                                                <div class="cs-text">
                                                    <ul class="post-options">
                                                        <li><i class="fa fa-clock-o"></i><?=$Fecha?></li>
                                                    </ul>
                                                    <h2><a target="_blank" href="../Eventos/i/<?=$Archivo?>"><?=$Nombre?></a></h2>
                                                    <div class="cs-author-sec">
                                                      
                                                       
                                                            <h6>Lugar: <?=$Lugar?> </h6>
                                                        
                                                    </div>
                                                </div>
                                                <div class="cs-share-post"> <a target="_blank" href="../Eventos/i/<?=$Archivo?>"><i class="fa fa-map-o"></i></a> </div>
                                            </div>
                                        </div>
                                        <?}?>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					<aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="page-sidebar">
							<div class="widget widget-categories">
								<div class="widget-section-title">
									<h3>Eventos</h3>
                                <div class="stripe-line"></div>
								</div>
								<ul>
										<li  > <i class="fa fa-check-square-o"></i>  <a href="calendario.php">Calendario</a>  </li>
									<li > <i class="fa fa-check-square-o"></i>  <a href="resultados.php">Resultados</a>  </li>
									<li class="active1"> <i class="fa fa-check-square-o"></i>  <a href="invitaciones.php">Invitaciones</a>  </li>
								
								</ul>
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
                      $Fecha2      =  $row3["Fecha"];
                      ?>
                      <div>
                         <figure><img src="../Noticias/p/<?=$Foto3?>" alt=""></figure>
                         <div class="cs-text">
                          <h6><a href="detalles.php?Id=<?=$Id3?>"><?=$Nombre3?></a></h6>
                          <time datetime="<?=$Fecha2?>"> <i class="fa fa-clock-o"></i><?=$Fecha2?></time>
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
    
    
<?
    include("_includes/patrocinadores.php");
?>
    
    
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


 <script type="text/javascript">
    function initialize() {
      var marcadores = [
        ['Columbus, Ohio', 39.959, -83.003],
        ['Rio de Janeiro', -22.854, -43.247],
		 ['Colombia, Medellín', 6.251268, -75.567212],
      
      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 2,
        center: new google.maps.LatLng(6.251268, -75.567212),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>

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