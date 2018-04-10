<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
    	<img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px" style="margin-bottom: 20px;">
        <h4>Cadastro de documento</h4>
    </header>
			<div class="templatemo-login-form">
				<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open_multipart('Documentos/cadastrar');
					?>
				

				<div class="form-group">
					<input type="text" id="txt-titulo" name="txt-titulo" class="form-control" placeholder="Título" value="<?php echo set_value('txt-titulo') ?>" autofocus>
				</div>
				<div class="form-group">
					<input type="text" id="txt-resumo" name="txt-resumo" class="form-control" placeholder="Resumo" value="<?php echo set_value('txt-resumo') ?>">
				</div>

                <div class="form-group">
					<input type="text" id="txt-conteudo" name="txt-conteudo" class="form-control" placeholder="Conteúdo" value="<?php echo set_value('txt-conteudo') ?>">
				</div>

				<div class="form-group">
			    <label>Categoria</label>
				  <select class="browser-default" id="categoria" name="categoria">
				    <?php
		                $query = $this->db->get('categorias');
		                foreach ($query->result() as $row) {
		                ?>
					<option value="<?php echo $row->id; ?>"> <?php echo $row->nome;?></option>
					<?php } ?>
				  </select>
			  	</div>

			  	<div class="form-group">
					<input type="text" id="txt-documento" name="txt-documento" class="form-control" placeholder="Nome do arquivo" value="<?php echo set_value('txt-documento') ?>">
					<label>Não use caracteres especiais e espaço para o nome do arquivo</label>
				</div>

			  	<br><div class="form-group">
					<input type="file" id="arquivo" name="arquivo" class="form-control" value="<?php echo set_value('file') ?>" />
				</div>

				<br><br><input type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505;margin-bottom: 30px" value="Cadastrar" />
			</form>
			</div>
	</div>
	</body>
</html>