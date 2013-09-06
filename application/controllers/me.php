<?php

class Me extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->model('member_model');
        $data['info'] = $this->member_model->select('id', $this->session->userdata('user_id'));
        if ($data['info'][0]->role == 'master') {
            $data['candidates'] = $this->member_model->select('role', 'candidate');
            $data['toverifys'] = $this->member_model->select('verify', 'waiting');
        }
        $this->load->model('event_model');
        $data['myevents'] = $this->event_model->select('owner', $this->session->userdata('user_id'));
        $this->load->view('me', $data);
    }
    
    function avatar() {
        $this->load->view('avatar');
    }
    
    function do_upload() {
        $config = array(
            'allowed_types' => 'jpeg|jpg|gif|png',
            'file_name' => $this->session->userdata('user_id').'.jpg',
            'upload_path' => './asset/img/avatar/',
            'overwrite' => TRUE
        );
        
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            echo '对不起，上传失败，请重试。如果多次不成功，可以换一张图片试试。';
            $this->upload->display_errors();
        }
        else {
            $data = $this->upload->data();
            $this->load->model('member_model');
            $this->member_model->update('id', $this->session->userdata('user_id'), array(
                'photo' => 'true'
            ));
            $this->member_model->update('id', $this->session->userdata('user_id'), array(
                'verify' => 'waiting'
            ));
            redirect('./me/');
        }
    }
    
    function approve() {
        $this->load->model('member_model');
        $this->member_model->update('id', $_GET['id'], array('role' => 'owner'));
    }
    
    function pass() {
        $this->load->model('member_model');
        $this->member_model->update('id', $_GET['id'], array('verify' => 'true'));
        $this->session->set_userdata('verify', 'true');
    }
    
    function mod($id) {
        $this->load->model('member_model');
        $data['me'] = $this->member_model->select('id', $id);
        $this->load->view('me_mod', $data);
    }
    
    function update() {
        $this->load->model('member_model');
        $this->member_model->update('id', $_GET['id'], array($_GET['key'] => $_GET['value']));
    }
}

?>