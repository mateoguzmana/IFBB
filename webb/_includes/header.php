	<?
  include("conexion.php");

  $queryX      =  "SELECT * FROM Redes";
  $resultX     =  mysql_query($queryX,$id);

  while($rowX  =  mysql_fetch_array($resultX)){

  $Fb          =  $rowX["Fb"];

  } 

  $query2      =  "SELECT * FROM Espacios";
  $result2     =  mysql_query($query2,$id);

  while($row2  =  mysql_fetch_array($result2)){

  $Titulo      =  $row2["Nombre1"];
  $Logo        =  $row2["Foto"];

  }
  ?>
  <header  id="header">
    
     <div  class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="cs-main-logo">
            
            <div class="cs-logo"> <a href="index.php"><img src="../../Logo/<?=$Logo?>" alt=""/></a> </div>
            
            
            </div>
          </div>
          
          
          
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">
              <div class="cs-top-links-strip">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="cs-top-text"> <?=$Titulo?>
 </div></div>
 
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                  <ul class="nav cs-navbar-top-links navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" onclick="window.open('<?=$Fb?>');"><i class="fa fa-facebook"></i> Facebook</span> </a></li>
                    <!-- /.dropdown -->
                   
                   
                      <!-- /.dropdown-alerts --> 
                    </li>
                  
                  </ul>
                </div>
              </div>
              
             
              <div id="trueHeader">
              
			  <!--MENU-->
              <?
              include("menu.php");
              ?>
              <!--FIN MENU-->

              </div>
            </div>
          </div>
        </div>
      </div>

	
    
    </header>