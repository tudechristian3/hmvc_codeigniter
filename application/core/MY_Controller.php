<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function __construct(){
		$this->load->model('MY_Model');
		$route = $this->router->fetch_class();
		if($route == 'login'){
			if($this->session->has_userdata('username')){
				redirect(base_url('user'));
			}
		} else {
			if(!$this->session->has_userdata('username')){
				redirect(base_url('login'));
			}
		}
	}

	public function load_page($page, $data = array()){
      	$this->load->view('Includes/header',$data);
      	$this->load->view('nav/nav_view',$data);
      	$this->load->view($page,$data);
      	$this->load->view('Includes/footer',$data);
     }
	// public function load_nav($page, $data = array()){
    //   	$this->load->view('Includes/header',$data);
    //   	$this->load->view($page,$data);
    //   	$this->load->view('Includes/footer',$data);
    //  }

}
