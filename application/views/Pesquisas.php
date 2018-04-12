<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

<div class="container">
  <h2>Pesquisas</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#andamento" style="color: #ffffff; background-color: #790505; border-color: #790505;">Em andamento</a></li>
    <li><a data-toggle="tab" href="#concluidas" style="color: #ffffff; background-color: #790505; border-color: #790505;">Concluídas</a></li>
  </ul><br>

  <div class="tab-content">
    <div id="andamento" class="tab-pane fade">
      <!-- fazer para cada uma das pesquisas em andamento-->
      <?php
      $this->db->where('tipo', "Em andamento");
      $this->db->order_by('titulo', 'ASC');
      $query = $this->db->get('pesquisas');
      foreach ($query->result() as $row){
      ?>
      <div class="dropdown">
        <button id="dLabel" type="button" class="btn btn-lg btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff; background-color: #790505; border-color: #790505;">
          <?php echo $row->titulo; ?>
          <span class="caret"></span>
        </button>
      <div class="container col-md-12 dropdown-menu" aria-labelledby="dLabel">
      <p><h2>Resumo </h2><br>
        <?php echo $row->resumo;
        ?> <br>
        <h2>Conteúdo </h2> <br> 
          <?php echo $row->conteudo; ?></p>
      </div>
      </div><br><br>
      <?php } ?>
    </div>

    <div id="concluidas" class="tab-pane fade">
      <!-- fazer para cada uma das pesquisas em andamento-->
      <?php
      $this->db->where('tipo', "Concluída");
      $this->db->order_by('titulo', 'ASC');
      $query = $this->db->get('pesquisas');
      foreach ($query->result() as $row){
      ?>
      <div class="dropdown">
        <button id="dLabel" type="button" class="btn btn-lg btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff; background-color: #790505; border-color: #790505;">
          <?php echo $row->titulo; ?>
          <span class="caret"></span>
        </button>
      <div class="container col-md-12 dropdown-menu" aria-labelledby="dLabel">
      <p><h2>Resumo </h2><br>
        <?php echo $row->resumo;
        ?> <br>
        <h2>Conteúdo </h2> <br> 
          <?php echo $row->conteudo; ?></p>
      </div>
      </div><br><br>
      <?php } ?>
    </div>
  </div>
</div>