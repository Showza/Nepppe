<br>
  

<div class="container">
  <h2>Repositório</h2>
  <ul class="nav nav-tabs border-bottom-2" role="tablist">
    <li class="nav-item">
      <a class="nav-link active linkremove " href="#pesquisas" role="tab" data-toggle="tab">Pesquisas</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link linkremove" data-toggle="tab" href="#artigos">Artigos</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link linkremove" data-toggle="tab" href="#livros">Livros</a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link linkremove" data-toggle="tab" href="#teses">Teses e dissertações</a>
    </li>
  </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="pesquisas" >
            <div id="accordion">
                   <?php
                    $this->db->where('categoria', 'Pesquisa');
                    $this->db->order_by('titulo', 'ASC');
                    $query = $this->db->get('documentos');
                    foreach ($query->result() as $row){
                    ?>
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#<?php echo $row->id; ?>" aria-expanded="true" aria-controls="<?php echo $row->id; ?>">
                                  <?php echo $row->titulo; ?>
                              </button>
                            </h5>
                          </div>

                          <div id="<?php echo $row->id; ?>" class="collapse" aria-labelledby="<?php echo $row->id; ?>" data-parent="#accordion">
                                <div class="card-body">   
                                    <p><h5>Resumo </h5>
                                    <?php echo $row->resumo;?> 
                                    <h5>Conteúdo </h5>
                                    <p class="lead"> <?php echo $row->conteudo; ?></p>
                                  </div>
                                </div>
                                
                              </div>
                              <?php } ?>
            </div>
        </div>
      </div>


       <div id="artigos" class="tab-pane fade-in">
            <div id="accordion">
          <?php
          $this->db->where('categoria', 'Artigo');
          $this->db->order_by('titulo', 'ASC');
          $query = $this->db->get('documentos');
          foreach ($query->result() as $row){
          ?>
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#<?php echo $row->id; ?>" aria-expanded="true" aria-controls="<?php echo $row->id; ?>">
                        <?php echo $row->titulo; ?>
                    </button>
                  </h5>
                </div>

                <div id="<?php echo $row->id; ?>" class="collapse" aria-labelledby="<?php echo $row->id; ?>" data-parent="#accordion">
                      <div class="card-body">   
                          <p><h5>Resumo </h5>
                          <p class="lead"> <?php echo $row->resumo;?> </p>
                          <h5>Conteúdo </h5>
                          <p class="lead"> <?php echo $row->conteudo; ?></p>
                        </div>
                      </div>
                      
                    </div>
<?php } ?>
                </div>
    </div>
                <div class="tab-pane fade-in" id="livros" >
            <div id="accordion">
                   <!-- fazer para cada uma das pesquisas em andamento-->
                    <?php
                      $this->db->where('categoria', "Livro");
                      $this->db->order_by('titulo', 'ASC');
                      $query = $this->db->get('documentos');
                      foreach ($query->result() as $row){
                      ?>


                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#<?php echo $row->id; ?>" aria-expanded="true" aria-controls="<?php echo $row->id; ?>">
                                  <?php echo $row->titulo; ?>
                              </button>
                            </h5>
                          </div>

                          <div id="<?php echo $row->id; ?>" class="collapse" aria-labelledby="<?php echo $row->id; ?>" data-parent="#accordion">
                                <div class="card-body">   
                                    <p><h5>Resumo </h5>
                                    <?php echo $row->resumo;?> 
                                    <h5>Conteúdo </h5>
                                    <p class="lead"> <?php echo $row->conteudo; ?></p>
                                  </div>
                                </div>
                                <?php } ?>
                              </div>

            </div>
        </div>
                        <div class="tab-pane fade-in" id="teses" >
            <div id="accordion">
                   <!-- fazer para cada uma das pesquisas em andamento-->
                    <?php
                      $this->db->where('categoria', "Tese");
                      $this->db->order_by('titulo', 'ASC');
                      $query = $this->db->get('documentos');
                      foreach ($query->result() as $row){
                      ?>
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#<?php echo $row->id; ?>" aria-expanded="true" aria-controls="<?php echo $row->id; ?>">
                                  <?php echo $row->titulo; ?>
                              </button>
                            </h5>
                          </div>

                          <div id="<?php echo $row->id; ?>" class="collapse" aria-labelledby="<?php echo $row->id; ?>" data-parent="#accordion">
                                <div class="card-body">   
                                    <p><h5>Resumo </h5>
                                    <?php echo $row->resumo;?> 
                                    <h5>Conteúdo </h5>
                                    <p class="lead"> <?php echo $row->conteudo; ?></p>
                                  </div>
                                </div>
                                <?php } ?>
                              </div>

            </div>
        </div>



    

</div>
<br><br><br><br><br><br><br><br><br>