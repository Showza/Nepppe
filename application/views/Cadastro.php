<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
        <h4>Cadastro no sistema</h4>
    </header>
			<div class="templatemo-login-form">
				<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open('Usuarios/inserir');
				?>

				<div class="form-group">
					<input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Nome do Usuário" value="<?php echo set_value('txt-nome') ?>" autofocus>
				</div>
				<div class="form-group">
					<input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Email" value="<?php echo set_value('txt-email') ?>">
				</div>

				<div class="form-group">
					<input type="text" id="txt-cpf" name="txt-cpf" class="form-control" placeholder="CPF" value="<?php echo set_value('txt-cpf') ?>">
				</div>

				<div class="form-group">
			    <label>Tipo do usuário</label>
				  <select class="browser-default" id="tipo" name="tipo">
				    <option value="Administrador">Administrador</option>
				    <option value="Auxiliar">Auxiliar</option>
				  </select>
			  	</div>


				<div class="form-group">
					<input type="password" id="txt-senha" name="txt-senha" class="form-control" placeholder="Senha">
				</div>
				<div class="form-group">
					<input type="password" id="txt-confir-senha" name="txt-confir-senha" class="form-control" placeholder="Confirmação de senha">
				</div>
				<button type="submit" class="btn btn-lg btn-success btn-block">Cadastrar</button>
				<?php echo form_close(); ?>
			</div>
	</div>
	</body>
</html>