<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

    public function index(){
        $this->load->model('kecamatan_model', 'kecamatan');
        $list_kecamatan = $this->kecamatan->getAll();
        $data['list_kecamatan'] = $list_kecamatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/index', $data);
        $this->load->view('layout/footer');

    }
    public function detail($id)
    {
        
        $this->load->model('Kecamatan_model');
        $faskes = $this->Kecamatan_model->getById($id);
        $data['list_kecamatan'] = $list_kecamatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/detail', $data);
        $this->load->view('layout/footer');
    }
}