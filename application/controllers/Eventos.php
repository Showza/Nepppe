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
		$this->form_validation->set_rules('txt-titulo', 'Título do evento', 'required'); #nome
		$this->form_validation->set_rules('txt-resumo', 'Resumo do evento', 'required'); #nome
		$this->form_validation->set_rules('txt-local', 'Local do evento', 'required'); #email
		$this->form_validation->set_rules('txt-data', 'Data do evento', 'required'); #senha
		$this->form_validation->set_rules('txt-hora', 'Hora do evento', 'required'); #senha

		if($this->form_validation->run() == FALSE){
			$this->cadastro_evento();
		}else{
			$titulo= $this->input->post('txt-titulo');
			$resumo= $this->input->post('txt-resumo');
			$local= $this->input->post('txt-local');
			$data= $this->input->post('txt-data');
			$hora= $this->input->post('txt-hora');
			
			 if ($this->modeleventos->adicionar($titulo, $resumo, $local, $data, $hora)) {
			 	redirect(site_url('Usuarios/auxiliar'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}

	public function atualizar_dados($id){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('txt-titulo', 'Título do evento', 'required');
		$this->form_validation->set_rules('txt-resumo', 'Resumo do evento', 'required');
		$this->form_validation->set_rules('txt-local', 'Local do evento', 'required');
		$this->form_validation->set_rules('txt-data', 'Data do evento', 'required');
		$this->form_validation->set_rules('txt-hora', 'Hora do evento', 'required');
        

		if($this->form_validation->run() == FALSE){
			$this->pagina_edicao($id);
		}else{
            $titulo= $this->input->post('txt-titulo');
			$resumo= $this->input->post('txt-resumo');			
			$local= $this->input->post('txt-local');			
            $data= $this->input->post('txt-data');	
			$hora= $this->input->post('txt-hora');			           
					
			if ($this->modeleventos->atualizar($titulo, $resumo, $local, $data, $hora, $id)){
				redirect(site_url('Usuarios/auxiliar'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}
}