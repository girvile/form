<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class List_model extends CI_Model {

    function get_list() {
        $query = $this->db->get('students');
        return $query->result_array();
    }
}
