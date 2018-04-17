<div class="container" style="margin-top: 50px; margin-bottom: 20px;" align="justify">
	<h3>Midias</h3>
	<br>
		<ul class="list-group">
			<?php 
				foreach ($midias as $midia) {
			 ?>
			 <li class="list-group-item d-flex justify-content-between align-items-center">
				<?php echo $midia->titulo; ?>
				
			
		  
		    
		    <a href="<?php echo $midia->link; ?>"><span class="btn btn-neppe badge-pill">Acessar</span></a>
		  </li>
		<?php } ?>
		
		</ul>
	</div>