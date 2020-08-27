<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>MEDILIFE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Poly Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="../../patient/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../../patient/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="../../patient/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- banner -->
    <div class="inner-banner" id="home">
        <!-- header -->
         <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">

                <h1>
                    <a class="navbar-brand text-white" href="/PatientHome">
                        MEDILIFE
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item  mr-3 active">
                            <a class="nav-link text-white active" href="/PatientHome">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
						<li class="nav-item dropdown mr-3">
                            <a class="nav-link dropdown-toggle  text-white text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                               Medicine
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/SearchProduct">Medicine Request</a>
                                <a class="dropdown-item" href="/RequestStatus">Request Status</a>                            
                        </li>
                        
                        <li class="nav-item  mr-3 ">
                            <a class="nav-link text-white text-capitalize" href="/ListDoctor">Search Doctor</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link  text-white text-capitalize" href="/ProductView">Product View</a>
                        </li>
						<li class="nav-item dropdown mr-3">
                            <a class="nav-link dropdown-toggle  text-white text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Settings
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/logout">Logout</a>
                                <a class="dropdown-item" href="/profileView">Profile</a>                             
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <!-- //container -->
    </div>
	<?php
						use App\Register;
						$sess=session()->get('email');
						$a=Register::where('email',$sess)->get();
						foreach($a as $object)
						{
							$id=$object->id;
							$email=$object->email;
							$p_name=$object->p_name;
							
						}
						//$user=DB::table('registers')->where('id',$id)->first();						
					  
					?>
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Search / Profile</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- //banner -->
    <!-- team -->
	<?php
                use App\tbl_Doctor;
				$sess=session()->get('id');
				
				$sql =tbl_Doctor::where('id',$sess)->get();
                
				
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
    <section class="team-agile py-lg-5">
        <div class="container py-sm-5 pt-5 pb-0">
            
            <div class="row mt-5 pb-lg-5">
                <div class="col-md-4 border p-0 my-auto">
                    <img src="../../storage/upload/<?php echo $photo;?>" class="img-fluid" alt="team-img" />
                </div>
                <div class="col-md-8 team-text mt-md-0 mt-5">
				
                    <h4>Dr.&nbsp;<?php echo $d_name;?>&nbsp;<?php echo $surname;?></h4>
                    <small><?php echo $cname[0];?></small>
                    <p class="my-3">Donec consequat sapien ut leo cursus rhoncus.Quisque velit nisi, pretium ut lacinia in, elementum id
                        enim. Cras ultricies ligula Nullam dui mi, vulputate ac metus at, semper varius orci. Nulla accumsan
                        ac elit in congue.</p>
                    <ul class="list-group mb-3">
                        <li class="list-group-item border-0">
                            <i class="far fa-check-square  mr-3"></i>Poly Clinic, Newyork</li>
                        <li class="list-group-item border-0 py-0">
                            <i class="far fa-check-square  mr-3"></i>
                            Experience : 8+ years</li>
                        <li class="list-group-item border-0">
                            <i class="far fa-check-square  mr-3"></i>
                            State : <?php echo $state;?></li>
                        <li class="list-group-item border-0 py-0">
                            <i class="far fa-check-square  mr-3"></i><?php echo $country;?></li>
                        <li class="list-group-item border-0">
                            <i class="far fa-clock  mr-3"></i>
                            <span class="ot">MON - SAT : 7:00 AM - 1:00 PM , 2:00 PM - 4:00 PM </span>
                        </li>
                    </ul>
					
                    <a href="#" class="btn_apt" data-toggle="modal" data-target="#exampleModalLabel2">Make an appointment </a>
                </div>
            </div>
            
        </div>
    </section>
				
    <!-- //team -->
    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="footer-position">
            <div class="container">
                <div class="row newsletter-inner">
                    <div class="col-md-4 py-3">
                        <h3 class="w3ls-title text-white">
                            Get notified</h3>
                        <p class="text-white">sociosqu ad litora torquent per conubia.</p>
                    </div>
                    <div class="col-md-8 newsright">
                        <form action="#" method="post" class="d-flex">
                            <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                            <input class="form-control" type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="up-arrow"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-lg-5 mt-sm-5">
            <div class="row p-sm-4 px-3 py-5">
                <div class="col-lg-4 col-md-6 footer-top mt-lg-0 mt-md-5">
                    <h2>
                        <a href="index.html" class="text-theme text-uppercase">
                            poly clinic
                        </a>
                    </h2>
                    <p class="mt-2">Donec consequat sam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                        id quod possimusapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius
                        orci.
                    </p>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-5">
                    <div class=".footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Navigation</h3>
                        <hr>
                        <ul class="list-agileits">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.html">
                                    About Us
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="gallery.html">
                                    Gallery
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="services.html">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Contact Us</h3>
                        <hr>
                        <div class="fv3-contact">
                            <span class="fas fa-envelope-open mr-2"></span>
                            <p>
                                <a href="mailto:example@email.com">info@example.com</a>
                            </p>
                        </div>
                        <div class="fv3-contact my-2">
                            <span class="fas fa-phone-volume mr-2"></span>
                            <p>+456 123 7890</p>
                        </div>
                        <div class="fv3-contact">
                            <span class="fas fa-home mr-2"></span>
                            <p>+90 nsequursu dsdesdc,
                                <br>xxx Street State 34789.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-agileits">
                            <li>
                                <a href="index.html">
                                    Overview
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="services.html">
                                    Centres of Excellence
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="single.html">
                                    Blog
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.html">
                                    Find us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- quick contact -->
    <div class="container">
        <div class="outer-col">
            <div class="heading">Quick Enquiry</div>
            <div class="form-col">
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Name" name="Name" id="user-name" required="">
                    <input type="email" class="form-control" placeholder="Email" name="Name" id="Email-id" required="">
                    <input type="text" class="form-control" placeholder="phone number" name="Name" id="phone-number" required="">
                    <textarea placeholder="your message" class="form-control"></textarea>
                    <input type="submit" value="send" class="btn_apt">
                </form>
            </div>
        </div>
    </div>
    <!-- //quick contact -->
    <!-- copyright -->
    <div class="cpy-right text-center">
        
    </div>
    <!-- //copyright -->
    <!-- //Appointment modal -->
    <div class="modal fade" id="exampleModalLabel2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Fill details below to make an appointment</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wthree-info">

                        <div class="login">
                            <form action="/Appoinment" method="post">
							    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">username</label>
									<input type="hidden" name="_token" value="{{csrf_token()}}" />
                                    <input type="text" class="form-control" value=<?php echo $email;?> name="email" readonly required="">
									<input type="hidden" name="p_id" value="<?php echo $id;?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="recipient-phone" class="col-form-label">Doctor name</label>
                                    <input type="text" class="form-control"value=<?php echo $d_name;?> name="d_name" id="recipient-phone" required="">
									<input type="hidden" name="d_id" value="<?php echo $d_id;?>" />
                                </div>
							
                                <div class="form-group">
                                    <label for="datepicker" class="col-form-label">Choose Date of Appointment</label>
                                    <input placeholder="Date" class="date form-control" name="date"  id="datepicker" autocomplete="off" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
                                        required="" />
                                </div>
                                <div class="form-group">
								<?php
								$special=DB::table('tbl_time')->where(['status'=>1])->get();
								?>
                                <select required="" name="time" class="form-control">
                                <option value="">Select Time</option>                                  
							    <?php
							    foreach ($special as $spec)
							    {
							    ?>
								<option value="{{$spec->time}}">{{$spec->time}}</option>
							   <?php
							   }
							   ?>
                               </select>
                               </div>
                               
                                
                                <input type="submit" value="Request Appointment" class="btn_apt">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Appointment modal -->
    <!-- js -->
    <script src="../../patient/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- //fixed quick contact -->
    <script>
        $(function () {
            var hidden = true;
            $(".heading").click(function () {
                if (hidden) {
                    $(this).parent('.outer-col').animate({
                        bottom: "0"
                    }, 1200);
                } else {
                    $(this).parent('.outer-col').animate({
                        bottom: "-305px"
                    }, 1200);
                }
                hidden = !hidden;
            });
        });
    </script>
    <!-- //fixed quick contact -->
    <!--start-date-piker-->
    <link rel="stylesheet" href="../../patient/css/jquery-ui.css" />
    <script src="../../patient/js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!-- //End-date-piker -->
    <!-- start-smooth-scrolling -->
    <script src="../../patient/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <script src="../../patient/js/SmoothScroll.min.js"></script>
    <!-- //end-smooth-scrolling -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../patient/js/bootstrap.js"></script>
</body>

</html>