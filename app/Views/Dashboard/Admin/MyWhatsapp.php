<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Whatsapp Bot </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../Login/PeriksaSesi" class="brand-link">
      <img src="../assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">WAGW ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php $session = session(); echo $session->get('sesname'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../Admin" class="nav-link">
              <i class="nav-icon fas fa-home"></i><p>Beranda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../Admin/Users" class="nav-link">
              <i class="nav-icon fas fa-users"></i><p>Users Management</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Admin/WhatsappKontak" class="nav-link">
              <i class="nav-icon fab fa-whatsapp"></i><p>Whatsapp Contact List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/Admin/MyWhatsapp" class="nav-link active">
              <i class="nav-icon fab fa-whatsapp"></i><p>MyWhatsapp Account</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>  
  <?php 
  $WAGW = $session->get('sesiakses');
  if($WAGW == "Users"){
  return redirect()->to('../Dashboard/Member');
  }             
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Whatsapp Bot Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">      
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bot List For All User!</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Owner</th>
                      <th>Number</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>                                                                              
                  <tbody>
                  <?php foreach($web_user as $row):?>
                   <tr>
                      <td><?= $row->wa_user;?></td>
                      <td><?= $row->wa_no;?></td>
                      <td><?php if($row->status_wa == "CONNECTED"){
                      
                      ?>
                      <span class="badge bg-success">CONNECTED WITH SERVICE - BOT READY!</span>
                      <?php
                      }elseif($row->status_wa == "DISCONNECTED"){
                      
                      ?>
                      <span class="badge bg-danger">DISCONNECTED FROM SERVICE - BOT NOT READY!</span>
                      <?php
                      }elseif($row->status_wa == "DISABLED"){
                      
                      ?>
                      <span class="badge bg-warning">NUMBER DISABLED!</span>
                      <?php
                      }
                      ?>
                      </td>
                      <td id="CheckStatus"><?php if($row->status_wa == "CONNECTED"){
                      
                      ?>
                      <a href="#" class="btn btn-danger btn-flat" title="LOGOUT WHATSAPP"><i class="fas fa-sign-out-alt"></i></a>
                      <?php
                      }elseif($row->status_wa == "DISCONNECTED"){
                      
                      ?>
                      <a href="#" class="btn btn-primary btn-flat" title="LOGIN WHATSAPP" data-toggle="modal" data-target="#LoginWA" data-id="<?= $row->id;?>" data-wano="<?= $row->wa_no;?>"><i class="fas fa-qrcode"></i></a>
                      <a href="/Admin/OpenAgent" class="btn btn-info btn-flat" title="BUKA WHATSAPP AGENT" target="_blank"><i class="fab fa-whatsapp"></i></a>
                      <?php
                      }elseif($row->status_wa == "DISABLED"){
                      
                      ?>
                      <a href="#" class="btn btn-info btn-flat" title="AKTIFKAN NOMOR WHATSAPP"><i class="fas fa-toggle-on"></i></a>
                      <?php
                      }
                      ?>  
                      <a href="#" class="btn btn-danger btn-flat" title="REMOVE NUMBER"><i class="fas fa-trash-alt"></i></a> 
                      <a href="#" class="btn btn-info btn-flat" title="RUBAH NOMOR WHATSAPP"><i class="fas fa-pencil-alt"></i></a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
            
        <!-- Modal Edit Product-->  
        <?php 
        //$db      = \Config\Database::connect();
        //$builder = $db->table('web_user');
        //$builder->where('wa_user', $session->get('sesuser'));
        //$builder->where('wa_no', $session->get('seswano')); 
        //$builder->select('*');
        //$builder->join('tmp');
        //$waID = '<span class="waID"></span>';
        
        //$TestQueryModal = $db->query("SELECT * FROM web_user WHERE id='".$waID."' AND wa_no='6285156644787'");
        //$ResultQueryModal = $TestQueryModal->getResult(); 
        
        ?>
        <form action="/product/update" method="post">
        <div class="modal fade" id="LoginWA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">QRIS LOGIN WHATSAPP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">                                   
            <?php 
            foreach ($web_user as $RQM)
            {            
            ?>
            <div class="form-group">
               <p>Your Whatsapp number is: <?php echo $RQM->wa_no;?>.</p>
            </div>
            <?php
                if($RQM->qr == "" AND $RQM->status_wa == "DISCONNECTED"){ 
                $ms = round(microtime(true) * 100);      
                
            ?> 
            <div class="form-group">
                   <center><img id="qris" name="capture" src="/wa-qris/<?php echo "qr".$RQM->id."00.jpg?t=".$ms; ?>" /></center>
            </div>
            <?php
                }
            }
            ?>             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
       
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../assets/adminlte/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../assets/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/adminlte/plugins/raphael/raphael.min.js"></script>
<script src="../assets/adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../assets/adminlte/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../assets/adminlte/dist/js/pages/dashboard2.js"></script>


<script>
var WhatsappID;

$('#CheckStatus a').click(function() {
   WhatsappID = $(this).attr('data-id'); 
});

$('#LoginWA').on('show.bs.modal', function (e) {
    $(this).find('.waID').text(WhatsappID);
});
</script>
</body>
</html>
