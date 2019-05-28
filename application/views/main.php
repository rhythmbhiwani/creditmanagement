<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('favicon.png')?>" type="image/gif">

    <title>CREDIT MANAGEMENT SYSTEM | RHYTHM BHIWANI | TSF</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin.css')?>" rel="stylesheet">
	
	<link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">

  <style type="text/css">
    @media only screen and (orientation: landscape) {
      .sidebar{
           display: block;
          }
        }
  </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand static-top shadow">

      <a class="navbar-brand mr-1" href="<?php echo base_url()?>" style="color:#000">TSF TASK #2</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars" style="color:#000"></i>
      </button>
    </nav>
  <!-- Sidebar -->
    <div id="wrapper">
      <ul class="sidebar navbar-nav bg shadow ">
        <li class="nav-item active-list">
          <a class="nav-link" href="<?php echo base_url()?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Home/show_user') ?>">
           <i class="fas fa-fw fa-user"></i>
          <span>Show Users</span></a>
     </li>


		 <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Home/transfer_credits')?>">
             <i class="fas fa-fw fa-credit-card"></i>
            <span>Transfer Credits</span></a>
        </li>
		
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Home/txn_show')?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Transaction Records</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
		 <div class="card shadow">
          <div class="card-body">
          <h4 class="text-center">Dashboard</h4>
		  </div>					 
        </div><br>

         <div class="container">
		 	
           <!--Project Review-->
		
		<div class="row">
		 <div class="col-lg-8 col-md-8 col-sm-8 col-12 d-block m-auto center">
		 	
		<div class="card hover">
		<div class="card-body">
		<h4 class="text-center">CREDIT MANAGEMENT SYSTEM | RHYTHM BHIWANI | TSF</h4><hr>
		</div>
		<p class="container"> 
		 Hi, I am Rhythm Bhiwani, and this is my project based on The Sparks Foundation Internship Task.
		</p>
		 <h6 class="container"><b>In this I used certain type of TECHNOLOGY:</b></h6>
		 <ul>
		 <li>HTML-CSS</li>
		 <li>JAVA SCRIPT</li>
		 <li>CODEIGNITER PHP FRAMEWORK</li>
		 <li>MYSQL</li>
		 <li>BOOTSTRAP</li>
     </ul>
     <h6 class="container"><b>Featuers of this projec:</b></h6>
		<ol>
		<li><h6>Fetch Data of Users from Database</h6></li>
		<li><h6>Transfer Credits from one user to another</h6></li>
		<li><h6>Record each transaction happening</h6></li>
		<li><h6>Validates all data, avoiding inconsistancy of Data</h6></li>
		<li><h6>Optimized for different devices</h6></li> 
    <li><h6>Error Free Code</h6></li> 
		</ol>
		</div>
		
		<br>
		<div class="row">
		 <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto center">
		 <div class="card shadow">
		 <div class="card-body">
		  <h5 class="text-center">THE</h5>
		 </div>
		</div>
		 </div>
		 <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto center">
		  <div class="card shadow">
		 <div class="card-body">
		  <h5 class="text-center">SPARKS</h5>
		 </div>
		</div>
		 </div>
		 <div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto center">
		  <div class="card shadow">
		 <div class="card-body">
		  <h5 class="text-center">FOUNDATION</h5>
		 </div>
		</div>
		 </div>
		</div><br><br>		
		 </div>
		</div>

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
    <script src="<?php echo base_url('vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('vendor/datatables/dataTables.bootstrap4.js') ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
    <!-- Demo scripts for this page-->

  </body>
</html>