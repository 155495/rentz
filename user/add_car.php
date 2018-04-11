
<div id="addcar1">
<form id="frmaddcar" action="../user/db_addcar.php" method="post" enctype="multipart/form-data">


<div class="form-group">


<strong>Select Year :</strong> <input  class="form-control" type="text" placeholder="Click to Select Year" name="year" id="example1">
       
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
					  maxDate: new Date, minDate: new Date(2007),
                    minViewMode:2,
                    autoclose: true,
                     format: 'yyyy'
                });  
            
            });
        </script>
        </div>
     <div class="form-group">
   <input type="hidden"  name="usernameid"value="<?php echo $_SESSION['username'];?>" />
	 <label>Select Model</label>
	<select class="form-control" name="model">
        <option><?php echo $_SESSION['username'];?></option>    
            <option>Maruti Suzuki</option>
            <option>Hyundai</option>
            <option>Honda</option>
            <option>Mahindra</option>
            <option>Toyota</option>
            <option>Tata</option>
            <option>Volkswagen</option>
            <option>Ford</option>
            <option>Datsun</option>
            <option>Renault</option>
            <option>Audi</option>
            <option>Mercedes-Benz</option>
    		<option>Nissan</option>
    		<option>BMW</option>
            <option>Fiat</option>
            <option>Land Rover</option>
            <option>Jaguar</option>
            <option>Volvo</option>
            <option>Jeep</option>
            <option>Porsche</option>
            <option>Force</option>
        
 	</select>
</div>
<div class="form-group">
    <label>Colour</label>
    <input type="text" class="form-control" id="colur" name="colour" placeholder="Colour">
  </div>
  <div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control"  name="Company" placeholder="Colour">
  </div>
  
<div class="form-group has-warning">
    <label>Registration Number</label>
    <input type="text"  class="form-control"  name="reg" placeholder="Registration Number">
  </div>

<div class="form-group">
 
    <label>RC book Upload</label>
    <input name="img" type="file" onchange="readURL(this);" required="required" id="img">
     <img id="blah" src="" alt="" style="margin:10px;"/> 
  </div>
  
  <div class="form-group">
 
    <label>Car Image  Upload</label>
   <input name="idpic" type="file" onchange="readURL1(this);" required="required" id="img1">
    <img id="blah1" src="" alt="" style="margin:10px;"/> 
  </div>
  
  <div class="form-group">
    <label>Seat Capacity</label>
    <input type="number" class="form-control"  name="seat" placeholder="Seat Capacity">
  </div>
  
  <div class="form-group ">
    <label>Categeory</label>
    <input type="text" class="form-control"  name="categeory" placeholder="Categeory">
  </div>
   <div class="form-group ">
    <label>Milage / Km</label>
    <input type="number" class="form-control"  name="milage" placeholder="Milage/Km">
  </div>
  
   <div class="form-group ">
    <label>Charge/Km</label>
    <input type="number" class="form-control"  name="charge" placeholder="Charge/Km">
  </div>
<div class="form-group" data-date-format="mm-dd-yyyy">

 <div class="form-group ">
         <div class="col-xs-4">
            <label>A/C</label>
            <input type="checkbox"   class="form-controle"  name="ac" placeholder="Milage/Km">
          </div>
          
           <div class="col-xs-4">
            <label>Automatic Transmission</label>
            <input type="checkbox" class="form-controle"   name="at" placeholder="Milage/Km">
          </div>
          <div class="col-xs-4">
            <label>Music Player</label>
            <input type="checkbox" class="form-controle"  name="musicplayer" placeholder="Milage/Km">
          </div>
</div>
<div class="form-group ">
<strong>Policy Expiry Date :</strong> <input  class="form-control" type="date" placeholder="Click to Select Year" name="policyexp" id="example2">
       </div>
       <div class="form-group ">
       
       <button  type="submit" class="btn btn-primary">Submit</button>
  <button   type="reset" class="btn btn-default">Reset</button>
       
      </div> 
       
       
        
        </div>

</form></div>
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