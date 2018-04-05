<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesquisas_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function adicionar($titulo, $resumo, $conteudo, $tipo){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['tipo']= $tipo;
		return $this->db->insert('pesquisas', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('pesquisas');
	}

	public function atualizar($titulo, $resumo, $conteudo, $tipo, $id){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['tipo']= $tipo;
		$this->db->where('id', $id);
		return $this->db->update('pesquisas', $dados);
	}

}