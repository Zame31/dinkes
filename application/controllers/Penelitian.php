<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('penelitian_model');
    $this->load->helper('url_helper');
  }

	public function view(){
    $this->load->view('templates/header');
    $this->load->view('templates/menu');
		$data['penelitian'] = $this->penelitian_model->get_penelitian();
		$this->load->view('penelitian/lihat', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');

		$this->load->view('templates/header');
		$this->load->view('templates/menu');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('penelitian/tambah');
		}else {
			$this->penelitian_model->set_penelitian();
			redirect('penelitian/lihat');
		}

		$this->load->view('templates/footer');
	}

// 	public function view($slug = NULL){
// 	$data['news_item'] = $this->news_model->get_news($slug);
//
// 	$this->load->view('news/view', $data);
// }

	public function cetak($id = NULL){
		$data['news_item'] = $this->penelitian_model->get_penelitian_id($id);
		//this data will be passed on to the view
		$data['the_content']='mPDF and CodeIgniter are cool!';

		//load the view, pass the variable and do not show it but "save" the output into $html variable
		$html=$this->load->view('penelitian/pdf', $data, true);

		//load mPDF library
		$this->load->library('m_pdf');
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output('surat_keterangan.pdf',I);

	}

}
