<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    private $users = 'users';
    private $subjects = 'subject';

    public function __construct(){
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert($this->users, $data);
    }

    public function authenticate($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get($this->users);
        return $query->result_array();
    }

    public function get_users()
    {
        $query = $this->db->get($this->users);
        return $query->result_array();
    }



    public function update($data)
    {
      $this->db->where('user_id', $this->input->post('user_id'));
      return $this->db->update($this->users, $data);
    }


    public function delete()
    {
        $user_id=$this->input->post('user_id');
        $this->db->where('user_id', $user_id);
        $result=$this->db->delete('users');
        return $result;
    }
    //subject db


    public function insertSubject($data)
    {
        $this->db->insert($this->subjects, $data);
    }


    public function get_subjects()
    {
        $query = $this->db->get($this->subjects);
        return $query->result_array();
    }

    public function updatesubject($data)
    {
      $this->db->where('subject_id', $this->input->post('subject_id'));
      return $this->db->update($this->subjects, $data);
    }

    public function deleteSubject()
    {
        $subject_id=$this->input->post('subject_id');
        $this->db->where('subject_id', $subject_id);
        $result=$this->db->delete('subject');
        return $result;
    }

}
