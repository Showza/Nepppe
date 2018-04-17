<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midias_model extends CI_Model{

	public $id;
	public $titulo;
	public $link;

	public function __construct(){
		parent::__construct();
	}

	public function listar_eventos(){
		$this->db->limit(4);//Aqui estou falando que vou listar apenas 4 Card p/ Carrousel
		$this->db->order_by('id','DESC');
		return $this->db->get('eventos')->result();
	}
	public function listar_midias(){
		
		$this->db->order_by('id','ASC');
		return $this->db->get('midias')->result();
	}

	public function adicionar($titulo, $link){
		$dados['titulo']= $titulo;
		$dados['link']= $link;
		return $this->db->insert('midias', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('midias');
	}

	public function atualizar($titulo, $link, $id){
		$dados['titulo']= $titulo;
		$dados['link']= $link;
		$this->db->where('id', $id);
		return $this->db->update('midias', $dados);
	}

}