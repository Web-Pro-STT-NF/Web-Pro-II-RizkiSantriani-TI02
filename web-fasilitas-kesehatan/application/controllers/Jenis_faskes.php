<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_faskes extends CI_Controller {

    public function index(){
        $this->load->model('jenis_faskes_model', 'jenis_faskes');
        $list_jenis_faskes = $this->jenis_faskes->getAll();
        $data['list_jenis_faskes'] = $list_jenis_faskes;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_faskes/index', $data);
        $this->load->view('layout/footer');

    }

    public function detail($id)
    {
        
        $this->load->model('jenis_Faskes_model');
        $jenis_faskesd = $this->Faskes_model->getById($id);
        $data['list_jenis_faskes'] = $list_jenis_faskes;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_faskes/detail', $data);
        $this->load->view('layout/footer');
    }
}