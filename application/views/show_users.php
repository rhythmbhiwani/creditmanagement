<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('favicon.png')?>" type="image/gif">

    <title>USERS | TSF</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin.css')?>" rel="stylesheet">
  
  <link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">

  </head>

  <body id="page-top">

     <nav class="navbar navbar-expand static-top shadow">

      <a class="navbar-brand mr-1" href="<?php echo base_url() ?>" style="color:#000">TSF TASK #2</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars" style="color:#000"></i>
      </button>

    </nav>
    <div id="wrapper">
  
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav bg shadow">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

      <li class="nav-item active-list">
        <a class="nav-link" href="<?php echo base_url('Home/show_user') ?>">
           <i class="fas fa-fw fa-user"></i>
          <span>Show Users</span></a>
     </li>
    
     <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Home/transfer_credits') ?>">
             <i class="fas fa-fw fa-credit-card"></i>
            <span>Transfer Credits</span></a>
        </li>
    
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url('Home/txn_show') ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Transaction Records</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url() ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Users</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Users</div>

              
              <div class='card-body'>
              <div class='table-responsive'>
                <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Credits</th>
                      <th>Transfer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        if ($fetch_user->num_rows() > 0) {
                          foreach ($fetch_user->result() as $row) {
                            ?>
                            <tr>
                              <td><?php echo $row->id; ?></td>
                              <td><?php echo $row->name; ?></td>
                              <td><?php echo $row->email; ?></td>
                              <td><?php echo $row->credit; ?></td>
                              <td>
                                  <form action="<?php echo base_url('Home/transfer_credits') ?>" method="post">
                                    <div class="input-group">
                                      <input type="hidden" name="uid" value="<?php echo $row->id;?>">
                                      <span class="input-group-btn">
                                        <button type="submit" name="submit"  class="btn"><i class="fa fa-angle-double-right"></i>
                                        </button>
                                    </span>
                                  </form>
                                </div>
                              </td>
                            </tr>
                            <?php
                          }
                        }
                        else
                        {
                          ?>
                              <tr>
                                <td colspan="3">No Users Found</td>
                              </tr>
                          <?php
                        }
                     ?>
                    </tbody>
                </table>
         
              </div>
            </div>


            <div class='card-footer small text-muted'>All Users in Database</div>
          </div>   
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
                 <span>COPYRIGHT © THE SPARKS FOUNDATION | RHYTHM BHIWANI</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
  
  </div>
  
  </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('vendor/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>


  </body>

</html>
