<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

	
	public function index()
	{
		$this->load->model('midias_model','model_eventos');
		$dados['eventos'] = $this->model_eventos->listar_eventos();
		$this->load->view('Template/Html-header',$dados);
		$this->load->view('Template/Header');
		$this->load->view('Home');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}

	public function equipe()
	{
		$this->load->view('Template/Html-header');
		$this->load->view('Template/Header');
		$this->load->view('Equipe');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}

	public function contato()
	{
		$this->load->view('Template/Html-header');
		$this->load->view('Template/Header');
		$this->load->view('Contato');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}

	public function sobre()
	{
		$this->load->view('Template/Html-header');
		$this->load->view('Template/Header');
		$this->load->view('Sobre');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}

	public function basedados()
	{
		$this->load->model('documentos_model','model_documentos');
		$dados['dados'] = $this->model_documentos->listar_dados();
		$this->load->view('Template/Html-header',$dados);
		$this->load->view('Template/Header');
		$this->load->view('Basedados');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}

	public function midias()
	{
		$this->load->model('midias_model','model_midias');
		$dados['midias'] = $this->model_midias->listar_midias();
		$this->load->view('Template/Html-header',$dados);
		$this->load->view('Template/Header');
		$this->load->view('Midias');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}



	public function pesquisas()
	{
		$this->load->view('Template/Html-header');
		$this->load->view('Template/Header');
		$this->load->view('Pesquisas');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}

	public function repositorio()
	{
		$this->load->view('Template/Html-header');
		$this->load->view('Template/Header');
		$this->load->view('Repositorio');
		$this->load->view('Template/Footer');
		$this->load->view('Template/Html-footer');
	}
}
