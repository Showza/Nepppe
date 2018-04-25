<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model', 'modelusuarios');
	}
	
	public function index()
	{
		$this->load->view('Template/Html-header');
		$this->load->view('Login');
		$this->load->view('Template/Html-footer');
	}

	public function administrador(){
		if($this->session->userdata('userlogado')->tipo == "Administrador"){
			$this->load->view('Template/Html-header');
			$this->load->view('Administrador');
			$this->load->view('Template/Html-footer');
		}else{
			echo "Você não tem permissão para acessar essa página!";
		}
	}

	public function auxiliar(){
		$this->load->view('Template/Html-header');
		$this->load->view('Auxiliar');
		$this->load->view('Template/Html-footer');
	}

	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-email', 'Email', 'required');
		$this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]');

		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$email = $this->input->post('txt-email');
			$senha = $this->input->post('txt-senha');
			$criptografia = base64_encode($senha);
			$this->db->where('email', $email);
			$this->db->where('senha', $criptografia);
			$userlogado = $this->db->get('usuarios')->result();

			if(count($userlogado)==1){
				$dadosSessao['userlogado'] = $userlogado[0];
				$dadosSessao['logado'] = TRUE;
				$this->session->set_userdata($dadosSessao);
				if($this->session->userdata('userlogado')->tipo == "Administrador"){
					redirect(site_url('Usuarios/administrador'));
				} 
				else {
					redirect(site_url('Usuarios/auxiliar'));
				}
			}else{
				$dadosSessao['userlogado'] = NULL;
				$dadosSessao['logado'] = FALSE;
				$this->session->set_userdata($dadosSessao);
				redirect(site_url('Usuarios'));
			}
		}
	}

	public function logout(){
		$dadosSessao['userlogado'] = NULL;
		$dadosSessao['logado'] = FALSE;
		$this->session->set_userdata($dadosSessao);
		redirect(site_url('login'));
	}

	public function excluir($id){
		if($this->session->userdata('userlogado')->tipo == "Administrador"){
			if ($this->modelusuarios->excluir($id)) {
			redirect(site_url('Usuarios/administrador'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}else{
			echo "Você não tem permissão para acessar essa página!";
		}
	}

	public function pagina_cadastro(){
		if($this->session->userdata('userlogado')->tipo == "Administrador"){
				$this->load->view('Template/Html-header');
				$this->load->view('Cadastro');
				$this->load->view('Template/Html-footer');
		}else{
			echo "Você não tem permissão para acessar essa página!";
		}	
	}

	public function editar_dados($id){
		if($this->session->userdata('userlogado')->tipo == "Administrador"){
				$dados['id'] = $id;
				$this->load->view('Template/Html-header');
				$this->load->view('Edicao_dados', $dados);
				$this->load->view('Template/Html-footer');
		}else{
			echo "Você não tem permissão para acessar essa página!";
		}	
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome', 'Nome do usuário', 'required|min_length[3]'); #nome
		$this->form_validation->set_rules('txt-cpf', 'CPF do usuário', 'required|min_length[3]|is_unique[usuarios.cpf]'); #nome
		$this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email|is_unique[usuarios.email]'); #email
		$this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]'); #senha
		$this->form_validation->set_rules('txt-confir-senha', 'Confirmar senha', 'required|matches[txt-senha]'); #senha

		if($this->form_validation->run() == FALSE){
			$this->pagina_cadastro();
		}else{
						
			$nome= $this->input->post('txt-nome');
			$email= $this->input->post('txt-email');
			$senha= $this->input->post('txt-senha');
			$cpf= $this->input->post('txt-cpf');
			$tipo= filter_input(INPUT_POST,"tipo",FILTER_SANITIZE_STRING);
			$criptografia = base64_encode($senha);

			 if ($this->modelusuarios->adicionar($nome, $email, $tipo, $criptografia, $cpf)) {
			 	redirect(site_url('Usuarios/administrador'));
			 }else{
			 	echo "Houve um erro no sistema";
			 }
		}
	}

	public function atualizar_dados($id){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('txt-senha', 'Senha', 'min_length[3]'); #senha
		$this->form_validation->set_rules('txt-confirmasenha', 'Confirmar senha', 'matches[txt-senha]'); #senha
		if($this->form_validation->run() == FALSE){
			$this->editar_dados($id);
		}else{
			$nome= $this->input->post('txt-nome');
			$email= $this->input->post('txt-email');
			$senha= base64_encode($this->input->post('txt-senha'));			
			$cpf= $this->input->post('txt-cpf');
					
			if ($this->modelusuarios->atualizar($nome, $email, $senha, $id, $cpf)){
				redirect(site_url('administrador'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}
}