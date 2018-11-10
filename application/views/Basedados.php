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
       </div>
       <?php } ?>
      </div>
    </div>
<!--
Começar a Segunda Aba
-->
	<div class="tab-pane fade-in" id="palnosdecenais" >
		<div id="accordion">
	<?php
		$estados = array(
			"Acre","Alagoas","Amapá","Amazonas","Bahia","Ceará","Distrito Federal","Espirito Sato","Goiás","Maranhão",
			"Mato Grosso","Mato Grosso do Sul","Minas Gerais","Pará","Paraíba","Paraná","Pernambuco","Piauí",
			"Rio de Janeiro","Rio Grande do Norte","Rio Grande do Sul","Rondônia","Roraima","Santa Catarina",
			"São Paulo","Sergipe","Tocantins",
		)
	 	$legenda = array(
			"AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS",
			"RO","RR","SC","SP","SE","TO",
		);?>
		<?php for ($i=0; $i < count($legenda); $i++) { ?>
			<div class="card">
	          <div class="card-header" id="headingOne">
	              <h5 class="mb-0">
	                <button class="btn btn-link" style="text-decoration: none;color:black;" data-toggle="collapse" data-target="#<?php echo $i+1 ?>" aria-expanded="true" aria-controls="1">
	                       <?php echo $legenda[$i] ?>
	                </button>
	              </h5>
	          </div>

	          <div id="<?php echo $i+1 ?>" class="collapse" aria-labelledby="<?php echo $i+1 ?>" data-parent="#accordion">
	            <div class="card-body">
	              <h5>Relação de Documentos PDEs do <?php echo $estados[$i]; ?></h5>
	               <?php
	                  foreach ($pdes as $pdes_regiao){
	                    if ($pdes_regiao->estado == $legenda[$i]){
	                ?>

	                <p class="lead"> <?php echo $pdes_regiao->nome_pde; ?> -
	               <a class="customlink" title="Arquivo" target="_blank" href="<?php echo base_url('/documentos/'.$pdes_regiao->arquivo)?>"> Download</a>

	              </p>
	              <?php } } ?>
	            </div>
	          </div>

	       </div>
	   <?php } ?>

      </div>
    </div>
  </div>

  </div>

<br><br><br><br><br><br><br><br><br>
