    <div class="col-md-4"></div>
    <div class="container col-md-4">
            <header class="text-center"><br><br>
              <h4>Login</h4>
            </header>
                <div class="templatemo-login-form">
                    <?php  
                        echo validation_errors('<div class="alert alert-danger">','</div>');
                        echo form_open('Usuarios/login');

                    ?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="txt-email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="">
                         </div>
                        <button class="btn btn-lg btn-success btn-block">Entrar</button>
                    </fieldset>
                    <?php echo form_close();?>
                </div>
        </div>
    </div>