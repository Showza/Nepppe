<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function adicionar($titulo, $resumo, $local, $data, $hora){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['local']= $local;
		$dados['data']= $data;
		$dados['hora']= $hora;
		return $this->db->insert('eventos', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('eventos');
	}

	public function atualizar($titulo, $resumo, $local, $data, $hora, $id){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['local']= $local;
		$dados['data']= $data;
		$dados['hora']= $hora;
		$this->db->where('id', $id);
		return $this->db->update('eventos', $dados);
	}

}