<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('app_model');
        
        }
    
    
        
        
        
	public function index()
	{

        if($this->session->userdata('username')) {
                $datas['username'] = $this->session->userdata('username');
                $data['dataUser'] = $this->app_model->getSelectedData('user',$datas);
        }

                $data['themes'] = $this->app_model->get_data('themes');            
                $this->load->view('themesintersweb',$data);
        	}
        
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */