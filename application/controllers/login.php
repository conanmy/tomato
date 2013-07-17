<?php

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->view('login');
    }
    
    function check() {
        $this->load->model('member_model');
        $member = $this->member_model->select('email', $_POST['email']);
        if ($_POST['password'] == $member['0']->password) {
            $data = array(
                'logged_in' => TRUE,
                'user_name' => $member['0']->name
            );
            $this->session->set_userdata($data);
            redirect('/event/');
        }
    }
}

?>