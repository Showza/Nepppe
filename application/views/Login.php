    <div class="col-md-4"></div>
    <div class="container col-md-4">
            <header class="text-center"><br><br>
              <img src="<?php echo base_url('/assets/frontend/img/logomarca.png');?>" class="img-fluid" width="200px" style="margin-bottom: 20px;">
              <br><br>
              <h4>Faça login no sistema</h4><br>
            </header>
                <div class="templatemo-login-form">
                    <?php  
                        echo validation_errors('<div class="alert alert-danger">','</div>');
                        echo form_open('Usuarios/login');

                    ?>
                    <fieldset>
                        <div class="form-group">
                            <label>Digite abaixo o seu e-mail:</label>
                            <input class="form-control" placeholder="Email" name="txt-email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label>Digite abaixo a sua senha:</label>
                            <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="">
                         </div>
                        <button class="btn btn-lg btn-success btn-block" style="color: #ffffff; background-color: #790505; border-color: #790505; margin-top: 30px;">Entrar</button>
                    </fieldset>
                    <?php echo form_close();?>
                </div>
        </div>
    </div>