<?php

	class Jantar extends CI_Controller{
		
		public function desafio($id = null){
			if($id == 1){
				$this->load->view('desafio01');
			}else if($id == 2){
				$this->load->view('desafio02');
			}else if($id == 3){
				$this->load->view('desafio03');
			}

			if($id == null || $id < 1 || $id > 3){
				redirect();
			}
		}

		public function jogo($id = null){
			if($id == 1){
				$this->load->view('jogo01');
			}else if($id == 2){
				$this->load->view('jogo02');
			}else if($id == 3){
				$this->load->view('jogo03');
			}

			if($id == null || $id < 1 || $id > 3){
				redirect();
			}
		}

		public function resultado($id = null){
			if($id == 1){
				$this->load->view('resultado_01');
			}else if($id == 2){
				$this->load->view('resultado_02');
			}else if($id == 3){
				$this->load->view('resultado_03');
			}

			if($id == null || $id < 1 || $id > 3){
				redirect();
			}
		}
	}