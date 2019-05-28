<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('favicon.png')?>" type="image/gif">

    <title>TRANSFER CREDITS | TSF</title>

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
		
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Home/show_user') ?>">
           <i class="fas fa-fw fa-user"></i>
          <span>Show Users</span></a>
     </li>


		 <li class="nav-item active-list">
          <a class="nav-link" href="<?php echo base_url('Home/transfer_credits') ?>">
             <i class="fas fa-fw fa-credit-card"></i>
            <span>Transfer Credits</span></a>
        </li>
		
           <li class="nav-item">
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
            <li class="breadcrumb-item active">Transfer Credits</li>
          </ol>

          <div class="container">
          <h3 class="text-center">Transfer Credits</h3><hr>
        
          <div class="form-group">
		    <form action="<?php echo base_url('Home/verify_details') ?>" method="POST" id="transfer_form">

      <div class="row">
   <div class="col-6"> 
   <label>FROM:</label> 
   <select class="form-control" name="from_id" id="from_id" required>
      <?php 
                        if ($fetch_user->num_rows() > 0) {
                          foreach ($fetch_user->result() as $row) {
                            ?>
                              <option value="<?php echo $row->id; ?>" <?php if ($row->id == $uid) {
                                echo "selected";
                              } ?> ><?php echo $row->name; ?></option>
                              <?php
                          }
                        }
                        else
                        {
                          ?>
                                <option>No Users Found</option>
                              </tr>
                          <?php
                        }
                     ?>
    </select><br>
   
   <br></div>
   <div class="col-6"> 
   <label>TO:</label> 
   <select class="form-control" name="to_id" id="to_id" required>
      <?php 
                        if ($fetch_user->num_rows() > 0) {
                          foreach ($fetch_user->result() as $row) {
                            ?>
                              <option value="<?php echo $row->id; ?>">
                                <?php echo $row->name; ?></option>
                              <?php
                          }
                        }
                        else
                        {
                          ?>
                                <option>No Users Found</option>
                              </tr>
                          <?php
                        }
                     ?>
    </select>
   
   <br></div>
  </div>       
        </div>
          
  <div class="row">
   <div class="col-12">
   
    <input type="TEXT" pattern="[0-9.]+" id="credit_amount" class="form-control"  placeholder="Credit Amount" name="credit_amount" required><br>
   </div>
 </div>
  
    <div class="form-group form-check text-left">
  <input type="button" class="btn btn-primary" name="form_submit" value="Transfer" onclick="validate()">
</div>
</form>
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

    <script>
        function validate() {
          var from=document.getElementById("from_id").value;
          var to=document.getElementById("to_id").value;
          var amount=document.getElementById("credit_amount").value;
          if (amount <= 0) {
            alert("Enter a valid amount");
          }
          else if (isNaN(amount)) {
            alert("Enter a valid amount");
          }
          else if (!(amount.trim())) {
            alert("Enter a credit amount");
          }
          else if (from === to) {
            alert("Select different sender and receiver");
          }
          else
          {
            document.getElementById("transfer_form").submit();
          }
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
  </body>
</html>