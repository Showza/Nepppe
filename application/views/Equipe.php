<div class="container" style="margin-top: 30px; margin-right: 30px;">
		<div class="row">
			<div class="col">
				<p><h3>Pesquisadores</h3></p>
				<ul>
					<?php
					  $this->db->where('categoria', "Pesquisador");
                      $query = $this->db->get('pessoas');
                      foreach ($query->result() as $row) {
                    ?>
					<li><?php echo $row->nome . " - "; echo $row->departamento . " - "; ?> <a href="<?php echo $row->curriculo ;?>">lattes</a></li>	
					<?php } ?>	
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p><h3>Alunos de mestrado</h3></p>
				<ul>
					<?php
					  $this->db->where('categoria', "Mestrando");
                      $query = $this->db->get('pessoas');
                      foreach ($query->result() as $row) {
                    ?>
					<li><?php echo $row->nome . " - "; echo $row->departamento . " - "; ?> <a href="<?php echo $row->curriculo ;?>">lattes</a></li>	
					<?php } ?>	
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p><h3>Alunos de graduação</h3></p>
				<ul>
					<?php
					  $this->db->where('categoria', "Graduando");
                      $query = $this->db->get('pessoas');
                      foreach ($query->result() as $row) {
                    ?>
					<li><?php echo $row->nome . " - "; echo $row->departamento . " - "; ?> <a href="<?php echo $row->curriculo ;?>">lattes</a></li>	
					<?php } ?>	
				</ul>
			</div>
		</div>
	</div>		
<div class="container" style="margin-bottom: 20px">
	<div class="row">
		<div class="col-12">
			<img src="<?php echo base_url('/assets/frontend/img/pessoas.png');?>" class="img-fluid">
			<center><label>Fotografia por Danúsia Monteiro</label></center>
		</div>
	</div>
</div>