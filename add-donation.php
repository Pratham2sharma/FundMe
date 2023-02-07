<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CrowdFunding - Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <link rel="stylesheet" href="assets/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">   
   <style type="text/css">
    td p {
       margin: -0.3rem;
       font-size: 0.9rem;
    }
    aside.main-sidebar{
       background-color: #ddd;
       color:rgb(77, 75, 75);
    }
    nav ul li a p{
       color:rgb(43, 35, 32);
    }
    nav ul li a i{
       color:rgb(43, 35, 32);
    }
 </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="../index.html">
             <i class="fas fa-sign-out-alt"></i>
          </a>
       </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <img src="assets/img/logo.png" alt="Logo" width="200" style="margin-bottom:-50px;margin-top:-50px"
          style="opacity: .8">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
              <a href="./index.php" class="nav-link">
                <i class="nav-icon fa fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./members.php" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Member
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./campaign-category.php" class="nav-link">
                <i class="nav-icon fa fa-flag"></i>
                <p>
                  Campaign Category
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./campaign-list.php" class="nav-link">
                <i class="nav-icon fa fa-flag-checkered"></i>
                <p>
                  Campaign List
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./gallery.php" class="nav-link">
                <i class="nav-icon fa fa-images"></i>
                <p>
                 Gallery
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./donation.php" class="nav-link">
                <i class="nav-icon fa fa-money-bill"></i>
                <p>
                  Donations
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./logs.php" class="nav-link">
                <i class="nav-icon fa fa-file-invoice"></i>
                <p>
                  Withdraw Logs
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./users.php" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                  User Management
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./reports.html" class="nav-link">
                <i class="nav-icon fa fa-chart-pie"></i>
                <p>
                  Reports
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                  </div></div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                  </div></div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="mname" class="form-control" placeholder="Middle Name">
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                    <label>Address</label>
                    <textarea  class="form-control" name="address" placeholder="ex. Manggahan, Pasig City, Manila"></textarea>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="ex. email@gmail.com">
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Profile</label>
                      <input type="file" name="profile" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Proof of Identity </label>
                      <input type="file" name="identity" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Username </label>
                      <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password </label>
                      <input type="password" name="password" class="form-control" placeholder="***********">
                    </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper --><!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- ChartJS -->
  <script src="assets/plugins/chart.js/Chart.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/js/adminlte.js"></script>  
<!-- jquery-validation -->
<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      lname: {
        required: true,
      },
      fname: {
        required: true,
      },
      mname: {
        required: true,
      },
      address: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      identity: {
        required: true,
      },
      username: {
        required: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      profile: {
        required: true,
      },
    },
    messages: {
      lname: {
        required: "Please enter last name"
      },
      fname: {
        required: "Please enter first name"
      },
      mname: {
        required: "Please enter middle name"
      },
      address: {
        required: "Please enter complete address"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      identity: {
        required: "Please upload proof of identity"
      },
      username: {
        required: "Please enter a username"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      profile: {
        required: "Please choose profile"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
