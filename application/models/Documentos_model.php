<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function adicionar($titulo, $resumo, $conteudo, $categoria, $documento){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['categoria']= $categoria;
		$dados['documento']= $documento;

		return $this->db->insert('documentos', $dados);
	}
	public function adicionarpde($titulo, $regiao, $new_name){
		$dados['nome_pde']= $titulo;
		$dados['estado']= $regiao;
		$dados['arquivo']= $new_name;

		return $this->db->insert('documentos_pde', $dados);
	}

	public function adicionardadoedu($titulo, $resumo, $conteudo, $link){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['link']= $link;

		return $this->db->insert('dadosedu', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('documentos');
	}
	public function excluirpde($id){
		$this->db->where('id', $id);
		return $this->db->delete('documentos_pde');
	}
	public function excluirdadoedu($id){
		$this->db->where('id', $id);
		return $this->db->delete('dadosedu');
	}

	public function atualizar($titulo, $resumo, $conteudo, $categoria, $id){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['categoria']= $categoria;
		$this->db->where('id', $id);
		return $this->db->update('documentos', $dados);
	}
	public function atualizarpde($titulo, $regiao, $new_name, $id){
		$dados['nome_pde']= $titulo;
		$dados['estado']= $regiao;
		$dados['arquivo']= $new_name;
		$this->db->where('id', $id);
		return $this->db->update('documentos_pde', $dados);
	}
	public function atualizardadoedu($titulo, $resumo, $conteudo, $link, $id){
		$dados['titulo']= $titulo;
		$dados['resumo']= $resumo;
		$dados['conteudo']= $conteudo;
		$dados['link']= $link;
		$this->db->where('id', $id);
		return $this->db->update('dadosedu', $dados);
	}

	public function listar_dados(){
		$this->db->order_by('titulo','ASC');
		$this->db->where('categoria', 'Dado');
		return $this->db->get('documentos')->result();
	}

	public function listar_pdes(){
		$this->db->order_by('nome_pde','ASC');
		return $this->db->get('documentos_pde')->result();
	}

	public function listar_dadoedu(){
		$this->db->order_by('titulo','ASC');
		return $this->db->get('dadosedu')->result();
	}
}
