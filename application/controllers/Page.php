<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {


	public function view($page ='beranda'){
		$this->load->helper('menu_helper');
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}

}
