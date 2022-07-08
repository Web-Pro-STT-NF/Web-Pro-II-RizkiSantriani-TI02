<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $this->load->model('users_model', 'users');
        $data['list_users'] = $this->users->getAll();
        $this->load->model('faskes_model', 'faskes');
        $data['list_faskes'] = $this->faskes->getAll();

        $this->load->view('home/index', $data);
        
    }
}
