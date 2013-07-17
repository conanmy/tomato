<?php
class Tempmember_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function insert($arr) {
        $con = $this->db->insert('tempmember', $arr);
        return $this->db->insert_id();
    }
    
    function select($id) {
        $this->db->where('id', $id);
        $this->db->select('*');
        $query = $this->db->get('tempmember');
        return $query->result();
    }
    
    function all() {
        $this->db->select('*');
        $query = $this->db->get('tempmember');
        return $query->result();
    }
}
?>