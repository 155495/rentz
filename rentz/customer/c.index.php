<?php if(!session_id()) session_start();
if(!isset($_SESSION['username'])){
	header("Location:../index.php?d=5");}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Rentz</title>

   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="dashboard.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
   <script src="../js/jquery-3.2.1.min.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Rentz </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Rentz <span class="sr-only">(current)</span></a></li>
            <li><a href="c.index.php?d=1">Book a Car</a></li>
            <li><a href="c.index.php?d=5">Previous Booked Car</a></li>
            <li><a href="c.index.php?d=6">Current  Booked Car</a></li>
             <li><a href="c.index.php?d=3">Search Car</a></li>
          </ul>
          
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard Customer</h1>

          

          
          <?php
		  if(isset($_GET['d']))
		  {
			  $d=$_GET['d'];
			}
			else
			  {
			 $d=0;
			 }
           switch ($d){
			   	case 1:
			   
						   ?>
						   <h2 class="sub-header " align="center">View All Cars</h2>
						   <?php
								 include('viewAll_carsforBook.php');
								 break;
			   	case 2:
							?>
							<h2 class="sub-header " align="center">Book A Car</h2>
							 <?php
								include('../user/add_car.php');
								 break;
				case 3: 
							?> 
							<h2 class="sub-header " align="center">Search A Car</h2>
							<?php
							include('../user/search_car.php');
									 break;
									 
				case 4: 
							?> 
							<h2 class="sub-header " align="center">Booking Details</h2>
							<?php
							include('booking_page.php');
									 break;
				case 5: 
							?> 
							<h2 class="sub-header " align="center">booked Cars</h2>
							<?php
							include('view_customer_booked_car.php');
									 break;
				case 6: 
							?> 
							<h2 class="sub-header " align="center">Current booked Cars(Lessthan 5 Days)</h2>
							<?php
							include('view_all_cuttentBookedcars_lessthen5.php');
									 break;
				}?>
          
        </div>
      </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="../js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
