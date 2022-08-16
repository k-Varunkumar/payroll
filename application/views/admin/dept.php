<?php include('header.php');?>
<br>



<div class="card">
  <div class="card-body" style="margin:auto;">
    <h1>Add new department</h1>
      <?php echo form_open('admin/add'); ?>
      <div class="row">
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Department id','type'=>'text','name'=>'dept_id']);?>
        </div>
        <div class="col">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Department name','type'=>'text','name'=>'dept_name']);?>
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
















<div class="card" style="margin-top:10px;">
  <div class="card-body">
    <h1>Department</h1>

    <table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Is Active</th>
      <th scope="col">Created by</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $data1):?>
    <tr>
      <th scope="row"><?php echo $data1->dept_id;?></th>
      <td><?php echo $data1->dept_name;?></td>
      <td><?php echo $data1->is_active;?></td>
      <td><?php echo $data1->	cr_by;?></td>
      <td>
        <a href="<?php echo site_url('admin/update_page/'.$data1->dept_id);?>" class="btn btn-primary float-center">Edit</a>
        <a href="<?php echo site_url('admin/delete/'.$data1->dept_id);?>" class="btn btn-danger float-center">Delete</a>
      </td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>



  </div>
</div>

<?phpinclude('footer.php');?>
