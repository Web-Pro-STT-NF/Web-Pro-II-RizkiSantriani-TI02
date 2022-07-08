<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes extends CI_Controller {

    public function index(){
        $this->load->model('faskes_model', 'faskes');
        $list_faskes = $this->faskes->getAll();
        $data['list_faskes'] = $list_faskes;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/index', $data);
        $this->load->view('layout/footer');

    }
}