<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>MEDILIFE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="csrf-token" content="{{csrf_token()}}">
<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<meta name="keywords" content="Medico Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
  <link rel="icon" type="image/png" href="admin/images/a3.jpg">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header-top">
				<div class="header">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="agileits-logo">
									<h1><a href="index.html">MediLife <span>**</span></a></h1>
								</div>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
										<li class="active"><a href="/welcome">Home</a></li>
										<li><a href="#about" class="scroll">About</a></li>
										<li><a href="#gallery" class="scroll">Gallery</a></li>
										<li><a href="/Login" >Login</a></li>
										<li><a href="#events" class="scroll">Register</a></li>
										<li><a href="#mail" class="scroll">Mail Us</a></li>
									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="w3ls-text">
												<div class="w3ls-text-info">
													<h2>Healthy<span>Weekend</span><span>Check</span>Up</h2>
												</div>
											</div>
										</li>
										<li>
											<div class="w3ls-text">
												<div class="w3ls-text-info">
													<h2>Surgeons<span>You</span><span>Can</span>Trust</h2>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome" id="about">
		<div class="container">
			<div class="agileits-heading">
				<h2>About Us</h2> 
			</div>
			<div class="agileinfo-about-info">
				<p>Today, MediLife Hospitals Group has touched the lives of over 45 million patients from 121 countries. The group, which started out as a 150-bed hospital, is now recognized as a pioneer of private healthcare in India, with 64 hospitals in operation. Apollo Hospitals is known not only as a medical institution but has emerged as an integrated healthcare provider in Asia, specializing also in consultancy, clinics, pharmacy, insurance and holistic therapy..</p>
			</div>
			<div class="welcome-agileinfo">
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/4.jpg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>DRUGS</h4>
							<p>You need a Valid Prescription while Purchasing Medicines Online.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/5.jpg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>CHILD CARE</h4>
							<p>Baby Wipes for Cleanliness and Health Of Your Baby’s Skin</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Our Services</h3> 
			</div>
			<div class="specialty-grids-top">
				<div class="col-md-4 service-box" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<i class="fa fa-ambulance" aria-hidden="true"></i>
					</figure>
					<h5>Ambulance</h5>
					<p>Apollo Emergency Care is a scientifically developed protocol-driven emergency system.</p>
				</div>
				<div class="col-md-4 service-box">
					<figure class="icon">
						<i class="fa fa-wheelchair" aria-hidden="true"></i>
					</figure>
					<h5>Home Care</h5>
					<p>The transforming healthcare scenario in India has led to the advent of Homecare.</p>
				</div>
				<div class="col-md-4 service-box">
					<figure class="icon">
						<i class="fa fa-user-md" aria-hidden="true"></i>					
					</figure>
					<h5>Doctors</h5>
					<p>In a medical emergency, your best hope for recovery would be to get treated by the best of doctors.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-heading">
				<h3>Our Gallery</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Cardiology</li>
				<li class="w3layouts agileits" data-filter="2">Dermatology</li>
				<li class="w3layouts agileits" data-filter="3">Neurology</li>
				<li class="w3layouts agileits" data-filter="4">Ophthalmology
</li>
				<li class="w3layouts agileits" data-filter="5">Oncology</li>
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
					<a href="images/p2.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p2.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
					<a href="images/p3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p3.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
					<a href="images/p4.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p4.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
					<a href="images/p5.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p5.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
					<a href="images/p6.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p6.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
					<a href="images/p7.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p7.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/p8.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p8.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Medico <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- team -->
	<div class="jarallax team" id="team">
		<div class="team-dot">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>Our Team</h3>
				</div>
				<div class="agileits-team-grids">
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t1.jpg" alt="">
							<div class="team-caption"> 
								<h4>Peter Parker</h4>
								<p>Fusce laoreet</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t2.jpg" alt="">
							<div class="team-caption"> 
								<h4>Johan Botha</h4>
								<p>Fusce laoreet</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t3.jpg" alt="">
							<div class="team-caption"> 
								<h4>Justo Congue</h4>
								<p>Fusce laoreet</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src="images/t4.jpg" alt="">
							<div class="team-caption"> 
								<h4>Steven Wilson</h4>
								<p>Fusce laoreet</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- events -->
	<div class="w3-events" id="events"> 
		<div class="container">
		<!--	<div class="agileits-heading">
				<h3>Register</h3>
			</div>
			<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>10<span>Nov</span></h4>
						<h6><a href="#" data-toggle="modal" data-target="#myModal">Nulla tellus ex, dapibus quis</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
				</div>
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4>20<span>Dec</span></h4>
						<h6><a href="#" data-toggle="modal" data-target="#myModal">Mauris vehicula vel augue non</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
				</div>
				<div class="clearfix"> </div>
			</div>-->
		</div> 
	</div> 
	<!-- //events -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Medico <span>Club</span></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- newsletter -->
	<div class="newsletter jarallax">
		<div class="w3-agile-newsletter">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>REGISTER</h3>
				</div>
				<div class="newsletter-grids">
					<div class="newsletter-right">
					<div class="contact-form">
					<form action="/Registerme" method="post" name="f1" id="f1">
					<input type="hidden"  name="_token" value="{{csrf_token()}}">
						<input type="text"  placeholder="Patient Name" required="" name="p_name" id="u"   pattern="[A-Za-z]+" autocomplete="off" onchange='Validate()';>
					
 <script>

  document.getElementById("u").addEventListener("keypress", function(e) {
    if(this.selectionStart == 0) {
      // uppercase first letter
      forceKeyPressUppercase(e);
    } else {
      // lowercase other letters
      forceKeyPressLowercase(e);
    }
  }, false);

</script>
​




<script>		
function Validate() 
{
    var val = document.getElementById('u').value;

    if (!val.match(/^[A-Za-z][A-Za-z" "]/)) 
    {
        alert('Enter valid name');
		            document.getElementById('u').value = "";
        return false;
    }

    return true;
}

</script>
						<input type="email" placeholder="Email" required="" name="email" style="text-transform: lowercase;"  id="e"onchange='Validem()'; >
						<script>		
function Validem() 
{
    var val = document.getElementById('e').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Incorrect Email');
		
		     document.getElementById('e').value = "";
        return false;
    }

    return true;
}

</script>
                        <input list="gender" name="gender" placeholder="Gender" autocomplete="off" required="">
								<datalist id="gender">
								<option value="Male">
								<option value="Female">
								<option value="Others">
								</datalist>			
<input type="password" name="password" id="password" placeholder="Password" required  onchange='Validatb()' autocomplete="off">		
<script>		
function Validatb() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}$/)) 
    {
       alert('Password should contain atleast a capital letter and small letter and a Number with length atleast 6 and atmost 8');
		
		     document.getElementById('password').value = "";
        return false;
    }

    return true;
}

</script>						
						<!--<input type="password" placeholder="Password" required="" name="password">
						<input type="password" placeholder="Confirm-Password" required="" name="cpassword">-->
						<span id='message'></span>
						<input type="password" name="pword2" id="txtConfirmPassword" placeholder="Confirm-Password" required="" autocomplete="off" onchange='check()'> 

						
						<script>
	function check(){
			if(document.getElementById("txtConfirmPassword").value!=document.getElementById("password").value)
			{
				document.getElementById("message").style.color='red';
				document.getElementById("message").innerHTML='Passwords does not Match';
				
		            document.getElementById('txtConfirmPassword').value = "";
            }
		else{
			document.getElementById("message").style.color='green';
			document.getElementById("message").innerHTML='Passwords  Match';}
			}
	</script>
						
						
						<input type="date" placeholder="" name="dob" required>
						<input type="number" placeholder="Phone Number" required="" name="phone" id="c" onchange='Validat()'>
						<script>		
function Validat() 
{
    var val = document.getElementById('c').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        alert('Only Numbers are allowed and must contain 10 number and Number start with 7,8,9');
	
		
		            document.getElementById('c').value = "";
        return false;
    }

    return true;
}

</script>
						<input type="text" placeholder="House Name" required="" name="h_name"   autocomplete="off">
						<input type="text" placeholder="Street" required="" name="street"  autocomplete="off">
						
								<select id="districttt" onchange = "hi(this.value)" name="district" placeholder="District" class="list1" required>
								<option class="option" value="0">---Select---</option>
								@isset($data)
								@foreach($data as $district) 
								<option class="option" value="{{$district->district_id}}">{{$district->name}}</option>
								@endforeach
								@endisset
								</select>
								
									
						<select name = "city" id  = "city" placeholder="City" class="list1" required>
						<option class="option">---Select---</option>
						</select>
								
								<input type="text"  name="pin" placeholder="Zip-code" autocomplete="off" pattern="[0-9]{6}" required="">
													
						<!--<input type="text" placeholder="District" required="" name="district">
						<input type="text" placeholder="State" required="" name="state">
						<input type="text" placeholder="Country" required="" name="country">-->
						<input type="submit" value="Register">
					</form>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="agileits-heading">
				<h3>Contact</h3>
			</div>
			<div class="w3layouts-contact-grids">
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-map" aria-hidden="true"></i>
					<h5>Address</h5>
					<p>123 Fourth Avenue, Seattle Wa 98104, Los Angeles</p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<h5>Phone/Fax</h5>
					<p>+123 456 7890</p>
					<p>+134 567 8901</p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<h5>Email</h5>
					<p><a href="mailto:info@example.com"> mail@example.com</a></p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-share-alt" aria-hidden="true"></i>
					<h5>Social</h5>
					<p>Touch With Us</p>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- contact-info -->
	<div class="contact-info jarallax">
		<div class="contact-info-grids">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>Send a Message</h3>
				</div>
				<div class="contact-form">
					<form action="#" method="post">
						<input type="text" placeholder="Name" required="">
						<input type="email" placeholder="Email" required=""><br>
						<input type="text" placeholder="Telephone" required="">
						
						<input type="submit" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact-info -->
	<!-- footer -->
	
	<!-- //footer -->
	<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="js/ajaxx.js"></script>
	<!-- here stars scrolling icon -->
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
		<script>
		
		function hi(id){
		var distID = id;
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type:'POST',
			url: '/show_city',
			data: { did : distID },
			success: function(data){
				
				$('#city').empty();
				for(var i = 0;i < data.length; i++){
				$('#city').append('<option value ="' + data[i].city_id +'">'+ data[i].city_name+'</option>');
				}
			}
		});
		}
		

		
		</script>
		
	<script>

  document.getElementById("u").addEventListener("keypress", function(e) {
    if(this.selectionStart == 0) {
      // uppercase first letter
      forceKeyPressUppercase(e);
    } else {
      // lowercase other letters
      forceKeyPressLowercase(e);
    }
  }, false);

</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>