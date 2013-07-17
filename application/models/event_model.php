<?php
class Event_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function insert($arr) {
        $this->db->insert('event', $arr);
    }
    
    function select($id) {
        $this->db->where('id', $id);
        $this->db->select('*');
        $query = $this->db->get('event');
        return $query->result();
    }
    
    function all() {
        $this->db->select('*');
        $query = $this->db->get('event');
        return $query->result();
    }
}
?>