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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/css/iconmoon.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/widget.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/countdown.demo.css" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/css/font-awesome.css"/>
<link rel="stylesheet" href="assets/css/css/font-awesome.min.css"/>

<link href="assets/scripts/mainmenu/sticky.css" rel="stylesheet">
    
    
    <link href="assets/css/rtl.css" rel="stylesheet">
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
              <h1>Noticias</h1>
            </div>
          </div>
        </div>
      </div>
      <div>
     
      </div>
      <div id="main">
      	 <div class="container">
              <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                	<div class="cs-blog blog-medium blog-small">
                        <div class="row">
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

                          $query      =  "SELECT * FROM Noticias ORDER BY Pos";
                          $result     =  mysql_query($query,$id);

                          while($row  =  mysql_fetch_array($result)){

                          $Id         =  $row["Id"];
                          $Nombre     =  $row["Nombre"];
                          $Texto      =  $row["Texto"];
                          $Foto       =  $row["Foto"];
                          $Archivo    =  $row["Archivo"];
                          $Fecha      =  $row["Fecha"];


                          $TextoR     = recortar_texto($Texto, 200);
                          ?>
                          <div class="blog-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-media has-shadow">
                              <figure><a href="detalles.php?Id=<?=$Id?>"><img src="../Noticias/p/<?=$Foto?>" alt=""></a>
                               <figcaption><a href="detalles.php?Id=<?=$Id?>"><i class="fa fa-plus-circle"></i></a></figcaption>
                              </figure>
                            </div>
                            <div class="cs-blog-text">
                            <div class="cs-info-post">
                              <ul>
                               <li><i class="fa fa-clock-o"></i><span><?=$Fecha?></span></li>
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
              <aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              	<div class="page-sidebar">
                  
                   
                 
                   <div class="widget widget-event">
								<div class="widget-section-title">
									<h6>Próximos Eventos</h6>
									<div class="stripe-line"></div>
								</div>
                <?
                $query2     =  "SELECT * FROM EventosC ORDER BY Pos LIMIT 4";
                $result2    =  mysql_query($query2,$id);

                while($row2 =  mysql_fetch_array($result2)){

                $Nombre     =  $row2["Nombre"];
                $Fecha      =  $row2["Fecha"];
                $Lugar      =  $row2["Lugar"];
                $Archivo2   =  $row2["Archivo"];
                $Id2        =  $row2["Id"];
                ?>
								<div>
									<!--<div class="cs-date"> <span>19</span> <em>FEB</em> </div>-->
									<div class="cs-text">
										<h6><a target="_blank" href="../Eventos/c/<?=$Archivo2?>"><?=$Nombre?></a></h6>
										<!--<time datetime="2011-01-12"> <span>08:00AM a 01:00pm</span> </time>-->
										<address>
										 <span><?=$Fecha?><br>
										<?=$Lugar?></span>
										</address>
										<a target="_blank" href="../Eventos/c/<?=$Archivo2?>" class="map-btn">ver <i class="fa fa-play"></i></a> 
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
      
      
      
<?
    include("_includes/patrocinadores.php");
?>
      
      
      
    <?
    include("_includes/footer.php");
    ?>
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