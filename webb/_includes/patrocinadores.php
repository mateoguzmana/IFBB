<?
include("conexion.php");
?>
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
						<?
						$query     = "SELECT * FROM Patrocinadores ORDER BY Pos";
						$result    = mysql_query($query,$id);

						while($row = mysql_fetch_array($result)){

						$Foto 	   = $row["Foto"];

						?>
						<li><img src="../Patrocinadores/p/<?=$Foto?>" alt=""/></li>
						<?}?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>