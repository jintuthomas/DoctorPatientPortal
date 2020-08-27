<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MEDILIFE</title>
	<!-- Mobile Specific Metas -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="doctor/details/css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="doctor/details/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="doctor/details/css/style.css"/>
	<style>
	.dropbtn {
  background-color:#6495ED;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #EE82EE;
}

.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>

<body class="form-v10">

{{Session::get('email')}}
		   {{csrf_field()}}

	<div class="page-content">
	<div>
	<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">&#9776;</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="/logout">Logout</a>
    
  </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


	 <?php
						use App\tbl_Doctor;
						$sess=session()->get('email');
						$a=tbl_Doctor::where('email',$sess)->get();
						foreach($a as $object)
						{
							$id=$object->id;
							$email=$object->email;
						}
						$user=DB::table('tbl__doctors')->where('id',$id)->first();
					   $sid=$user->sid;
					   $cname=DB::table('specilizations')->select('specilization')->where('sid',$sid)->pluck('specilization');
				       
					?>
		<div class="form-v10-content">
		
			<form class="form-detail" method="post" enctype="multipart/form-data" action="/Detail" id="myform" onsubmit="return Validate(this);">
				<div class="form-left">
					<h2>General Infomation</h2>
					<!--<div class="form-row">
						<select name="title">
						    <option class="option" value="title">Title</option>
						    <option class="option" value="businessman">Businessman</option>
						    <option class="option" value="reporter">Reporter</option>
						    <option class="option" value="secretary">Secretary</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>-->
					<div class="form-group">
						<div class="form-row form-row-1">
						<input type="hidden" name="_token" value="{{csrf_token()}}" />
						<input type="hidden"  name="d_id" value="<?php echo $user->id;?>">
                     @csrf
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" value="<?php echo $user->d_name; ?>" readonly>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name"  value="<?php echo $user->surname;?>" readonly>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" value="<?php echo $user->email; ?>" readonly >
					</div>
					<!--<div class="form-row">
						<select name="position">
						    <option value="position">Position</option>
						    <option value="director">Director</option>
						    <option value="manager">Manager</option>
						    <option value="employee">Employee</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>-->
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="" id="" class="input-text" value="<?php echo $cname[0];?>"  placeholder ="Specialization" readonly>
						</div>
						<div class="form-row form-row-2">
							<input type="number" name="y_exp" id="" class="input-text" placeholder="Year of Experience" autocomplete="off" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business" value="<?php echo $user->gender;?>"  readonly>
						</div>
						<div class="form-row form-row-4">
							<input type="date" name="dob" class="company" placeholder="dob" required>

							
						</div>
					</div>
					<div class="form-row">
						<input type="file" name="photo" class="company"  placeholder="Photo" required>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="h_name" class="street" id="street"  autocomplete="off" placeholder="House Name" required>
					</div>
					<div class="form-row">
						<input type="text" name="city" class="additional" id="additional"  placeholder="City" autocomplete="off" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" class="zip" id="zip" autocomplete="off" placeholder="Zip Code" pattern="[0-9]{6}"required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="state" class="phone" id="phone"  autocomplete="off" placeholder="State" required>

							<!--<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>-->
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="country" class="phone" id="phone" placeholder="Country" required>

						<!--<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>-->
					</div>
					<div class="form-row">
							<input type="text" name="phone" class="phone" id="phone" value="<?php echo $user->phone;?>" placeholder="Phone Number" readonly>
					</div>
					
					
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Save and Continue">
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>
	<script>
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];    
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }
  
    return true;
}
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>