<?php

class Member extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->model('member_model');
        $data['members'] = $this->member_model->all();
        $this->load->view('member', $data);
    }
    
    function create() {
        $this->load->view('member_create');
    }
    
    function detail($id) {
        $this->load->model('member_model');
        $data['members'] = $this->member_model->select('id', $id);
        $this->load->view('member_detail', $data);
    }
    
    function insert() {
        echo($_POST['name']);
        $this->load->model('tempmember_model');
        
        $random = rand(100000, 999999).'';
        $_POST['verify'] = $random;
        $id = $this->tempmember_model->insert($_POST);
        
        $this->load->library('email');
        $this->email->from('localhost', '番茄网');
        $this->email->to($_POST['email']); 
        $this->email->subject('番茄网注册验证');
        $this->email->message('请点击完成验证，<a href="http://localhost/tomato/index.php/member/check/'.$id.'/'.$random.'/">去验证</a>');
        $this->email->send();
        echo $this->email->print_debugger();
    }
    
    function check($id, $verify) {
        $this->load->model('tempmember_model');
        $info = $this->tempmember_model->select($id);
        $this->load->model('member_model');
        if ($verify == $info['0']->verify) {
            unset($info['0']->verify);
            $this->member_model->insert($info['0']);
            copy('asset/img/avatar/default.jpg', 'asset/img/avatar/'.$id.'.jpg');
        }
        redirect('../../');
    }
}

?>