<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function adicionar($titulo, $link){
		$dados['titulo']= $titulo;
		$dados['link']= $link;
		return $this->db->insert('eventos', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('eventos');
	}

	public function atualizar($titulo, $link, $id){
		$dados['titulo']= $titulo;
		$dados['link']= $link;
		$this->db->where('id', $id);
		return $this->db->update('eventos', $dados);
	}

}