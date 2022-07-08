<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function index(){
        $this->load->model('komentar_model', 'komentar');
        $list_komentar = $this->komentar->getAll();
        $data['list_komentar'] = $list_komentar;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/index', $data);
        $this->load->view('layout/footer');

    }
    public function detail($id)
    {
        
        $this->load->model('Komentar_model');
        $faskesd = $this->Komentar_model->getById($id);
        $data['list_faskes'] = $list_faskes;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/detail', $data);
        $this->load->view('layout/footer');
    }
}