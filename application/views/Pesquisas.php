
  
<br>

<!-- Bootstrap CSS -->
<!-- jQuery first, then Bootstrap JS. -->
<!-- Nav tabs -->

<div class="container geral">
  <h2>Pesquisas</h2>
  <ul class="nav nav-tabs border-bottom-2" role="tablist">
    <li class="nav-item">
      <a class="topo-acording nav-link active linkremove " href="#andamento" role="tab" data-toggle="tab">Em andamento</a>
    </li>
    <li class="nav-item">
      <a class="topo-acording nav-link linkremove" data-toggle="tab" href="#concluidas">Concluídas</a>
    </li>
  </ul>


  <div class="tab-content">
   <div role="tabpanel" class="tab-pane active" id="andamento" >
      <div id="accordion">
    
          <!-- fazer para cada uma das pesquisas em andamento-->
          <?php
          $this->db->where('tipo', "Em andamento");
          $this->db->order_by('titulo', 'ASC');
          $query = $this->db->get('pesquisas');
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
    
   

    <div id="concluidas" class="tab-pane fade-in">
            <div id="accordion">
    
          <!-- fazer para cada uma das pesquisas em andamento-->
          <?php
          $this->db->where('tipo', "Concluída");
          $this->db->order_by('titulo', 'ASC');
          $query = $this->db->get('pesquisas');
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
                      <?php } ?>
                    </div>

                </div>
      

    </div>

   </div>   
      
    </div>     
</div>
<br><br><br><br><br><br><br><br><br>
 
  

