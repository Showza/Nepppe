<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
      <img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px">
        <h4>Página de Edição de documento</h4>
    </header>
<div class="container">
    <?php
      $this->db->where('id', $id);
      $query = $this->db->get('documentos');
          foreach ($query->result() as $row) {
            $titulo = $row->titulo;
            $resumo = $row->resumo;
            $conteudo = $row->conteudo;
            $categoria = $row->categoria; 
            $documento = $row->documento;        
            
          }
      ?>
    
    <div class="templatemo-login-form">
	<?php
		echo validation_errors('<div class="alert alert-danger">', '</div>');
		echo form_open('Documentos/atualizar_dados/'.$id);
	?>

		<div class="form-group">
		    <input type="text" id="txt-titulo" name="txt-titulo" class="form-control" value="<?php echo set_value('txt-titulo', $titulo);?>" autofocus>
		</div>
		<div class="form-group">
			<input type="text" id="txt-resumo" name="txt-resumo" class="form-control" value="<?php echo set_value('txt-resumo', $resumo);?>">
		</div>

		<div class="form-group">
			<input type="text" id="txt-conteudo" name="txt-conteudo" class="form-control" placeholder="Conteúdo" value="<?php echo set_value('txt-conteudo', $conteudo);?>">
		</div>

		<div class="form-group">
			<label>Categoria</label>
			<select class="browser-default" id="categoria" name="categoria" value="<?php echo set_value('categoria', $categoria);?>">
			<?php
                $query = $this->db->get('categorias');
                foreach ($query->result() as $row) {
                ?>
			<option value="<?php echo $row->id; ?>"> <?php echo $row->nome;?></option>
			<?php } ?>
			</select>
	 	</div>

	 	<!--br><div class="form-group">
			<input type="file" id="file" name="file" class="form-control" value="<?php echo set_value('file', $file) ?>">
		</div-->
        

		<br><button type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505; margin-bottom:30px">Atualizar</button>
		<?php echo form_close(); ?>
        </div>
</div>