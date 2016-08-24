<?php
    class Penelitian_model extends CI_Model {

      public function __construct(){
        $this->load->database();
      }

      public function get_penelitian(){

          $query = $this->db->get('pengaju');//nama table datase wa
          return $query->result_array();//nilai kembali array

      }

      public function get_penelitian_id($id = FALSE){
        $query = $this->db->get_where('pengaju', array('id'=>$id));
        return $query->row_array();
      }

      public function set_penelitian(){
        $this->load->helper('url');

        //nama table database => nama dari form
        $data = array (

          'nama'=> $this->input->post('nama'),
          'alamat'=> $this->input->post('alamat'),
          'pekerjaan'=> $this->input->post('pekerjaan'),
          'institusi'=> $this->input->post('institusi'),
          'maksud'=> $this->input->post('maksud'),
          'waktu_mulai'=> $this->input->post('mulai'),
          'waktu_selesai'=> $this->input->post('selesai')

        );

        return $this->db->insert('pengaju', $data);
      }


    }


 ?>
