<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midias extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('midias_model', 'modelmidias');
		 $this->load->helper(array('form', 'url'));
	}
	
	public function excluir($id){
		if ($this->modelmidias->excluir($id)) {
			redirect(site_url('Usuarios/auxiliar'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function cadastro_midia(){
		$this->load->view('Template/Html-header');
		$this->load->view('Cadastro_midia');
		$this->load->view('Template/Html-footer');
	}

	public function pagina_edicao($id){
		$dados['id'] = $id;
		$this->load->view('Template/Html-header');
		$this->load->view('Edicao_midia', $dados);
		$this->load->view('Template/Html-footer');
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo', 'Título da mídia', 'required');
		$this->form_validation->set_rules('txt-link', 'Link da mídia', 'required');

		if($this->form_validation->run() == FALSE){
			$this->cadastro_midia();
		}else{
			$titulo= $this->input->post('txt-titulo');
			$link= $this->input->post('txt-link');
			
			 if ($this->modelmidias->adicionar($titulo, $link)) {
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
					
			if ($this->modelmidias->atualizar($titulo, $link, $id)){
				redirect(site_url('Usuarios/auxiliar'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}
}