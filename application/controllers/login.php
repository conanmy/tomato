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
        if(isset($member['0']->password)) {
            if ($_POST['password'] == $member['0']->password) {
                $data = array(
                    'logged_in' => TRUE,
                    'user_name' => $member['0']->name,
                    'user_id' => $member['0']->id,
                    'user_role'=> $member['0']->role,
                    'verify' => $member['0']->verify
                );
                $this->session->set_userdata($data);
                redirect('/event/');
            }
            else {
                echo '密码不正确，<a href="'.base_url().'">重试</a>';
            }
        }
        else {
            echo '该邮箱不存在，<a href="'.base_url().'">重试</a>';
        }
    }
    
    function out() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

?>