<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesquisas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pesquisas_model', 'modelpesquisas');
		 $this->load->helper(array('form', 'url'));
	}
	
	public function excluir($id){
		if ($this->modelpesquisas->excluir($id)) {
			redirect(site_url('Usuarios/auxiliar'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function cadastro_pesquisa(){
		$this->load->view('Template/Html-header');
		$this->load->view('Cadastro_pesquisa');
		$this->load->view('Template/Html-footer');
	}

	public function pagina_edicao($id){
		$dados['id'] = $id;
		$this->load->view('Template/Html-header');
		$this->load->view('Edicao_pesquisa', $dados);
		$this->load->view('Template/Html-footer');
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo', 'Título da pesquisa', 'required');
		$this->form_validation->set_rules('txt-resumo', 'Resumo da pesquisa', 'required'); 
		$this->form_validation->set_rules('txt-conteudo', 'Conteúdo da pesquisa', 'required');

		if($this->form_validation->run() == FALSE){
			$this->cadastro_pesquisa();
		}else{
			$titulo= $this->input->post('txt-titulo');
			$resumo= $this->input->post('txt-resumo');
			$conteudo= $this->input->post('txt-conteudo');
			$tipo= filter_input(INPUT_POST,"tipo",FILTER_SANITIZE_STRING);
			
			 if ($this->modelpesquisas->adicionar($titulo, $resumo, $conteudo, $tipo)) {
			 	redirect(site_url('Usuarios/auxiliar'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}

	public function atualizar_dados($id){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('txt-titulo', 'Título da pesquisa', 'required');
		$this->form_validation->set_rules('txt-resumo', 'Resumo da pesquisa', 'required');
		$this->form_validation->set_rules('txt-conteudo', 'Conteúdo da pesquisa', 'required');

		if($this->form_validation->run() == FALSE){
			$this->pagina_edicao($id);
		}else{
            $titulo= $this->input->post('txt-titulo');
			$resumo= $this->input->post('txt-resumo');
			$conteudo= $this->input->post('txt-conteudo');
            $tipo= filter_input(INPUT_POST,"tipo",FILTER_SANITIZE_STRING);			           
					
			if ($this->modelpesquisas->atualizar($titulo, $resumo, $conteudo, $tipo, $id)){
				redirect(site_url('Usuarios/auxiliar'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}
}