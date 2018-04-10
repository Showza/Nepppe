<div class="col-md-4"></div>
<div class="container col-md-4">
    <header class="text-center"><br><br>
    	<img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px" style="margin-bottom: 20px;">
        <h4>Cadastro de evento</h4>
    </header>
			<div class="templatemo-login-form">
				<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open('Eventos/inserir');
				?>

				<div class="form-group">
					<input type="text" id="txt-titulo" name="txt-titulo" class="form-control" placeholder="Título" value="<?php echo set_value('txt-titulo') ?>" autofocus>
				</div>
				<div class="form-group">
					<input type="text" id="txt-resumo" name="txt-resumo" class="form-control" placeholder="Resumo" value="<?php echo set_value('txt-resumo') ?>">
				</div>

                <div class="form-group">
					<input type="text" id="txt-local" name="txt-local" class="form-control" placeholder="Local" value="<?php echo set_value('txt-local') ?>">
				</div>

				<div class="form-group">
                <input type="date" id="txt-data" name="txt-data" class="form-control" value="<?php echo set_value('txt-data') ?>">
                </div>

                <div class="form-group">
					<input type="time" id="txt-hora" name="txt-hora" class="form-control" value="<?php echo set_value('txt-time') ?>">
				</div>

				<button type="submit" class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505; margin-top: 30px;">Cadastrar</button>
				<?php echo form_close(); ?>
			</div>
	</div>
	</body>
</html>