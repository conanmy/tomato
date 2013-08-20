<?php

class Candidate extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->view('candidate');
    }
    
    function apply() {
        $this->load->model('member_model');
        $this->member_model->update('id', $_GET['id'], array('role' => 'candidate'));
    }

}

?>