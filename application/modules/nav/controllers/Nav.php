<?php

    Class Nav extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }



        public function index()
        {
            $this->load_nav('nav/nav_view');
        }
    }










?>
