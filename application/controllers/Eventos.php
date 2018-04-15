<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('eventos_model', 'modeleventos');
		 $this->load->helper(array('form', 'url'));
	}
	
	public function excluir($id){
		if ($this->modeleventos->excluir($id)) {
			redirect(site_url('Usuarios/auxiliar'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function cadastro_evento(){
		$this->load->view('Template/Html-header');
		$this->load->view('Cadastro_evento');
		$this->load->view('Template/Html-footer');
	}

	public function pagina_edicao($id){
		$dados['id'] = $id;
		$this->load->view('Template/Html-header');
		$this->load->view('Edicao_evento', $dados);
		$this->load->view('Template/Html-footer');
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo', 'Título do evento', 'required');
		$this->form_validation->set_rules('txt-link', 'Link do evento', 'required');

		if($this->form_validation->run() == FALSE){
			$this->cadastro_evento();
		}else{
			$titulo= $this->input->post('txt-titulo');
			$link= $this->input->post('txt-link');
			
			 if ($this->modeleventos->adicionar($titulo, $link)) {
			 	redirect(site_url('Usuarios/auxiliar'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}

	public function atualizar_dados($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo', 'Título do evento', 'required');
		$this->form_validation->set_rules('txt-link', 'Link do evento', 'required');        

		if($this->form_validation->run() == FALSE){
			$this->pagina_edicao($id);
		}else{
            $titulo= $this->input->post('txt-titulo');
			$link= $this->input->post('txt-link');			           
					
			if ($this->modeleventos->atualizar($titulo, $link, $id)){
				redirect(site_url('Usuarios/auxiliar'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}
}