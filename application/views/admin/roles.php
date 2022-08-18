<?php include('header.php');?>
<br>


<div class="card" style="margin-top:10px;">
  <div class="card-body">
    <h1>Roles</h1>

    <table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">login req</th>
      <th scope="col">Is Active</th>
      <th scope="col">Created by</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $data1):?>
    <tr>
      <th scope="row"><?php echo $data1->role_id;?></th>
      <td><?php echo $data1->role_name;?></td>
      <td><?php echo $data1->login_req;?></td>
      <td><?php echo $data1->is_active;?></td>
      <td><?php echo $data1->	cr_by;?></td>
      <td>
        <a href="<?php echo site_url('admin/update_page/'.$data1->dept_id);?>" class="btn btn-primary float-center">Edit</a>
        <a href="#" class="btn btn-danger float-center">Delete</a>
        <!-- <?php echo site_url('admin/update_page/'.$data1->dept_id);?> -->
        <!-- <?php echo site_url('admin/delete/'.$data1->dept_id);?> -->
        
      </td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>





<?phpinclude('footer.php');?>