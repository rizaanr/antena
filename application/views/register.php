
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tulungagung NET | Registration Page</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?=base_url()?>assets/index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <table>
            <tr>
                <td>
                    <div class="form-group <?=form_error('name')? 'has-error' : null?>">
                    <?=form_error('name')?>
                    <input type="text" name="name" class="form-control" value="<?=set_value('name')?>" placeholder="Nama Depan" style="width:95%">
                </td>
                <td>
                    <div class="form-group <?=form_error('l_name')? 'has-error' : null?>">
                    <?=form_error('l_name')?>
                    <input type="text" name="l_name" value="<?=set_value('l_name')?>" class="form-control" placeholder="Nama Belakang" >
                </td>
            </tr>
        </table>
      </div>
      <!-- <div class="form-group has-feedback">
        <input type="text" name="l_name" class="form-control" placeholder="Nama Belakang">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> -->
      <div class="form-group has-feedback">
        <div class="form-group <?=form_error('username')? 'has-error' : null?>">
        <?=form_error('username')?>
        <input type="text" name="username" value="<?=set_value('username')?>" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <div class="form-group <?=form_error('password')? 'has-error' : null?>">
        <?=form_error('password')?>
        <input type="password" name="password" value="<?=set_value('password')?>" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <div class="form-group <?=form_error('pasconf')? 'has-error' : null?>">
        <?=form_error('pasconf')?>
        <input type="password" name="pasconf" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
      </div>
    </form>

    <a href="<?=site_url()?>auth/login" class="text-center">I already have a membership</a>
  </div>
</div>
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
