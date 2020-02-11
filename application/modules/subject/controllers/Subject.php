<?php

    Class Subject extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }



        public function index()
        {
            $this->load_page('subject/subject_view');
        }

        public function all_subject()
        {
            $data = $this->MY_Model->get_subjects();
            echo json_encode($data);
        }

        public function add()
        {
            $subject_name = $this->input->post('subject_name');

            $add = array(
                'subject_name' => $subject_name
            );

            $this->MY_Model->insertSubject($add);
            echo json_encode($add);
        }

        public function update()
        {
            $subject_name = $this->input->post('subject_name');

            $add = array(
                'subject_name' => $subject_name
            );

            $this->MY_Model->updatesubject($add);
            echo json_encode($add);
        }

        public function delete()
        {
            $data = $this->MY_Model->deleteSubject();
            echo json_encode($data);
        }
    }



































?>
