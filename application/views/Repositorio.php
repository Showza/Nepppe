<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

<div class="container">
  <h2>Repositório</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#pesquisas" style="color: #ffffff; background-color: #790505; border-color: #790505;">Pesquisas</a></li>
    <li><a data-toggle="tab" href="#artigos" style="color: #ffffff; background-color: #790505; border-color: #790505;">Artigos</a></li>
    <li><a data-toggle="tab" href="#livros" style="color: #ffffff; background-color: #790505; border-color: #790505;">Livros</a></li>
    <li><a data-toggle="tab" href="#teses" style="color: #ffffff; background-color: #790505; border-color: #790505;">Teses e dissertações</a></li>
  </ul>

  <div class="tab-content">
    <div id="pesquisas" class="tab-pane fade">
      <!-- fazer para cada uma das pesquisas em andamento-->
      <?php
      $this->db->where('categoria', "1");
      $this->db->order_by('titulo', 'ASC');
      $query = $this->db->get('documentos');
      foreach ($query->result() as $row){
      ?><br>
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
      <br><br>
    </div>
    <div id="artigos" class="tab-pane fade">
      <!-- fazer para cada uma das pesquisas em andamento-->
      <?php
      $this->db->where('categoria', "2");
      $this->db->order_by('titulo', 'ASC');
      $query = $this->db->get('documentos');
      foreach ($query->result() as $row){
      ?><br>
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
      <br><br>
    </div>
    <div id="livros" class="tab-pane fade">
      <!-- fazer para cada uma das pesquisas em andamento-->
      <?php
      $this->db->where('categoria', "3");
      $this->db->order_by('titulo', 'ASC');
      $query = $this->db->get('documentos');
      foreach ($query->result() as $row){
      ?><br>
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
      <br><br>
    </div>
    <div id="teses" class="tab-pane fade">
      <!-- fazer para cada uma das pesquisas em andamento-->
      <?php
      $this->db->where('categoria', "5");
      $this->db->order_by('titulo', 'ASC');
      $query = $this->db->get('documentos');
      foreach ($query->result() as $row){
      ?><br>
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
      <br><br>
    </div>
</div>