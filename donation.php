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
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0 text-dark"><span class="fa fa-heart"></span> Donations</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Donations</li>
                     </ol>
                  </div>
                  <a class="btn btn-sm elevation-2" href="add-donation.html" style="margin-top: 20px;margin-left: 10px;background-color: #05445E;color: #ddd;"><i
                        class="fa fa-user-plus"></i>
                     Add New</a>
               </div>
            </div>
         </div>
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info elevation-2">
                  <br>
                  <div class="col-md-12 table-responsive">
                     <table id="example1" class="table table-bordered table-hover">
                        <thead class="btn-cancel">
                           <tr>
                              <th>Campaign Name</th>
                              <th>Donated By</th>
                              <th>Amount</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                          <tr>
                             <td>Campaign 1</td>
                             <td>Juan Dela Cruz</td>
                             <td>Php 25,000.00</td>
                             <td>Oct 17, 2021</td>
                             <td><span class="badge bg-success">approved</span></td>
                             <td class="text-right">
                                <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                      class="fa fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                      class="fa fa-trash-alt"></i></a>
                             </td>
                          </tr>
                          <tr>
                             <td>Campaign 2</td>
                             <td>Juan Luna</td>
                             <td>Php 500.00</td>
                             <td>Oct 17, 2021</td>
                             <td><span class="badge bg-danger">disapproved</span></td>
                             <td class="text-right">
                                <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#edit"><i
                                      class="fa fa-edit"></i></a>
                                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#delete"><i
                                      class="fa fa-trash-alt"></i></a>
                             </td>
                          </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="assets/img/sent.png" alt="" width="50" height="46">
               <h3>Are you sure want to delete this Operator?</h3>
               <div class="m-t-20">
                  <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
  <!-- jQuery -->
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
   <!-- DataTables  & Plugins -->
   <script src="assets/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="assets/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="assets/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="assets/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
</body>

</html>