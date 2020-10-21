<?php

class Visitas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getVisitas()
    {
        $this->db->select('count(idv) as total_visitas');
        $this->db->from('visitas');
        $query = $this->db->get();
    
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }

    }

    public function existe_ip($ip)
    {
        $this->db->select('idv');
        $this->db->from('visitas');
        $this->db->where('ip', $ip);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ){
            return true;
        }else{
            return false;
        }
    }

    public function add_visitas($data)
    {
        $this->db->insert('visitas', $data);
    }
}