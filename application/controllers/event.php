<?php

class Event extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->model('event_model');
        $data['events'] = $this->db->query('SELECT * FROM event WHERE begin > "'.date("Y-m-d H:i:s",time()).'"')->result();
        $this->load->view('event', $data);
    }
    
    function all() {
        $this->load->model('event_model');
        $data['events'] = $this->db->query('SELECT * FROM event WHERE begin < "'.date("Y-m-d H:i:s",time()).'"')->result();
        $this->load->view('event_all', $data);
    }
    
    function create() {
        $this->load->view('event_create');
    }
    
    function insert() {
        echo($_POST['name']);
        $_POST['owner'] = $this->session->userdata('user_id');
        $_POST['begin'] = date("Y-m-d H:i:s", strtotime($_POST['begin']));
        $_POST['end'] = date("Y-m-d H:i:s", strtotime($_POST['end']));
        $this->load->model('event_model');
        $this->event_model->insert($_POST);
    }
    
    function detail($id) {
        $this->load->model('event_model');
        $data['events'] = $this->event_model->select('id', $id);
        $data['userid'] = $this->session->userdata('user_id');
        $this->load->view('event_detail', $data);
    }
    
    function join() {
        $this->load->model('event_model');
        $event = $this->event_model->select('id', $_GET['eventid']);
        $event = $event['0'];
        $join = $event->join;
        if ($join) {
            $join = explode(',', $join);
        }
        else {
            $join = array();
        }
        array_push($join, $_GET['userid']);
        $this->event_model->update(
            'id',
            $_GET['eventid'], 
            array(
                'join' => implode(',', $join)
            )
        );
    }
    
    function quit() {
        $this->load->model('event_model');
        $event = $this->event_model->select('id', $_GET['eventid']);
        $event = $event['0'];
        $join = $event->join;
        $join = explode(',', $join);
        $index = array_search($_GET['userid'].'', $join);
        if ($index !== FALSE) {
            array_splice($join, $index, 1);
        }
        $this->event_model->update('id',
            $_GET['eventid'],
            array(
                'join' => implode(',', $join)
            )
        );
    }

    function mod($id) {
        $this->load->model('event_model');
        $data['events'] = $this->event_model->select('id', $id);
        $this->load->view('event_mod', $data);
    }
    
    function update() {
        $this->load->model('event_model');
        $this->event_model->update('id', $_GET['id'], array($_GET['key'] => $_GET['value']));
    }
}

?>