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

<div>
  <br><br><br><h5>Tabela de documentos</h5>
        <table>
          <thead>
            <tr>
              <th scope="col">Título</th>
              <th>Categoria</th>
              <th>Download</th>
              <th>Opção</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
                $query = $this->db->get('documentos');
                foreach ($query->result() as $row) {
                ?>
            <tr>
              <th scope="row"><?php echo $row->titulo;?></th>
              <td><?php echo $row->categoria;?></td>
              <td>
                <a class="customlink" href="<?php echo base_url('/documentos/'.$row->documento)?>">Arquivo</a>
              </td>
              <td>
                <a class="customlink" title="Excluir evento" href="<?php echo site_url('Documentos/excluir/'.$row->id)?>"><i class="material-icons">delete</i></a>          
                <a class="customlink" title="Atualizar evento" href="<?php echo site_url('Documentos/pagina_edicao/'.$row->id)?>"><i class="material-icons">create</i></a>
              </td>
            </tr><?php } ?>
          </tbody>
        </table>
      </div>
</div>