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
      <a class="nav-link active linkremove " href="#dadoeducacional" role="tab" data-toggle="tab">Dados Educacionais</a>
    </li>
  </ul>
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
  </div>
   </div>
<br><br><br><br><br><br><br><br><br>