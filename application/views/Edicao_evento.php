<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
    	<img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px" style="margin-bottom: 20px;">
        <h4>Edição de evento</h4>
    </header>
<div class="container">
    <?php
      $this->db->where('id', $id);
      $query = $this->db->get('eventos');
          foreach ($query->result() as $row) {
            $titulo = $row->titulo;
            $resumo = $row->resumo;
            $local = $row->local;
            $data = $row->data;
            $hora = $row->hora;          
            
          }
      ?>
    
    <div class="templatemo-login-form">
	<?php
		echo validation_errors('<div class="alert alert-danger">', '</div>');
		echo form_open('Eventos/atualizar_dados/'.$id);
	?>

		<div class="form-group">
		    <input type="text" id="txt-titulo" name="txt-titulo" class="form-control" value="<?php echo set_value('txt-titulo', $titulo);?>" autofocus>
		</div>
		<div class="form-group">
			<input type="text" id="txt-resumo" name="txt-resumo" class="form-control" value="<?php echo set_value('txt-resumo', $resumo);?>">
		</div>

        <div class="form-group">
			<input type="text" id="txt-local" name="txt-local" class="form-control" value="<?php echo set_value('txt-local', $local);?>">
		</div>

		<div class="form-group">
            <input type="date" id="txt-data" name="txt-data" class="form-control" value="<?php echo set_value('txt-data', $data);?>">
        </div>

        <div class="form-group">
			<input type="time" id="txt-hora" name="txt-hora" class="form-control" value="<?php echo set_value('txt-hora', $hora);?>">
		</div>

		<button type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505; margin-top: 30px;">Atualizar</button>
		<?php echo form_close(); ?>
        </div>
</div>