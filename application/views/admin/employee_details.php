<?php include('header.php');?>
<br>

<!-- DATABASE TABLE -->

<div class="card" style="margin-top:10px;">
  <div class="card-body">
    <h1>Emplooyee Details</h1>

    <table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
      <th scope="col">add1</th>
      <th scope="col">pincode</th>
      <th scope="col">emp mob</th>
      <th scope="col">emp email</th>
      <th scope="col">is active</th>
      <th scope="col"></th>
     

    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $data1):?>
    <tr>
      <th scope="row"><?php echo $data1->emp_id;?></th>
      <th scope="row"><?php echo $data1->emp_first_name;?></th>
      <td><?php echo $data1->address1;?></td>
      <td><?php echo $data1->pincode;?></td>
      <td><?php echo $data1->emp_mobile;?></td>
      <td><?php echo $data1->emp_email;?></td>
      <td><?php echo $data1->is_active;?></td>
      <td>
        <a href="<?php echo site_url('admin/emp_update_page/'.$data1->emp_id);?>" class="btn btn-primary float-center">Edit</a>
      </td>
    </tr>
  <?php endforeach;?>
  </tbody>
</table>



  </div>
</div>

<?phpinclude('footer.php');?>
