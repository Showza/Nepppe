<h2>Página do Administrador</h2>

<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
    <p><strong><a href=<?php echo site_url('cadastro')?> class="blue-text">Cadastrar usuário</a></strong></p>
    <p><strong><a href=<?php echo site_url('logout')?> class="blue-text">Logout</a></strong></p>
</div>

<div class="customblock" style="margin-top: -3px">
        <table class="table table-striped" style="margin-top: 50px">
          <thead style="background-color:#8FBC8F;">
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Opção</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
                //$id = $this->session->userdata('userlogado')->id;
                //$this->db->where('id', $id);
                $query = $this->db->get('usuarios');
                foreach ($query->result() as $row) {
                ?>
            <tr>
              <th scope="row"><?php echo $row->nome;?></th>
              <td><?php echo $row->email;?></td>
              <td>
                <a class="customlink" title="Excluir usuário" href="<?php echo site_url('usuarios/excluir/'.$row->id)?>"><i class="material-icons">delete</i></a>          
                <a class="customlink" title="Editar dados" href="<?php echo Site_url('usuarios/editar_dados/'.$row->id)?>"><i class="material-icons">create</i></a> 
              </td>
            </tr><?php } ?>
          </tbody>
        </table>
      </div>