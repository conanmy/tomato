<?php
class Member_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function insert($arr) {
        $this->db->insert('member', $arr);
    }
    
    function select($key, $value) {
        $this->db->where($key, $value);
        $this->db->select('*');
        $query = $this->db->get('member');
        return $query->result();
    }
    
    function all() {
        $this->db->select('*');
        $query = $this->db->get('member');
        return $query->result();
    }
}
?>