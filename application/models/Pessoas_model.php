<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function adicionar($nome, $curriculo, $dep, $categoria){
		$dados['nome']= $nome;
		$dados['curriculo']= $curriculo;
		$dados['departamento']= $dep;
		$dados['categoria']= $categoria;
		return $this->db->insert('pessoas', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('pessoas');
	}

	public function atualizar($nome, $curriculo, $dep, $categoria, $id){
		$dados['nome']= $nome;
		$dados['curriculo']= $curriculo;
		$dados['departamento']= $dep;
		$dados['categoria']= $categoria;
		$this->db->where('id', $id);
		return $this->db->update('pessoas', $dados);
	}
}