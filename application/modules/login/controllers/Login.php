<?php

    Class Login extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }



        public function index()
        {
            $this->load_page('login/login_view');
        }

        public function auth()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result = $this->MY_Model->authenticate($username,$password);
            if($result){
                $validate = array(
                        'username' =>$username,
                        'password' =>$password
                    );
                $this->session->set_userdata($validate);
                    if($result[0]['status']=='User'){
                        redirect(base_url('user'));
                    }
                    else
                    {
                      redirect(base_url('login'));
                    }
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Credentials');
                redirect(base_url('UserController/index'));
            }
        }
    }



























?>
