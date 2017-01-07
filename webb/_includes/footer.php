<?
include("conexion.php");
$query     = "SELECT * FROM Footer";
$result    = mysql_query($query,$id);

while($row = mysql_fetch_array($result)){

$Texto 	   = $row["Texto"];

}

$query2    = "SELECT * FROM Redes";
$result2   = mysql_query($query2,$id);

while($row2= mysql_fetch_array($result2)){

$Fb        = $row2["Fb"];
$Tw        = $row2["Tw"];
$Yt        = $row2["Yt"];
$RS        = $row2["RS"];         
$FI        = $row2["FI"];
$It 	   = $row2["It"];

}
?>
  <footer id="footer">
	    <article class="footer-links">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-6">
	            <p><?=$Texto?></p>
	          </div>
	          <div class="col-md-6">
	            <div class="social-media">
	              <h6>Síguenos en</h6>
	              <ul class="tt-wrapper">
	                <li><a class="fa fa-facebook tt-facebook" data-original-title="Facebook" target="_blank" href="<?=$Fb?>"><span>Facebook</span></a></li>
	                <li><a class="fa fa-twitter" data-original-title="Twitter" target="_blank" href="<?=$Tw?>"><span>Twitter</span></a></li>
	                <li><a class="fa fa-instagram" data-original-title="Instagram" target="_blank" href="<?=$It?>"><span>Instagram</span></a></li>
	                <li><a class="fa fa-youtube" data-original-title="Youtube-Play" target="_blank" href="<?=$Yt?>"><span>Youtube<br></span></a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </article>
   </footer>