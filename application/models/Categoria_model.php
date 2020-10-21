<?php

class Categoria_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCategorias()
    {
        $this->db->select('*');
        $this->db->from('categorias');
        $this->db->order_by("nombrecat", "asc");        
        $query = $this->db->get();
        return $query->result();
    }

}