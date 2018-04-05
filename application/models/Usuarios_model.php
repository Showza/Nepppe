<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{

	public $id;
	public $nome;

	public function __construct(){
		parent::__construct();
	}

	public function listar_usuarios(){
		$this->db->order_by('nome', 'ASCS');
		return $this->db->get('usuarios')->result();

	}

	public function adicionar($nome, $email, $tipo, $senha, $cpf){
		$dados['nome']= $nome;
		$dados['email']= $email;
		$dados['senha']= $senha;
		$dados['tipo']= $tipo;
		$dados['cpf']= $cpf;
		return $this->db->insert('usuarios', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('usuarios');
	}

	public function atualizar($nome, $email, $senha, $id, $cpf){
		$dados['nome']= $nome;
		$dados['email']= $email;
		$dados['senha']= $senha;
		$dados['cpf']= $cpf;
		$this->db->where('id', $id);
		return $this->db->update('usuarios', $dados);
	}

}