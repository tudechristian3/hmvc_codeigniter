<?php

    Class Logout extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }



        public function index()
        {
            $this->session->unset_userdata('username');
		    redirect(base_url('login'));
        }
    }







































?>
