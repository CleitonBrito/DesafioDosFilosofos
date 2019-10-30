<?php

class Inicio extends CI_Controller {
	
	public function index(){
		$this->load->view('inicio');
	}

	public function jantar(){
		$this->load->view('jantarCarrosel');
	}
}
