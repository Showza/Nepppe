<div class="container-fluid">
  <div class="row">
    <div class="col" style="color:#ffffff; background-color:#790505; border-color:#790505;">
      NEPPPE - Página do Administrador
    </div>
    <div class="col text-right" style="color:#ffffff; background-color:#790505; border-color:#790505;">
      <a href="<?php echo site_url('cadastro')?>" class="btn btn-dark btn-sm navbar-right">Cadastrar usuário</a>
      <a href="<?php echo site_url('logout')?>" class="btn btn-dark btn-sm navbar-right">Logout</a>
    </div>
  </div>
</div>



<!--
<div>
    <p><strong><a href=<?php echo site_url('cadastro')?> class="blue-text">Cadastrar usuário</a></strong></p>
    <p><strong><a href=<?php echo site_url('logout')?> class="blue-text">Logout</a></strong></p>
</div>
-->

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <table class="table table-striped" style="margin-top: 50px">
          <thead style="color: #ffffff; background-color: #790505; border-color: #790505;">
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
                <div class="col">
                  <a class="customlink" title="Editar dados" href="<?php echo Site_url('usuarios/editar_dados/'.$row->id)?>"><i class="material-icons">Editar</i></a> 
                </div>
                <div class="col">
                  <a class="customlink" title="Excluir usuário" href="<?php echo site_url('usuarios/excluir/'.$row->id)?>"><i class="material-icons">Excluir</i></a>
                </div>
              </td>
            </tr><?php } ?>
          </tbody>
        </table>


    </div>
  </div>
</div>




<!--SEM FRONT (CÓPIA COMENTADA COM BACK FUNCIONANDO LEGAL)
<div class="customblock" style="margin-top: -10px">
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
-->