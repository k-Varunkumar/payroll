<?php include('header.php');?>
<br>


<!-- ADD DEPARTMENT -->

<div class="card">
  <div class="card-body" style="margin:auto;">
    <h1>Add new Experience</h1>
      <?php echo form_open('admin/add_exp'); ?>
      <div class="row">
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Employee id','type'=>'text','name'=>'emp_id']);?>
        </div>
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'role','type'=>'text','name'=>'role']);?>
        </div>
        <div class="col">
      <?php echo form_submit(['class'=>'btn btn-primary btn-block mb-4 ','type'=>'submit','value'=>'ADD','style'=>'width:60px;']);?>
      </div>
    </div>

    <?php if($error=$this->session->flashdata('add_failed')):?>
      <div class="row">
        <div class="col-lg-6">
          <div class="alert alert-danger">
              <?php echo $error;?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>














<!-- DATABASE TABLE -->

<div class="card" style="margin-top:10px;">
  <div class="card-body">
    <h1>Department</h1>

    <table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">ROLE</th>
      <th scope="col">LAST DRAWN SALARY</th>
      <th scope="col">MANAGEMENT ROLE</th>
     

    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $data1):?>
    <tr>
      <th scope="row"><?php echo $data1->emp_id;?></th>
      <td><?php echo $data1->role;?></td>
      <td><?php echo $data1->last_drawn_salary;?></td>
      <td><?php echo $data1->management_role;?></td>
      <td>
        <a href="<?php echo site_url('admin/emp_update_page/'.$data1->emp_id);?>" class="btn btn-primary float-center">Edit</a>
        <a href="<?php echo site_url('admin/emp_delete/'.$data1->emp_id);?>" class="btn btn-danger float-center">Delete</a>
      </td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>



  </div>
</div>

<?phpinclude('footer.php');?>
