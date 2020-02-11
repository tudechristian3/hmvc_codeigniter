<?php

    Class User extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $this->load_page('user/user_view');
        }

        public function add()
        {
            $s_fname = $this->input->post('user_fname');
            $s_lname = $this->input->post('user_lname');
            $s_birthdate = $this->input->post('user_birthdate');
            $s_gender = $this->input->post('user_gender');

            $add = array(
                'fname' => $s_fname,
                'lname' => $s_lname,
                'birthdate' => $s_birthdate,
                'gender' => $s_gender
            );

            $this->MY_Model->insert($add);
            echo json_encode($add);
        }

        public function all_data()
        {
            $users = $this->MY_Model->get_users();
            echo json_encode($users);
        }

        public function update()
        {
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');

            $add = array(
                'fname' => $fname,
                'lname' => $lname
            );

            $this->MY_Model->update($add);
            echo json_encode($add);
        }



        public function delete()
        {
            $data = $this->MY_Model->delete();
            echo json_encode($data);
        }
    }












?>
