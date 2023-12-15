
<?php include"includes/header1.php"; 

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Welcome to Dashboard</h1>
            <a href="report.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
		  
		  
		  <!-- Brand Example -->
		   
		    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				  <a href="brand.php">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Brands</div>
                      <div class="h5 mb-0 font-weight-bold text-white"><?php
											
											$product_query = "SELECT * FROM brands";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           <!-- Brand Example -->
		   
		     <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				  <a href="categories.php">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Categories</div>
                      <div class="h5 mb-0 font-weight-bold text-white"><?php
											
											$product_query = "SELECT * FROM categories";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
		   
		                                                 
		   
            <!-- Pending Requests Card Example -->

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				   <a href="product.php">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Product</div>
                      <div class="h5 mb-0 font-weight-bold text-white">
					  
					  <?php
											
											$product_query = "SELECT * FROM product";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
					  
					  
					  </div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				   <a href="orders.php?o=manord">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Order</div>
                      <div class="h5 mb-0 font-weight-bold text-white"><?php
											
											$product_query = "SELECT * FROM orders where order_status = 1";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




 <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				   <a href="supplier.php">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Supplier</div>
                      <div class="h5 mb-0 font-weight-bold text-white">
					  
					  <?php
											
											$product_query = "SELECT * FROM supplier";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
					  
					  
					  </div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
				  <a href="hr.php">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Staff</div>
                      <div class="h5 mb-0 font-weight-bold text-white"><?php
											
											$product_query = "SELECT * FROM hr_table  ";
	                                         $run_query = mysqli_query($connect,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                    </div>
					</a>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
           
        

        </div>
		
        <!-- /.container-fluid -->
		


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <?php include"includes/footer1.php"; ?>