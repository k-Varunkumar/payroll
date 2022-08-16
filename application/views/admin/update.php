<?php include('header.php');?>
<br>

<div class="card">
  <div class="card-body" style="margin:auto;">
    <h1>Edit department</h1>
      <?php echo form_open('admin/update'); ?>
      <?php foreach ($data5 as $data5):?>
      <div class="form-outline mb-4">
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Department id','type'=>'text','name'=>'dept_id','value'=>$data5->dept_id]);?>
        </div>
        <br>
        <div class="form-outline mb-4">
        <?php echo form_input(['class'=>'form-control','type'=>'text','name'=>'dept_name','value'=>$data5->dept_name]);?>
        </div>
        <?php endforeach;?>
        <br>
        <div class="form-outline mb-4">
      <?php echo form_submit(['class'=>'btn btn-primary btn-block mb-4 ','type'=>'submit','value'=>'UPDATE','style'=>'width:80px;']);?>
      </div>
    </div>
  </div>
</div>

<?phpinclude('footer.php');?>
