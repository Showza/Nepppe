<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
      <img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px">
        <h4>Página de Edição de documento</h4>
    </header>
<div class="container">
    <?php
      $this->db->where('id', $id);
      $query = $this->db->get('documentos_pde');
          foreach ($query->result() as $row) {
            $titulo = $row->nome_pde;
            $regiao = $row->estado;
            $documento = $row->arquivo;

          }
      ?>
    
    <div class="templatemo-login-form">
	<?php
		echo validation_errors('<div class="alert alert-danger">', '</div>');
		echo form_open('Documentos/atualizar_pde/'.$id);
	?>



				<div class="form-group">
					<input type="text" id="txt-nome-doc" name="txt-nome-doc" class="form-control" placeholder="Nome do documento" value="<?php echo set_value('txt-nome-doc',$titulo) ?>" autofocus>
				</div>

			  	<div class="form-group">
				  <label for="sel1">Região:</label>
				  <select class="form-control" id="regiao" name="regiao" value="<?php echo set_value('regiao',$regiao) ?>">
				    <option value="NORTE">Norte</option>
				    <option value="NORDESTE">Nodeste</option>
				    <option value="CENTRO-OESTE">Centro-Oeste</option>
				    <option value="SUDESTE">Sudeste</option>
				    <option value="SUL">Sul</option>
				  </select>
				</div>

			  	<br><div class="form-group">
					<input type="file" name="arquivo" id="arquivo" value="<?php echo set_value('arquivo',$documento) ?>" />
				</div>


		<br><button type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505; margin-bottom:30px">Atualizar</button>
		<?php echo form_close(); ?>
        </div>
</div>
