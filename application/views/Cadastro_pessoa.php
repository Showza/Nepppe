<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
    	<img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px" style="margin-bottom: 20px;">
        <h4>Cadastro de pessoa</h4>
    </header>
			<div class="templatemo-login-form">
				<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open('Pessoas/inserir');
				?>

				<div class="form-group">
					<input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Nome da pessoa" value="<?php echo set_value('txt-nome') ?>" autofocus>
				</div>

				<div class="form-group">
			    <label>Categoria</label>
				  <select class="browser-default" id="categoria" name="categoria">
					<option value="Pesquisador"> Pesquisador</option>
					<option value="Graduando"> Graduando</option>
					<option value="Mestrando"> Menstrando</option>
				  </select>
			  	</div>

				<div class="form-group">
					<input type="text" id="txt-curriculo" name="txt-curriculo" class="form-control" placeholder="Currículo da pessoa" value="<?php echo set_value('txt-curriculo') ?>">
				</div>
				<div class="form-group">
					<input type="text" id="txt-dep" name="txt-dep" class="form-control" placeholder="Departamento" value="<?php echo set_value('txt-dep') ?>">
				</div>
				<button type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505; margin-top: 30px;">Cadastrar</button>
				<?php echo form_close(); ?>
			</div>
	</div>
	</body>
</html>