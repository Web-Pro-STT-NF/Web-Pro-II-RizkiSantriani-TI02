<?php
 class Komentar_model extends CI_Model{

    private $table = "komentar";

    public function getAll(){
       $query =  $this->db->get($this->table);
        return $query->result();
    }

     public function findById($id){
        $this->db->where("kode",$id);
        $query = $this->db->get($this->table);
        return $query->row();
     }
    
 }
