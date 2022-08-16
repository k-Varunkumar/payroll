<?php
  class loginpage extends MY_Controller
  {
    public function index()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('empid','Employee id','required');
      $this->form_validation->set_rules('pswd','password','required');
      if($this->form_validation->run())
      {
        $empid=$this->input->post('empid');
        $this->session->set_userdata('emp_id',$empid);
        $pswd=$this->input->post('pswd');
        $this->load->model('login');
        $entity_id=$this->login->isvalidate($empid,$pswd);
        if($entity_id)
        {
          $this->load->library('session');
          $this->session->set_userdata('entity_id',$entity_id);
          $this->load->model('login');
          $data=$this->login->select();
          $this->load->view('admin/dept',['data'=>$data]);
        }
        else
        {
          $this->session->set_flashdata('login_failed','Invalid Username/Password');
          $this->load->view('admin/login');
        }
      }
      else
      {
        $this->session->set_flashdata('login_failed','Invalid Username/Password');
        $this->load->view('admin/login');
      }
    }
  }
?>
