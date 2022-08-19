<?php
  class admin extends MY_Controller
  {
    public function add()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('dept_id','Department Name','required');
      $this->form_validation->set_rules('dept_name','Department ID','required');
      if($this->form_validation->run())
      {
        $dept_id=$this->input->post('dept_id');
        $dept_name=$this->input->post('dept_name');
        $this->load->model('login');
        if($this->login->isadd($dept_id,$dept_name))
        {
          $this->load->model('login');
          $data=$this->login->select();
          $this->load->view('admin/dept',['data'=>$data]);
        }
      }
      else
      {
        $this->session->set_flashdata('add_failed','Invalid Department Id/Name');
        $this->load->model('login');
        $data=$this->login->select();
        $this->load->view('admin/dept',['data'=>$data]);
      }
    }



    public function delete($dept_id)
    {
      $this->load->model("login");
      if($this->login->deleterow($dept_id))
      {
        $this->load->model('login');
        $data=$this->login->select();
        $this->load->view('admin/dept',['data'=>$data]);
      }
    }


    public function update_page($dept_id)
    {
      $this->load->model("login");
      if($data5=$this->login->update_page($dept_id))
      {
        $this->load->view('admin/update',['data5'=>$data5]);
      }
    }

    public function update()
    {
      $dept_id=$this->input->post('dept_id');
      $dept_name=$this->input->post('dept_name');
      $this->load->model("login");
      if($data5=$this->login->update($dept_id,$dept_name))
      {
        $this->load->model('login');
        $data=$this->login->select();
        $this->load->view('admin/dept',['data'=>$data]);
      }
    }

    public function roles_select()
    {
        $this->load->model('login');
        if($data=$this->login->roles_select())
        {
          $this->load->view('admin/roles',['data'=>$data]);
        }
    }

    public function exp_delete($emp__id)
    {
      $this->load->model("login");
      if($this->login->deleterow($emp_id))
      {
        $this->load->model('login');
        $data=$this->login->select();
        $this->load->view('admin/employee_experience',['data'=>$data]);
      }
    }


    public function exp_update_page($emp_id)
    {
      $this->load->model("login");
      if($data5=$this->login->update_page($emp_id))
      {
        $this->load->view('admin/update',['data5'=>$data5]);
      }
    }


    public function exp_update()
    {
      $emp_id=$this->input->post('emp_id');
      $role=$this->input->post('role');
      $this->load->model("login");
      if($data5=$this->login->exp_update($emp_id,$role))
      {
        $this->load->model('login');
        $data=$this->login->select();
        $this->load->view('admin/employee_experience',['data'=>$data]);
      }
    }

    public function exp_select()
    {
        $this->load->model('login');
        if($data=$this->login->exp_select())
        {
          $this->load->view('admin/employee_experience',['data'=>$data]);
        }
    }
    

    public function designation_select()
    {
        $this->load->model('login');
        if($data1=$this->login->designation_select())
        {
          $this->load->view('admin/designation',['data'=>$data1]);
        }
    }
  }

 ?>
