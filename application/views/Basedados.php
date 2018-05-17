<br>
<div class="container geral">
  <div class="row">
    <h2>Base de Dados </h2>
  </div>
  <div class="row">
    <div class="col-8"></div>
    <div class="col-1">
      <a href="http://estadaodados.com/basometro/" class="btn btn-primary " style="color: #ffffff; background-color: #790505; border-color: #790505">Basômetro</a>
    </div>
    <div class="col-1">
      <a href="http://radarparlamentar.polignu.org/" class="btn btn-primary " style="margin-left:10px;color: #ffffff; background-color: #790505; border-color: #790505">Radar parlamentar</a>
    </div>
  </div>
  <ul class="nav nav-tabs border-bottom-2" role="tablist">
    <li class="nav-item">
      <a class="topo-acording nav-link active linkremove " href="#dadoeducacional" role="tab" data-toggle="tab">Dados Educacionais</a>
    </li>
    <li class="nav-item">
      <a class="topo-acording nav-link linkremove " href="#palnosdecenais" role="tab" data-toggle="tab">Planos decenais de educação</a>
    </li>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="dadoeducacional" >
      <div id="accordion">
        <?php
          foreach ($dados as $dado){
          ?>
        <div class="card">
          <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#<?php echo $dado->id; ?>" aria-expanded="true" aria-controls="<?php echo $dado->id; ?>">
                        <?php echo $dado->titulo; ?>
                </button>
              </h5>
          </div>
          <div id="<?php echo $dado->id; ?>" class="collapse" aria-labelledby="<?php echo $dado->id; ?>" data-parent="#accordion">
            <div class="card-body">   
              <p><h5>Resumo </h5>
              <?php echo $dado->resumo;?> 
              <h5>Conteúdo </h5>
              <p class="lead"> <?php echo $dado->conteudo; ?>
                <p>Link para o arquivo: <a class="customlink" title="Arquivo" target="_blank" href="<?php echo base_url('/documentos/'.$dado->documento)?>"> <?php echo $dado->documento; ?></a></p> 
              </p>
            </div>
          </div>
        <?php } ?>
       </div>
      </div>
    </div>

<!--
Começar a Segunda Aba
-->
    <div class="tab-pane fade-in" id="palnosdecenais" >
        <div id="accordion">
         <!--NORTE-->
        <div class="card">
          <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#1" aria-expanded="true" aria-controls="1">
                       NORTE
                </button>
              </h5>
          </div>

          <div id="1" class="collapse" aria-labelledby="1" data-parent="#accordion">
            <div class="card-body">   
              <h5>Relação de Documentos PDEs da Região Norte</h5>
               <?php
                  foreach ($pdes as $pdes_regiao){
                    if ($pdes_regiao->estado == 'NORTE'){
                ?>

              
                <p class="lead"> <?php echo $pdes_regiao->nome_pde; ?> -
               <a class="customlink" title="Arquivo" target="_blank" href="<?php echo base_url('/documentos/'.$pdes_regiao->arquivo)?>"> Download</a> 

              </p>
              <?php } } ?>
            </div>
          </div>
        
       </div>
       <!--NORDESTE-->
       <div class="card">
          <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#2" aria-expanded="true" aria-controls="2">
                       NORDESTE
                </button>
              </h5>
          </div>
          
          <div id="2" class="collapse" aria-labelledby="2" data-parent="#accordion">
            <div class="card-body">   
              <h5>Relação de Documentos PDEs da Região Nordeste</h5>
               <?php
                  foreach ($pdes as $pdes_regiao){
                    if ($pdes_regiao->estado == 'NORDESTE'){
                ?>

              
                <p class="lead"> <?php echo $pdes_regiao->nome_pde; ?> -
               <a class="customlink" title="Arquivo" target="_blank" href="<?php echo base_url('/documentos/'.$pdes_regiao->arquivo)?>"> Download</a> 

              </p>
              <?php } } ?>
            </div>
            </div>
          </div>
        
       </div>
       <!--CENTRO-OESTE-->
       <div class="card">
          <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#3" aria-expanded="true" aria-controls="3">
                       CENTRO-OESTE
                </button>
              </h5>
          </div>
          
          <div id="3" class="collapse" aria-labelledby="3" data-parent="#accordion">
            <div class="card-body">   
              <h5>Relação de Documentos PDEs da Região Centro-Oeste</h5>
               <?php
                  foreach ($pdes as $pdes_regiao){
                    if ($pdes_regiao->estado == 'CENTRO-OESTE'){
                ?>

              
                <p class="lead"> <?php echo $pdes_regiao->nome_pde; ?> -
               <a class="customlink" title="Arquivo" target="_blank" href="<?php echo base_url('/documentos/'.$pdes_regiao->arquivo)?>"> Download</a> 

              </p>
              <?php } } ?>
            </div>
            </div>
          </div>
        
      
       <!--SUDESTE-->
       <div class="card">
          <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#4" aria-expanded="true" aria-controls="4">
                       SUDESTE
                </button>
              </h5>
          </div>
          
          <div id="4" class="collapse" aria-labelledby="4" data-parent="#accordion">
            <div class="card-body">   
              <h5>Relação de Documentos PDEs da Região Sudeste</h5>
               <?php
                  foreach ($pdes as $pdes_regiao){
                    if ($pdes_regiao->estado == 'SUDESTE'){
                ?>

              
                <p class="lead"> <?php echo $pdes_regiao->nome_pde; ?> -
               <a class="customlink" title="Arquivo" target="_blank" href="<?php echo base_url('/documentos/'.$pdes_regiao->arquivo)?>"> Download</a> 

              </p>
              <?php } } ?>
            </div>
            </div>
          </div>
        <!--SUL-->
       <div class="card">
          <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#5" aria-expanded="true" aria-controls="5">
                       SUL
                </button>
              </h5>
          </div>
          
          <div id="5" class="collapse" aria-labelledby="5" data-parent="#accordion">
            <div class="card-body">   
              <h5>Relação de Documentos PDEs da Região Sul</h5>
               <?php
                  foreach ($pdes as $pdes_regiao){
                    if ($pdes_regiao->estado == 'SUL'){
                ?>

              
                <p class="lead"> <?php echo $pdes_regiao->nome_pde; ?> -
               <a class="customlink" title="Arquivo" target="_blank" href="<?php echo base_url('/documentos/'.$pdes_regiao->arquivo)?>"> Download</a> 

              </p>
              <?php } } ?>
            </div>
            </div>
          </div> 
         </div>  
       </div>
      
        
       </div>


      </div>
    </div>
  </div>  

  </div>

<br><br><br><br><br><br><br><br><br>