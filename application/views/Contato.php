<div class="container">
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

  <!-- Inicio Google Maps -->
  <!-- Script de formatação do Mapa no arquivo Html-header linha24 -->
  <div class="container">
    <div id="map"></div>
      <script>
        function initMap() {
          var uluru = {lat:  -20.3856, lng: -43.5035};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiYWI1GNysWk7eW5IodYU_cS1YJohtxig&callback=initMap">
      </script>
    </div>

</div>