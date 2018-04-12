<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container-fluid">
  <div class="row">
    <div class="col" style="color:#ffffff; background-color:#790505; border-color:#790505;">
      NEPPPE - Página do Auxiliar
    </div>
    <div class="col text-right" style="color:#ffffff; background-color:#790505; border-color:#790505;">
      <a href="<?php echo site_url('evento')?>" class="btn btn-dark btn-sm navbar-right">Cadastrar Evento</a>
      <a href="<?php echo site_url('pesquisa')?>" class="btn btn-dark btn-sm navbar-right">Cadastrar Pesquisa</a>
      <a href="<?php echo site_url('documento')?>" class="btn btn-dark btn-sm navbar-right">Cadastrar Documento</a>
      <a href="<?php echo site_url('logout')?>" class="btn btn-dark btn-sm navbar-right">Logout</a>
    </div>
  </div>
</div>


<div class="container">
  <h2>Página do Auxiliar</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#eventos" style="color: #ffffff; background-color: #790505; border-color: #790505;">Eventos</a></li>
    <li><a data-toggle="tab" href="#pesquisas" style="color: #ffffff; background-color: #790505; border-color: #790505;">Pesquisas</a></li>
    <li><a data-toggle="tab" href="#documentos" style="color: #ffffff; background-color: #790505; border-color: #790505;">Documentos</a></li>
  </ul>

  <div class="tab-content">
    <div id="eventos" class="tab-pane fade active in">
      <!--Tabela de eventos-->
      <div class="container-fluid">
        <div class="row">
          <div class="col" style="margin-top: 10px; margin-bottom: 10px;">
            <table class="table table-striped" style="margin-top: 0px">
                <thead style="color: #ffffff; background-color: #790505; border-color: #790505;">
                  <tr>
                    <th scope="col">Título</th>
                    <th>Resumo</th>
                    <th>Data</th>
                    <th>Opção</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $query = $this->db->get('eventos');
                      foreach ($query->result() as $row) {
                      ?>
                  <tr>
                    <th scope="row"><?php echo $row->titulo;?></th>
                    <td><?php echo $row->resumo;?></td>
                    <td><?php echo $row->data;?> </td>
                    <td>
                      <div class="col">
                        <a class="customlink" title="Atualizar evento" href="<?php echo site_url('Eventos/pagina_edicao/'.$row->id)?>"><i class="material-icons">Editar</i></a> 
                      </div>
                      <div class="col">
                        <a class="customlink" title="Excluir evento" href="<?php echo site_url('Eventos/excluir/'.$row->id)?>"><i class="material-icons">Excluir</i></a>      
                      </div> 
                    </td>
                  </tr><?php } ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
    <div id="pesquisas" class="tab-pane fade">
     <!--Tabela de pesquisas-->
      <div class="container-fluid">
        <div class="row">
          <div class="col" style="margin-top: 10px; margin-bottom: 10px;">
            <table class="table table-striped" style="margin-top:0px">
                <thead style="color: #ffffff; background-color: #790505; border-color: #790505;">
                  <tr>
                    <th scope="col">Título</th>
                    <th>Tipo</th>
                    <th>Opção</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $query = $this->db->get('pesquisas');
                      foreach ($query->result() as $row) {
                      ?>
                  <tr>
                    <th scope="row"><?php echo $row->titulo;?></th>
                    <td><?php echo $row->tipo;?></td>
                    <td>
                      <div class="col">
                        <a class="customlink" title="Atualizar evento" href="<?php echo site_url('Pesquisas/pagina_edicao/'.$row->id)?>"><i class="material-icons">Editar</i></a> 
                      </div>
                      <div class="col">
                        <a class="customlink" title="Excluir evento" href="<?php echo site_url('Pesquisas/excluir/'.$row->id)?>"><i class="material-icons">Excluir</i></a>      
                      </div>
                    </td>
                  </tr><?php } ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
    <div id="documentos" class="tab-pane fade">
      <!--Tabela de documentos-->
      <div class="container-fluid">
        <div class="row">
          <div class="col" style="margin-top: 10px; margin-bottom: 10px;">
            <table class="table table-striped" style="margin-top: 0px">
                <thead style="color: #ffffff; background-color: #790505; border-color: #790505;">
                  <tr>
                    <th scope="col">Título</th>
                    <th>Categoria</th>
                    <th>Opção</th>
                    <th>Arquivo</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $query = $this->db->get('documentos');
                      foreach ($query->result() as $row) {
                      ?>
                  <tr>
                    <th scope="row"><?php echo $row->titulo;?></th>
                    <td><?php 
                      $this->db->where('id', $row->categoria);
                      $query2 = $this->db->get('categorias');
                        foreach ($query2->result() as $linha) {
                          echo $linha->nome;
                        }
                      ?>
                    </td>
                    <td>
                      <div class="col">
                        <a class="customlink" title="Atualizar evento" href="<?php echo site_url('Documentos/pagina_edicao/'.$row->id)?>"><i class="material-icons">Editar</i></a>
                      </div>
                      <div class="col">
                         <a class="customlink" title="Excluir evento" href="<?php echo site_url('Documentos/excluir/'.$row->id)?>"><i class="material-icons">Excluir</i></a> 
                      </div> 
                    </td>
                    <td>
                      <a class="customlink" title="Arquivo" href="<?php echo base_url('/documentos/'.$row->documento)?>"> <?php echo $row->documento; ?></a>
                    </td>
                  </tr><?php } ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
</div>


<!--
<h2>Página do Auxiliar</h2>

<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
    <p><strong><a href=<?php echo site_url('evento')?> class="blue-text">Cadastrar Evento</a></strong></p>
    <p><strong><a href=<?php echo site_url('pesquisa')?> class="blue-text">Cadastrar Pesquisa</a></strong></p>
    <p><strong><a href=<?php echo site_url('documento')?> class="blue-text">Cadastrar Documento</a></strong></p>
    <p><strong><a href=<?php echo site_url('logout')?> class="blue-text">Logout</a></strong></p>
</div>

<div>
  <h5>Tabela de eventos</h5>
        <table>
          <thead>
            <tr>
              <th scope="col">Título</th>
              <th>Resumo</th>
              <th>Data</th>
              <th>Opção</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
                $query = $this->db->get('eventos');
                foreach ($query->result() as $row) {
                ?>
            <tr>
              <th scope="row"><?php echo $row->titulo;?></th>
              <td><?php echo $row->resumo;?></td>
              <td><?php echo $row->data;?> </td>
              <td>
                <a class="customlink" title="Excluir evento" href="<?php echo site_url('Eventos/excluir/'.$row->id)?>"><i class="material-icons">delete</i></a>          
                <a class="customlink" title="Atualizar evento" href="<?php echo site_url('Eventos/pagina_edicao/'.$row->id)?>"><i class="material-icons">create</i></a> 
              </td>
            </tr><?php } ?>
          </tbody>
        </table>
      </div>
</div>

<div>
  <br><br><br><h5>Tabela de pesquisas</h5>
        <table>
          <thead>
            <tr>
              <th scope="col">Título</th>
              <th>Tipo</th>
              <th>Opção</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
                $query = $this->db->get('pesquisas');
                foreach ($query->result() as $row) {
                ?>
            <tr>
              <th scope="row"><?php echo $row->titulo;?></th>
              <td><?php echo $row->tipo;?></td>
              <td>
                <a class="customlink" title="Excluir evento" href="<?php echo site_url('Pesquisas/excluir/'.$row->id)?>"><i class="material-icons">delete</i></a>          
                <a class="customlink" title="Atualizar evento" href="<?php echo site_url('Pesquisas/pagina_edicao/'.$row->id)?>"><i class="material-icons">create</i></a> 
              </td>
            </tr><?php } ?>
          </tbody>
        </table>
      </div>
</div>
<<<<<<< HEAD

<div>
  <br><br><br><h5>Tabela de documentos</h5>
        <table>
          <thead>

-->
