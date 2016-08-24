<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('pages/beranda');
		$this->load->view('templates/footer');
	}


}
