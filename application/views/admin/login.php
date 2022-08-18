<html>
<head>
<title>Login</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"></head>
<body>
<div class="container" style="margin-top:20px;">
  <h1>Login</h1>
  <?php if($error=$this->session->flashdata('login_failed')):?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-danger">
            <?php echo $error;
            $this->session->unset_userdata ( 'login_failed' );?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php echo form_open('loginpage/index'); ?>

  <div class="form-outline mb-4">
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Employee id','type'=>'text','name'=>'empid']);?>
    <label class="form-label">Email address</label>
  </div>
  <div class="form-outline mb-4">
    <?php echo form_password(['class'=>'form-control','placeholder'=>'Password','type'=>'password','name'=>'pswd']);?>
    <label class="form-label">Password</label>
  </div>
  <?php echo form_submit(['class'=>'btn btn-primary btn-block mb-4','type'=>'submit','value'=>'login']);?>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
