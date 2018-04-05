<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function adicionar($titulo, $resumo, $conteudo, $categoria){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['categoria']= $categoria;

		return $this->db->insert('documentos', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('documentos');
	}

	public function atualizar($titulo, $resumo, $conteudo, $categoria, $id){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['categoria']= $categoria;
		$this->db->where('id', $id);
		return $this->db->update('documentos', $dados);
	}

}