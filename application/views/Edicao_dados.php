<h2>Página de Edição de dados</h2>
<div class="container">
    <?php
      $this->db->where('id', $id);
      $query = $this->db->get('usuarios');
          foreach ($query->result() as $row) {
            $nome = $row->nome;
            $email = $row->email;
            $cpf = $row->cpf;
            $senha = base64_decode($row->senha);
          }
          echo validation_errors('<div class="alert alert-danger">', '</div>');
          echo form_open('usuarios/atualizar_dados/'.$id);
      ?>
    <div class="form-group">
      <label for="inputNome">Nome</label>
      <input type="text" class="form-control" name="txt-nome" id="txt-nome" value= "<?php echo set_value('txt-nome', $nome);?>">
    </div>
    <div class="form-group">
      <label for="inputEmail2">E-mail</label>
      <input type="Email" class="form-control" name="txt-email" id="txt-email" value="<?php echo set_value('txt-email', $email);?>">
    </div>
    <div class="form-group">
      <label for="inputCpf">CPF</label>
      <input type="number" class="form-control" name="txt-cpf" id="txt-cpf" value="<?php echo set_value('txt-cpf', $cpf); ?>">
    </div>
    <div class="form-group">
      <label for="inputSenha1">Senha</label>
      <input type="password" class="form-control" name="txt-senha" id="txt-senha" value="<?php echo set_value('txt-senha', $senha); ?>">
    </div>
    <div class="form-group">
      <label for="inputSenha2">Confirmação de senha</label>
      <input type="password" class="form-control" name="txt-confirmasenha" id="txt-confirmasenha" value="<?php echo set_value('txt-senha', $senha); ?>">
    </div>
    <button type="submit" class="btn custombtn">Salvar</button>
    <?php echo form_close();?>
</div>