<!DOCTYPE html>
<html lang="en">
  
  <?php include('includes/head.php');?>
  
<!-- NAVBAR
================================================== -->
  <body>
    
<?php include('includes/navigation.php');?>

    <!-- Carousel
    ================================================== -->
<?php     include('includes/carousel.php');?>
    
    <!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <?php 
	  if(isset($_GET['d'])){
		 
		  
	  $d=$_GET['d'];
	  
	  switch($d){
		  case 1:
		    include('includes/home.php');
			break;
		case 2:?>
		    <h1 align="center"><?php echo "Registration" ?></h1>
			<?php 
			 break;
		  }
	  ?>
      
    
      <!-- /.row -->


      <!-- START THE FEATURETTES -->
      
      <?php 
	  $d=$_GET['d'];
	  
	  switch($d){
		  case 1:
		     include('includes/home2.php');
				break;
		  
	  		case 2:
		     include('user/registration.php');?>
			 <style>
			 
.carousel {
  height: 400px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 400px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 600px;
}
			 </style>
             <?php
				break;
			case 3:
		     include('user/add_car.php');
				break;
			case 4:
		     include('user/search_all_cars.php');
				break;
			case 5:
		     include('signin.php');
				break;
		  }
	  
	  
	  
	  
	  
	  
	  
	  }//closing if(isset)
	  
	  else{
		  
		  include('includes/home.php');
		  include('includes/home2.php');
		  }
	  ?>
      
      
	

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      
      <?php include('includes/footer.php');?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
   
   <!-- <script src="../../dist/js/bootstrap.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
	$("#addcar1").load(function() {
    $('html, body').animate({
        scrollTop: $("#frmaddcar").offset().top
    }, 2000);
});
</script> 
  </body>
</html>
