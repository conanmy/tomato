<?php

class Me extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->model('member_model');
        $data['info'] = $this->member_model->select('id', $this->session->userdata('user_id'));
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
            $this->upload->display_errors('<p>', '</p>');
        }
        else {
            $data = $this->upload->data();
            $this->load->model('member_model');
            $this->member_model->update('id', $this->session->userdata('user_id'), array(
                'photo' => 'true'
            ));
            echo('上传成功');
            redirect('./me/');
        }
    }
}

?>