
<div class="col-md-12"  style="background-color:#263238; padding-top:50px !important;">
<footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 Rentz, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rentz</h4>
      </div>
      <div class="modal-body col-md-6 col-md-offset-3">
      
        <form class="form-signin" action="user/db_login.php" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label class="sr-only">Licence Number</label>
        <input type="number" id="inputEmail" class="form-control" placeholder="Licence Number" name="user" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a id="addcar"href="index.php?d=2"><h4 class="form-signin-heading"> New User ?</h4></a>
      </form>
  </div>
      <div class="modal-footer">
      
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalcontact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rentz</h4>
      </div>
      <div class="modal-body col-md-6 col-md-offset-3">
      
        Contact Details
  </div>
      <div class="modal-footer">
      
        
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModalabout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rentz</h4>
      </div>
      <div class="modal-body col-md-6 col-md-offset-3">
      
        Rentz About
  </div>
      <div class="modal-footer">
      
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rentz</h4>
      </div>
      <div class="modal-body col-md-6 col-md-offset-3">
      
        
  </div>
      <div class="modal-footer">
      <form>
<div class="form-group">
	 <label>Select Category</label>
	<select class="form-control">
        <option>Car Provider</option>
        <option>Customer</option>
 	</select>
</div>

<div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
  </div>
  
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
  </div>
  
 <div class="form-group">
  <label>Address </label>
	<textarea class="form-control" rows="3"></textarea>
</div>

 <div class="form-group">
    <label>Mob No:</label>
    <input type="number" class="form-control" id="mob" name="mob" maxlength="10" placeholder="Mobile Number">
  </div>
  
   <div class="form-group">
    <label>Licence No:</label>
   <div class="row">
   
   <div class="col-xs-2">
   
    <input type="number" class="form-control"  name="lic1" maxlength="2" size="2" placeholder="XX"> 
    </div>
    
    <div class="col-xs-1">
   <label>/</label>
   
    </div>
    
    <div class="col-xs-5">
    <input type="number" class="form-control"  name="lic2" maxlength="7"  size="7" placeholder="XXXXXXX">
    </div>
    <div class="col-xs-1">
   <label>/</label>
   
    </div>
    
    <div class="col-xs-3">
    <input type="number" class="form-control"  name="lic3" maxlength="4"   size="4" placeholder="XXXX">
    </div>
  </div>
  </div>
  <div class="form-group">
 
    <label>Licence Upload</label>
    <input type="file" id="exampleInputFile">
    
  </div>
  <div class="form-group">
  
    <label>Id Upload</label>
    <input type="file" id="exampleInputFile">
    
  </div>


 <div class="form-group has-warning">
   <h3> * Set Your Licence Number As Your Username(Without Slashes '/') </h3>
    
  </div>
  
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label> Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Confirm Password">
  </div>
  
  
  
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-default">Reset</button>
</form>
        
      </div>
    </div>
  </div>
</div>
