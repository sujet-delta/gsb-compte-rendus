<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_compte_rendus extends CI_Controller {
	
	//Fonction appel�e par d�faut
	public function index(){
		$this->load->view('v_compte_rendus');
	}
}

