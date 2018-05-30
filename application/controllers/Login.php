<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	function index(){
		$this->load->view('v_login');
	}

	function verify_login(){
		$this->load->model('login_model');
		$verify = $this->login_model->verify($_POST);
		if($verify != 0){
			if($verify['type'] == 'admin')
				redirect("adminController/");
			else if($verify['type'] == 'dosen')
				redirect("dosenController/index/".$verify['result'][0]->nidn);
			else
				redirect("mahasiswaController/index/".$verify['result'][0]->npm);
		}
		else{
			$this->load->view('v_login');
		}
	}
    

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }


}
