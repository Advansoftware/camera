<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Geral.php");

	class Executivo extends Geral {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model("Projeto_executivo_model");
	}
	public function index()
	{
		$dados['title'] = "Projetos executivos";
		
		$dados['years'] = $this->Projeto_executivo_model->get_years();
		$dados['projetos'] = $this->Projeto_executivo_model->get_Projeto_executivo();
		
		$this->inicio($dados);
		$this->load->view('executivo');
		$this->load->view('template/footer');
		
	}

}
?>
