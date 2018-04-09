<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Template/Html-header');
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