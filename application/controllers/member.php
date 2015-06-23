<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Member extends CI_Controller {


    
    public function  __construct() {
        parent::__construct();
        $this->load->model('app_model');
        $this->load->model('user_model');
        $this->load->helper('form','url','html');
        $this->load->library(array('table','form_validation'));
        $this->load->helper('text');
        $this->load->library('encrypt');
        
    }
    


public function proses_register() { 

        $username = $this->input->post('username');
        $password = $this->input->post('password');

            $this->user_model->register($username); 
}


public function login() { 
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->user_model->login($username,$password);          
}


public function getUser() {
        $where['username'] = str_replace("%20"," ",$this->uri->segment(3));
        $datauser = $this->app_model->getSelectedData('user',$where);

        foreach ($datauser as $row) {
            $dataUser = array (
              'nama_lengkap' => $row->nama_lengkap,
              'themes_dipilih' => $row->themes_dipilih,
              'username' => $row->username,
              'image' => $row->image,
              'idusers' => $row->no,
              );
            echo json_encode($dataUser);
        }
}


public function request_publish() {
    $this->user_model->request_publish();
}











}