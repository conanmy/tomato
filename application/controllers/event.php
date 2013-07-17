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
        $data['events'] = $this->event_model->select($id);
        $this->load->view('event_detail', $data);
    }
    
}

?>