<?php

class Event extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->model('event_model');
        $data['events'] = $this->event_model->all();
        $this->load->view('event', $data);
    }
    
    function create() {
        $this->load->view('event_create');
    }
    
    function insert() {
        echo($_POST['name']);
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
        $join = explode(',', $join);
        array_push($join, $_GET['userid']);
        $this->event_model->update('id', $_GET['eventid'], array(
            'join' => implode(',', $join))
        );
    }
}

?>