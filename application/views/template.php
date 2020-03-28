
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tulungagung NET</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/bower_components/datatables/dataTables.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/dist/css/skins/_all-skins.min.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>/assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>NT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Tulungagung</b>NET</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->fungsi->user_login()->name ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?= $this->fungsi->user_login()->name ?> <?= $this->fungsi->user_login()->l_name ?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="auth/login" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-home"></i> Home</li>
        <li><a href="<?=site_url('product')?>"> <i class="fa fa-calendar"></i> <span>Data Antena</span></a></li>
        <li><a href="<?=site_url()?>user"><i class="fa fa-users"></i> <span>Users</span></a></li> 
         <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i> <span>Tambah Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/antena/product/add"><i class="fa fa-circle-o"></i> Data Antena</a></li>
            <li><a href="http://localhost/antena/user/add"><i class="fa fa-circle-o"></i> Data User</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <?= $contents?>
  </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>
  </div>

<script src="<?=base_url()?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>/assets/bower_components/datatables/jquery.js"></script>
<script src="<?=base_url()?>/assets/bower_components/datatables/bootstrap.js"></script>

<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>/assets/dist/js/demo.js"></script>

<script>
 $(document).ready(function(){
    $('#tables').DataTable();
  });
</script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

</body>
</html>
