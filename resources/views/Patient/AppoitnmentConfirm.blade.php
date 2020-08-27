<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>MEDILIFE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Photo Stills Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="patient/appoinment/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="patient/appoinment/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="patient/appoinment/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<div class="content">
	<div class="container">
	
	<section class="banner_w3lspvt" id="home">
		<div class="csslider infinity" id="slider1">
			
<form action="/ConfirmAppointment" method="post">
			<ul class="banner_slide_bg">
				
				<li>
					<div class="slider-info">
						<div class="bs-slider-overlay1">
							<h4 class="heading text-center mb-md-5 mb-4"><b>Confirm Appointment</b></h4>
							<div class="row">
							
								<div class="col-lg-6 contact-left">
									<h5 class="text-uppercase mb-3">Appointment Details</h5>
									<div class="contact">
										
										<input type="hidden" name="_token" value="{{csrf_token()}}" />
											<div class="row main-w3layouts-sectns">
											
											<div class="col-md-6 w3-btm-spc form-text1 pr-1">
											<p><span class="fa fa-calendar"></span>&nbsp; <b>On</b> &nbsp;{{$adate}}</p>
											<input type="hidden" value="{{$adate}}" name="adate">
											</div>
											<div class="col-md-6 w3-btm-spc form-text2 pl-1">
											<p><span class="fa fa-clock-o "></span>&nbsp; <b>At</b> &nbsp;{{$atime}}</p>
											<input type="hidden" value="{{$atime}}" name="atime">
											</div>
											
											<?php
                use App\tbl_Doctor;
				
				
				$sql =tbl_Doctor::where('id',$d_id)->get();
                foreach($sql as $a)
				{ 
				    $d_id=$a->id;
					$d_name=$a->d_name;
					$surname=$a->surname;
					//$description=$a->description;
					$email=$a->email;
					$phone=$a->phone;
					$quali=$a->quali;
					$y_exp=$a->y_exp;
					$emp_history=$a->emp_history;
					$fee=$a->fee;
					$photo=$a->photo;
					$sid=$a->sid;
					$state=$a->state;
					$country=$a->country;
				
					$cname=DB::table('specilizations')->select('specilization')->where('sid',$sid)->pluck('specilization');
				}
				?>   
											   <br><br>
												<?php
												use App\Register;			
												$sql =Register::where('id',$p_id)->get();
												foreach($sql as $a)
												{ 
													$p_id=$a->id;
													$p_name=$a->p_name;
													$email=$a->email;
													$phone=$a->phone;
																			
												}
												?>	
												
												<table>
												<tr><td><br></td></tr>
												
												<tr>
												
													<th><h5><small><label>Patient Name:</label></th>&nbsp;&nbsp;&nbsp;<td>{{$p_name}}</small></h5>
													<input type="hidden" value="{{$p_id}}" name="p_id">
													</td>
												</tr>
												
												<tr>
												<th><h5><small><label>E-mail:</label></th>&nbsp;&nbsp;&nbsp;<td>{{$email}}</small></h5>
												</td></tr>
												
													
												<tr>
												
												<th><h5><small><label>Phone:</label></th>&nbsp;&nbsp;&nbsp;<td>{{$phone}}</small></h5>
												</td></tr>
													
												</table>
				<input type="hidden" value="{{$fee}}" name="fee">
												<!--<div class="col-md-6 w3-btm-spc form-text1 pr-1">
												
												<input type="text" name="Name" placeholder="Your Name" value="{{$adate}}" required="">
												</div>
												<div class="col-md-6 w3-btm-spc form-text2 pl-1">
													<input type="text" name="Phone no" placeholder="Your Phone Number" required="">
												</div>
												<div class="col-md-6 w3-btm-spc form-text1 pr-1">
													<input type="email" name="email" placeholder="Your email id" required="">
												</div>
												<div class="col-md-6 w3-btm-spc form-text2 pl-1">
													<input type="text" name="subject" placeholder="Subject" required="">
												</div>
												<div class="col-md-12 w3-btm-spc form-text2">
													<textarea placeholder="Enter Your Message Here"></textarea>
												</div>-->
											</div>
											<br>
											<div class="text-left">
												<button class="btn"> Book Appointment</button>
											</div>
										
									</div>
								</div>
								<div class="col-md-6 w3-btm-spc form-text1 pr-1">
				<table>
				<tr><th></h3></th></tr>
				<tr><td></td></tr>
				
													
				</div>
								<div class="col-lg-6 mt-lg-0 mt-4">
									<div class="contact-right">
										<div class="address">
											
											
											<center><img src="../../../storage/upload/{{$photo}}" width="150px" height="150px"/></center>
											
										</div>
										<div class="address address-mdl my-4">
											<h3>Dr.<?php echo $d_name;?>&nbsp<?php echo $surname;?></h3>
											<input type="hidden" value="{{$d_id}}" name="d_id">
											<p><span class="fa fa-stethoscope"></span>&nbsp;{{$cname[0]}}</p>
											<p><span class="fa fa-graduation-cap"></span>&nbsp;{{$quali}}</p>
											<p><span class="fa fa-suitcase"></span>&nbsp;{{$y_exp}}</p>
											<p><span class="fa fa-inr"></span>&nbsp{{$fee}}</p>
										</div>
										<div class="address">
											<h5>Email:</h5>
											<p><span class="fa fa-envelope-open"></span> <a href="mailto:mail@example.com">{{$email}}</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
			</form>
		</div>
	</section>
	<!-- //banner -->
	<!-- footer -->
	<section class="foooter-section pt-3 pb-5 position-relative">
		<div class="d-md-flex justify-content-between footer-inner">
			<!-- social icons-->
			
			<!-- //social icons-->
			<!-- copyright -->
			
			<!-- copyright -->
		</div>
	</section>
	<!-- //footer -->
	</div>
</div>	

</body>
</html>