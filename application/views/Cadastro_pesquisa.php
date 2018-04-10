<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
    	<img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px" style="margin-bottom: 20px;">
        <h4>Cadastro de pesquisa</h4>
    </header>
			<div class="templatemo-login-form">
				<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open('Pesquisas/inserir');
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
			    <label>Status da pesquisa</label>
				  <select class="browser-default" id="tipo" name="tipo">
				    <option value="Em andamento">Em andamento</option>
				    <option value="Concluída">Concluída</option>
				  </select>
			  	</div>

				<br><button type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505; margin-top: 30px;">Cadastrar</button>
				<?php echo form_close(); ?>
			</div>
	</div>
	</body>
</html>