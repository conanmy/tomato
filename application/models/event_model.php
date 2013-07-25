<?php
class Event_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function insert($arr) {
        $this->db->insert('event', $arr);
    }
    
    function select($key, $value) {
        $this->db->where($key, $value);
        $this->db->select('*');
        $query = $this->db->get('event');
        return $query->result();
    }
    
    function all() {
        $this->db->select('*');
        $query = $this->db->get('event');
        return $query->result();
    }
    
    function update($key, $value, $array) {
        $this->db->where($key, $value);
        $this->db->update('event', $array);
    }
}
?>