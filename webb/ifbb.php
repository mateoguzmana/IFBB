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
    <header id="header">
    <?include("_includes/header.php");?>
    </header>
  <!--Header-->
 <div class="breadcrumb-sec align-left" style="background: url(assets/extra-images/breadcrumb-bg2.png) no-repeat; background-size:cover; height:137px;">
	      <div class="container">
	        <div class="pageinfo">
	          <div class="cs-table">
	            <h1>IFBB - COLOMBIA</h1>
	          </div>
	        </div>
	      </div>
	    </div>
  <!-- Main Start -->
  <div id="main">
    <div class="page-section" style="padding-top:10px;">
      <div class="container">
        <div class="row">
        
          
          
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="cs-tabs">
       
						
            <div role="tabpanel"> 
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
                <?
                $queryRR   =  "SELECT * FROM Empresa ORDER BY Pos LIMIT 1";
                $resultRR  =  mysql_query($queryRR,$id);

                while($rowRR  =  mysql_fetch_array($resultRR)){

                $IdRR      =  $rowRR["Id"];  

                }


                $query     =  "SELECT * FROM Empresa ORDER BY Pos";
                $result    =  mysql_query($query,$id);

                while($row = mysql_fetch_array($result)){

                $Id        = $row["Id"];
                $Nombre    = $row["Nombre"];
                $Pos       = $row["Pos"];
                if($Id==$IdRR){
                $Active = "active";
                }else{
                $Active="";  
                }
                ?>
								<li role="presentation" class="<?=$Active?>"><a href="#<?=$Id?>" aria-controls="<?=$Id?>" role="tab" data-toggle="tab"><i class="fa fa-clipboard"></i><?=$Nombre?></a></li>                
                <?}?>            
							</ul>
							<!-- Tab panes -->
							<div class="tab-content cs-tab-content">
              <?
              $query2     =  "SELECT * FROM Empresa ORDER BY Pos";
              $result2    =  mysql_query($query2,$id);

              while($row2 = mysql_fetch_array($result2)){

              $Id2        = $row2["Id"];
              $Texto      = $row2["Texto"];
              $Foto       = $row2["Foto"];
              $Archivo    = $row2["Archivo"];
              $Pos2       = $row2["Pos"];

              if($Id2==$IdRR){
              $Active2 = "active";
              }else{
              $Active2="";  
              }
              ?>
                <div role="tabpanel" class="tab-pane <?=$Active2?>" id="<?=$Id2?>">
								     <img style="border:4px solid #e5e5e5; border-radius: 10px;" width="100%" src="../Empresa/<?=$Foto?>"/>
                      <div style="padding:15px 0px;">
						            <div class="stripe-line"></div>
					             </div>
                      <?=$Texto?>

                <?if(!empty($Archivo)){?><iframe src="../Empresa/l/<?=$Archivo?>?zoom=100" style="width:100%; height:1190px; margin-top:5px;" frameborder="0"></iframe><?}?>
							  </div>
               <?}?> 
                                    
							</div>
						</div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
					
					
           
           </div>
           
          </div>
         
        
      </div>
    </div>
	</div>
   
  
  </div>
  
  
  <?
  include("_includes/patrocinadores.php");
  ?>
  
  
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