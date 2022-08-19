<?php include('header.php');?>
<br>

<!-- DATABASE TABLE -->

<div class="card" style="margin-top:10px;">
  <div class="card-body">
    <h1>Experience</h1>

    <table class="table">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">SL</th>
      <th scope="col">ROLE</th>
      <th scope="col">START DATE</th>
      <th scope="col">END DATE</th>
      <th scope="col">SERVICE MONTHS</th>
      <th scope="col">LAST DRAWN SALARY</th>
      <th scope="col">MANAGEMENT ROLE</th>
     

    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $data1):?>
    <tr>
      <th scope="row"><?php echo $data1->emp_id;?></th>
      <th scope="row"><?php echo $data1->sl;?></th>
      <td><?php echo $data1->role;?></td>
      <td><?php echo $data1->start_date;?></td>
      <td><?php echo $data1->end_date;?></td>
      <td><?php echo $data1->last_drawn_salary;?></td>
      <td><?php echo $data1->management_role;?></td>
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
