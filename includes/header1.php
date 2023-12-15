<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>POS for Xubisoft Ltd.</title>



  <!-- Custom fonts for this template-->
  <link href="link/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="bappy.css">
  <script src="custom/js/order.js"></script>
 
  
  	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
	
		<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
	
	
	
	
	
	
	
	 <link href="link/css/sb-admin-2.min.css" rel="stylesheet">
	
	
		<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.css">
		
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
	

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">
  
  
   <link rel="stylesheet" href="custom/css/mystyle.css">
	
	
	
	
	
	
	
	
	<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
      

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" style="background-color:green;">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >
      
      <div class="shihab text-center text-uppercase">
          <h4>Xubisoft Ltd.</h4>
      </div>

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
		<?php
						if($_SESSION['type']== 1)
							
							{
							echo "Admin";	
							}
							else
							{
								echo "Staff";
							}
							?>
		</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Product & Order Info
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fab fa-accusoft"></i>
          <span>Products</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Products:</h6>
            <a class="collapse-item" href="brand.php"><i class="fab fa-codepen"></i> Brand</a>
			<a class="collapse-item" href="categories.php"><i class="fab fa-dribbble"></i> Category</a>
			<a class="collapse-item" href="product.php"><i class="glyphicon glyphicon-ruble"></i> Products</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="glyphicon glyphicon-shopping-cart"></i> 
          <span>Invoice</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Invoice:</h6>
            <a class="collapse-item" href="orders.php?o=add"><i class="glyphicon glyphicon-plus"></i> Add Invoice</a>
            <a class="collapse-item" href="orders.php?o=manord"><i class="glyphicon glyphicon-edit"></i> Manage Invoice</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Others Info
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
    
	  
	  
	  
	  
		<?php 
							if($_SESSION['type']==1)
							{
								?>
							
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Accounts</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Accounts:</h6>
            <a class="collapse-item" href="accounts.php"><i class="fas fa-fw fa-folder"></i> View Accounts</a>
            <a class="collapse-item" href="report.php"> <i class="fas fa-fw fa-chart-area"></i> report</a>

           
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="hr.php">
          <i class="far fa-address-card"></i>
          <span>HR</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="supplier.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Supplier</span></a>
      </li>      	
								<?php
							}
							
							
								
                            ?>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <li class="nav-item">
        <a class="nav-link" href="report.php">
        <i class="fas fa-fw fa-chart-area"></i>
          <span>Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <b style="font-size:20px;color:blue;">Point of Sales System (POS) for Xubisoft Ltd. </b>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            

        

           

          

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
						if($_SESSION['type'] == 1)
							
							{
							echo "Admin";	
							}
							else
							{
								echo "Staff";
							}
							
						
							
							?></span>
               <i class="fas fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
				
				
				 <a class="dropdown-item" href="setting.php">
                <i class="glyphicon glyphicon-wrench"></i>
                  Settings
                </a>
               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->