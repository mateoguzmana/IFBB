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
<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>


<link href="style.css" rel="stylesheet">
<link href="assets/css/menu.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/widget.css" rel="stylesheet">
<link href="assets/css/mediaelementplayer.css" rel="stylesheet">
<link href="assets/css/jplayer.blue.monday.min.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">
<!-- Carousle CSS -->
<style>.slick-slider{position:relative;display:block;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:none}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-track,.slick-slider .slick-list{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;top:0;left:0;display:block}.slick-track:before,.slick-track:after{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir="rtl"] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}</style>
<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>
<!-- Counter CSS -->
<link rel="stylesheet" href="assets/css/countdown.demo.css" type="text/css"/>


    <link href="assets/scripts/mainmenu/sticky.css" rel="stylesheet">


<link rel="stylesheet" href="assets/css/css/font-awesome.css"/>
<link rel="stylesheet" href="assets/css/css/font-awesome.min.css"/>
<link rel="stylesheet" href="assets/css/iconmoon.css"/>

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
	<?include("_includes/header.php");?>
	<!--Header-->
	<div class="main-banner">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
				<!-- Slideshow 4 -->
				<div class="callbacks_container">
					<ul class="cs-slides">
						<?
						$queryB			="SELECT* FROM Banner order by Pos" ;
						$resultB		=mysql_query($queryB, $id);

						while($rowB		=mysql_fetch_array($resultB))
						{
						$FotoB			=$rowB["Foto"];
						?>
						<li><img src="../slider/<?=$FotoB?>" alt="">
						<?}?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main"> 
		<!--Main Body Content-->
		
		<div class="page-section" style="padding-top:0; margin-bottom: 30px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-img-frame">
							<div class="carousel-img-box">
								<figure class="img-overlay"> <a href="#"><img src="assets/images/xcarousel_img.jpg" alt=""/></a>
									<div class="img-overlay-text">
										<div class="spliter"></div>
										<h1><a href="ifbb.php">IFBB COLOMBIA</a></h1>
										<div class="spliter"></div>
										<h6><a href="ifbb.php">Conformación</a></h6>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-img-frame">
							<div class="carousel-img-box">
								<figure class="img-overlay"> <a href="#"><img src="assets/images/xcarousel_img1.jpg" alt=""/></a>
									<div class="img-overlay-text">
										<div class="spliter"></div>
										<h1><a href="reglamentos.php">REGLAMENTOS</a></h1>
										<div class="spliter"></div>
										<h6><a href="reglamentos.php">Modalidades y Normas</a></h6>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="cs-img-frame">
							<div class="carousel-img-box">
								<figure class="img-overlay"> <a href="#"><img src="assets/images/xcarousel_img2.jpg" alt=""/></a>
									<div class="img-overlay-text">
										<div class="spliter"></div>
										<h1><a href="calendario.php">EVENTOS</a></h1>
										<div class="spliter"></div>
										<h6><a href="calendario.php">Próximos Eventos</a></h6>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-section" style="margin-bottom:30px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="div-content">
							<div class="row">
							
								<div class=" blog-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="cs-blogpost home-page">
										<div class="cs-section-title">
											<h2>NOTICIAS</h2>
											<div class="stripe-line"></div>
										</div>
										<div class="row">
											<div class="cs-blog blog-medium blog-small padding-bottom-blog">
												<?

												function recortar_texto($texto, $limite=100){	
													$texto = trim($texto);
													$texto = strip_tags($texto);
													$tamano = strlen($texto);
													$resultado = '';
													if($tamano <= $limite){
														return $texto;
													}else{
														$texto = substr($texto, 0, $limite);
														$palabras = explode(' ', $texto);
														$resultado = implode(' ', $palabras);
														$resultado .= '...';
													}	
													return $resultado;
												}


                          						$query      =  "SELECT * FROM Noticias ORDER BY Pos LIMIT 3";
                          						$result     =  mysql_query($query,$id);

                          						while($row  =  mysql_fetch_array($result)){

                          						$Id         =  $row["Id"];
                          						$Nombre     =  $row["Nombre"];
                          						$Texto      =  $row["Texto"];
                          						$Foto       =  $row["Foto"];
                          						$Archivo    =  $row["Archivo"];
                          						$FechaN 	=  $row["Fecha"];


												$TextoR 	= recortar_texto($Texto, 200);

                          						?>
												<div class=" blog-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="cs-media has-shadow">
														<figure><a href="detalles.php?Id=<?=$Id?>"><img src="../Noticias/p/<?=$Foto?>" alt=""></a>
															<figcaption><a href="detalles.php?Id=<?=$Id?>"><i class="fa fa-plus-circle"></i></a></figcaption>
														</figure>
													</div>
													<div class="cs-blog-text">
														<div class="cs-info-post">
															<ul>
																<li><i class="fa fa-clock-o"></i><span><?=$FechaN?></span></li>
															</ul>
														</div>
														<h5><a href="detalles.php?Id=<?=$Id?>"><?=$Nombre?></a></h5>
														<?=$TextoR?>
														<!--<div class="cs-post-options">
															<ul>
															<li><i class="fa fa-clipboard"></i>Publicado en: <a href="#">Noticias, Body Fitness</a></li>
															</ul>
														</div>-->
													</div>
												</div>
												<?}?>
											</div>
										</div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<aside class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
						<div class="div-sidebar">
							
							
							<div class="widget widget-event">
								<div class="widget-section-title">
									<h6>Próximos Eventos</h6>
									<div class="stripe-line"></div>
								</div>
								<?
								$query2     =  "SELECT * FROM EventosC ORDER BY Pos LIMIT 3";
								$result2 	=  mysql_query($query2,$id);

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
						
                        <div class="widget widget-sermon">
								<div class="widget-section-title">
								
									<div class="stripe-line"></div>
								</div>
								<div class="sermon-content bg-color">
									<?
									$queryS   	 =  "SELECT * FROM Videos ORDER BY Pos LIMIT 1";
									$resultS  	 =  mysql_query($queryS,$id);

									while($rowS  =  mysql_fetch_array($resultS)){
									$NombreV 	 =  $rowS["Nombre"];
									$Video 		 =  $rowS["Video"];
									}
									?>
									<figure>
										<?=$Video?>
									</figure>
									<h6><?=$NombreV?></h6>
									<!--<time datetime="2011-01-12"><i class=" fa fa-clock-o"></i>Marzo 23, 2016</time>-->
								</div>
								<ul class="post-detail" style="background-color:#600008; text-align:center;">
									
									<li><a href="videos.php"><i class="fa fa-clipboard"></i>AMPLIAR VIDEOS</a></li>
									<!--<li><a href="#"><i class=" fa fa-download"></i>Descargar</a></li>-->
								</ul>
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
	<?
  	include("_includes/footer.php");
  	?>
</div>



<script type="text/javascript" src="assets/scripts/mainmenu/sticky.js"></script>

<script src="assets/scripts/menu.js"></script><script>eval(mod_pagespeed_btCftwxIbK);</script> 
<script>eval(mod_pagespeed_XnwhkE_TCl);</script> 
<script src="assets/scripts/jquery.flexisel.js"></script> 
<script src="assets/scripts/newsTicker.js"></script><script>eval(mod_pagespeed_4rVNCqfhie);</script> 
<script>eval(mod_pagespeed_MFPItEZlO1);</script> 
<script src="assets/scripts/jquery.jplayer.min.js"></script><script>eval(mod_pagespeed_aFtvoAhjEn);</script> 
<script>eval(mod_pagespeed_sdhqCJrm74);</script> 
<script>eval(mod_pagespeed_Dv_24lVC3m);</script> 
<script>eval(mod_pagespeed_G9vCqUX6mo);</script>
</body>
</html>