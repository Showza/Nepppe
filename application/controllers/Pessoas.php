<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pessoas_model', 'modelpessoas');
		 $this->load->helper(array('form', 'url'));
	}
	
	public function excluir($id){
		if ($this->modelpessoas->excluir($id)) {
			redirect(site_url('Usuarios/auxiliar'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function cadastro_pessoa(){
		$this->load->view('Template/Html-header');
		$this->load->view('Cadastro_pessoa');
		$this->load->view('Template/Html-footer');
	}

	public function pagina_edicao($id){
		$dados['id'] = $id;
		$this->load->view('Template/Html-header');
		$this->load->view('Edicao_pessoa', $dados);
		$this->load->view('Template/Html-footer');
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome', 'Nome da pessoa', 'required');
		$this->form_validation->set_rules('txt-curriculo', 'Currículo da pessoa', 'required');
		$this->form_validation->set_rules('txt-dep', 'Departamento da pessoa', 'required');


		if($this->form_validation->run() == FALSE){
			$this->cadastro_pessoa();
		}else{
			$nome= $this->input->post('txt-nome');
			$curriculo= $this->input->post('txt-curriculo');
			$dep= $this->input->post('txt-dep');
			$categoria= filter_input(INPUT_POST,"categoria",FILTER_SANITIZE_STRING);

			 if ($this->modelpessoas->adicionar($nome, $curriculo, $dep, $categoria)) {
			 	redirect(site_url('Usuarios/auxiliar'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}

	public function atualizar_dados($id){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome', 'Nome da pessoa', 'required');
		$this->form_validation->set_rules('txt-curriculo', 'Currículo da pessoa', 'required');
		$this->form_validation->set_rules('txt-departamento', 'Departamento da pessoa', 'required');
		if($this->form_validation->run() == FALSE){
			$this->pagina_edicao($id);
		}else{
			$nome= $this->input->post('txt-nome');
			$curriculo= $this->input->post('txt-curriculo');
			$dep= $this->input->post('txt-departamento');
			$categoria= filter_input(INPUT_POST,"categoria",FILTER_SANITIZE_STRING);

			 if ($this->modelpessoas->atualizar($nome, $curriculo, $dep, $categoria, $id)) {
			 	redirect(site_url('Usuarios/auxiliar'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}
}