<?php ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class   User_model extends CI_Model {


    function  __construct() {
        parent::__construct();
        $this->load->helper('form');
    }


    public function register($encrypt_username) {
        
    $nama_lengkap = $this->input->post('nama_lengkap');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $email = $this->input->post('email');
    $no_telp = $this->input->post('no_telp');
    $themes_dipilih = $this->input->post('themes_dipilih');
    
    
        $data = array (
            "image" => 's',
            "nama_lengkap" => $username,
            "username" => $username,
            "password" => $password,
            "email" => $email,
            "no_telp" => $no_telp,
            "themes_dipilih" => $themes_dipilih,
        );
    
        $query = $this->db->insert('user', $data);
          
          if($query) {
            $getidusers = $this->db->query('select * from user where username="'.$username.'"');

            foreach ($getidusers->result() as $key ) {
                        $session_data = array (
                            'username' => $this->input->post('username'),
                            'id' => $key->no,
                            'themes' => $key->themes_dipilih,
                        );              
                        $this->session->set_userdata($session_data);
                        echo '{"result":'.json_encode($session_data).'}';
            }            

          } else {
              echo "Pendaftaran gagal";
          }
    }


    public function login ($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        $query = $this->db->get('user', 1);
        
                        

        if($query->num_rows() == 1) {
                        $session_data = array (
                        'username' => $this->input->post('username'),
                        );
                        $this->session->set_userdata($session_data);
            echo $username;
        } else {
            echo "Login Gagal";
        }    
    }


    function getmax_norequest() {
    
        $q = $this->db->query("select * from request_publish order by no desc limit 1 ");
       

        foreach ( $q->result() as $row) :
            $tmp1 = $row->no_request;
            $svr = substr($tmp1,3,9);
            $cv = $svr +1 ;
            $cvb = sprintf("%09s", $cv);
   
        endforeach;
        
        return "rqs". $cvb;
        
 
    }



    public function request_publish() {
        $idpengguna = $this->input->post('idpengguna');
        $name_themes = $this->input->post('themesdipilih');
        $name_website = $this->input->post('namadomain');


        $data = array(
            'no_request' => $this->getmax_norequest(),
            'id_pengguna' => $idpengguna,
            'name_website' => $name_website,
            'name_themes' => $name_themes,
            'status' => 'pendding'
            );

        $query = $this->db->insert('request_publish',$data);
        if($query) {
                echo "berhasil";
        } else {
                echo "gagal";
        }
    }


 
    
}

?>