<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_practiciens extends CI_Controller {
	
	//Fonction appelée par défaut
	public function index(){
		$this->load->view('v_practiciens');
	}
}

