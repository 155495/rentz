<form  name="regis" action="user/db_registration.php" method="post" enctype="multipart/form-data">
<div class="form-group">
	 <label>Select Category</label>
	<select class="form-control" name="category">
        <option value="0">Car Provider</option>
        <option value="1">Customer</option>
 	</select>
</div>

<div class="form-group">
    <label>First Name</label>
    <input  required="required" type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
  </div>
  
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" required="required" class="form-control" id="lname" name="lname" placeholder="Last Name">
  </div>
  
 <div class="form-group">
  <label>Address </label>
	<textarea class="form-control" name="address" rows="3"></textarea>
</div>

 <div class="form-group">
    <label>Mob No:</label>
    <input type="number" required="required" class="form-control" id="mob" name="mob" maxlength="10" placeholder="Mobile Number">
  </div>
  
   <div class="form-group">
    <label>Licence No:</label>
   <div class="row">
   
   <div class="col-xs-2">
   
    <input type="number" required="required" class="form-control"  name="lic1" maxlength="2" size="2" placeholder="XX"> 
    </div>
    
    <div class="col-xs-1">
   <label>/</label>
   
    </div>
    
    <div class="col-xs-5">
    <input type="number" required="required" class="form-control"  name="lic2" maxlength="7"  size="7" placeholder="XXXXXXX">
    </div>
    <div class="col-xs-1">
   <label>/</label>
   
    </div>
    
    <div class="col-xs-3">
    <input type="number" required="required" class="form-control"  name="lic3" maxlength="4"   size="4" placeholder="XXXX">
    </div>
  </div>
  </div>
  <div class="form-group">
 			
    <label>Licence Upload</label>
    <input name="img" type="file" onchange="readURL(this);" required="required" id="img">
    <label  for="fileInput">Licence Image</label>
     <img id="blah" src="" alt="" style="margin:10px;"/> 
    </div>
   
  <div class="form-group">
  
    <label>Id Upload</label>
    <input name="idpic" type="file" onchange="readURL1(this);" required="required" id="img1">
    <label  for="fileInput">ID Image</label>
     <img id="blah1" src="" alt="" style="margin:10px;"/> 
    
  </div>


 <div class="form-group has-warning">
   <h3> * Set Your Licence Number As Your Username(Without Slashes '/') </h3>
    
  </div>
  
  <div class="form-group">
    <label>Password</label>
    <input type="password" required="required" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label> Confirm Password</label>
    <input type="password" class="form-control"  required="required" id="exampleInputPassword1" placeholder=" Confirm Password">
  </div>
  
  
  
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-default">Reset</button>
</form>
<script>
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
				.attr('src', e.target.result)
				.width(300);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
function readURL1(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah1')
				.attr('src', e.target.result)
				.width(300);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
</script>