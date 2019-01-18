<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model {

    function m_menu() {
            $this->db->where('id_parent', 14);
            $this->db->order_by('id', 'ASC');
            $query = $this->db->get('ex_menu');
            return $query->result_array();
    }

    function m_services() {
            $query = $this->db->get('ex_page');
            return $query->result_array();
    }

    function pagination_services($num, $offset) {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('ex_page', $num, $offset);
        return $query->result_array();
    }

    
}    
    