<div class="container" align="center">
    <p><h3>NEPPPE​/CNPq​ - Núcleo de Estudos e Pesquisas em Políticas Públicas de Educação</h3></p>
    <p>Programa de Pós-graduação em Educação<br>
    I​CHS/UFOP<br>
​         nepppe.ufop@gmail.com<br>
​     Rua do Seminário, s/n, Mariana- MG​</p>
    
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <!-- Inicio Google Maps -->
  <!-- Script de formatação do Mapa no arquivo Html-header linha24 -->
      <div class="container">
        <div id="map"></div>
          <script>
            function initMap() {
              // Determina as coordenadas geograficas de Outo Preto
              var uluru = {lat:  -20.3819172, lng: -43.4150414};
              var map = new google.maps.Map(document.getElementById('map'), {
                // Configura o zoon no Google Maps
                zoom: 16,
                center: uluru
              });
              var marker = new google.maps.Marker({
              position: uluru,
              map: map
              });
            }
          </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiYWI1GNysWk7eW5IodYU_cS1YJohtxig&callback=initMap">
          </script>
    </div>
    </div>
  </div>
</div>




  <!-- Formulário
  <div class="row">
    <h1 class="red-text">Formulário para contato</h1>
    <?php
          echo validation_errors('<div class="alert alert-danger">', '</div>');
          echo form_open_multipart('Contato/enviar_email');
    ?>
      <div class="row">
        <div class="input-field col s6">
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>

        <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input id="assunto" type="text" class="validate">
          <label for="assunto">Assunto</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <input id="texto" type="text" class="validate">
          <label for="texto">Mensagem</label>
        </div>
      </div>

    <button type="submit" class="btn btn-lg btn-success btn-block">Enviar</button>    
    <?php echo form_close(); ?>
  </div>
-->

