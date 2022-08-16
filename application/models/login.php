<?php
class login extends CI_Model
{
  public function isvalidate($empid,$password)
  {
    $q=$this->db->where(['emp_id'=>$empid,'user_password'=>$password])->get('users');
    if($q->num_rows())
    {
      return $q->row()->entity_id;
    }
    else
    {
      return false;
    }
    }

    public function select()
    {
      $this->load->library('session');
      $entity_id=$this->session->userdata('entity_id');
      $q1=$this->db->where(['entity_id'=>$entity_id])->get('department');
      return $q1->result();

    }


    public function isadd($dept_id,$dept_name)
    {
      $this->load->library('session');
      $entity_id=$this->session->userdata('entity_id');
      $emp_id=$this->session->userdata('emp_id');
      $data = array(
                        'entity_id'=> $entity_id,
                        'dept_id'  => $dept_id,
                        'dept_name'=>$dept_name,
                        'is_active' => 1,
                        'cr_on'=>89,
                        'cr_by'=>$emp_id,
                        'mo_on'=>null,
                        'mo_by'=>null
                        );
        $q2=$this->db->insert('department',$data);
        return $q2;
    }


    public function deleterow($dept_id)
    {
      $this->db->set('is_active', 0);
      $this->db->where('dept_id', $dept_id);
      $this->db->update('department');
      return 1;

    }



    public function update_page($dept_id)
    {
      $q2=$this->db->where(['dept_id'=>$dept_id])->get('department');
      return $q2->result();

    }

    public function update($dept_id,$dept_name)
    {
      $emp_id=$this->session->userdata('emp_id');
      $data = array(
    'dept_id' => $dept_id,
    'dept_name' => $dept_name,
    'mo_on' =>69,
    'mo_by' =>$emp_id
    );

    $this->db->set($data);
    $this->db->where('dept_id', $dept_id);
    $this->db->update('department');
    return 1;
    }
     
    public function roles_select()
    {
      $this->load->library('session');
      $entity_id=$this->session->userdata('entity_id');
      $q1=$this->db->where(['entity_id'=>$entity_id])->get('roles');
      return $q1->result(); 
    }



}
 ?>
