<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_rating extends CI_Controller {

    public function index(){
        $this->load->model('nilai_rating_model', 'nilai_rating');
        $list_nilai_rating = $this->nilai_rating->getAll();
        $data['list_nilai_rating'] = $list_nilai_rating;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('nilai_rating/index', $data);
        $this->load->view('layout/footer');

    }
}