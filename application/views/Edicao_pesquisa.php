<h2>Página de Edição de pesquisa</h2>
<div class="container">
    <?php
      $this->db->where('id', $id);
      $query = $this->db->get('pesquisas');
          foreach ($query->result() as $row) {
            $titulo = $row->titulo;
            $resumo = $row->resumo;
            $conteudo = $row->conteudo;
            $tipo = $row->tipo;         
            
          }
      ?>
    
    <div class="templatemo-login-form">
	<?php
		echo validation_errors('<div class="alert alert-danger">', '</div>');
		echo form_open('Pesquisas/atualizar_dados/'.$id);
	?>

		<div class="form-group">
		    <input type="text" id="txt-titulo" name="txt-titulo" class="form-control" value="<?php echo set_value('txt-titulo', $titulo);?>" autofocus>
		</div>
		<div class="form-group">
			<input type="text" id="txt-resumo" name="txt-resumo" class="form-control" value="<?php echo set_value('txt-resumo', $resumo);?>">
		</div>

		<div class="form-group">
			<input type="text" id="txt-conteudo" name="txt-conteudo" class="form-control" placeholder="Conteúdo" value="<?php echo set_value('txt-conteudo', $conteudo);?>">
		</div>

        <div class="form-group">
		    <label>Status da pesquisa</label>
		    <select class="browser-default" id="tipo" name="tipo">
		    <option value="Em andamento">Em andamento</option>
		    <option value="Concluída">Concluída</option>
		  </select>
		</div>

		<button type="submit" class="btn btn-lg btn-success btn-block">Atualizar</button>
		<?php echo form_close(); ?>
        </div>
</div>