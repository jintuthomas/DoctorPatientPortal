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
    <!-- Custom Theme files -->
    <link href="patient/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="patient/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="patient/css/blog.css" rel='stylesheet' type='text/css' />
    <!-- font-awesome icons -->
    <link href="patient/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

	<style>
	
	*{transition: all .5s ease;-moz-transition: all .5s ease;-webkit-transition: all .5s ease}
.my-list {
    width: 100%;
	height:350px;
    padding: 10px;
    border: 1px solid #f5efef;
    float: left;
    margin: 15px 0;
    border-radius: 5px;
    box-shadow: 2px 3px 0px #e4d8d8;
    position:relative;
    overflow:hidden;
}
.my-list h3{
    text-align: left;
    font-size: 14px;
    font-weight: 500;
    line-height: 21px;
    margin: 0px;
    padding: 0px;
    border-bottom: 1px solid #ccc4c4;
    margin-bottom: 5px;
    padding-bottom: 5px;
    }
	.my-list span{float:left;font-weight: bold;}
	.my-list span:last-child{float:right;}
	.my-list .offer{
    width: 100%;
    float: left;
    margin: 5px 0;
    border-top: 1px solid #ccc4c4;
    margin-top: 5px;
    padding-top: 5px;
    color: #afadad;
    }
	.detail {
    position: absolute;
    top: -100%;
    left: 0;
    text-align: center;
    background: #fff;height: 100%;width:100%;
	
}
	
.my-list:hover .detail{top:0;}
	</style>
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
		<?php
						use App\Register;
						$sess=session()->get('email');
						$a=Register::where('email',$sess)->get();
						foreach($a as $object)
						{
							$id=$object->id;
							$email=$object->email;
							
						}
						//$user=DB::table('registers')->where('id',$id)->first();						
					  
					?>
        <!-- //header -->
        <!-- //container -->
    </div>
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Product View</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- //banner -->
    <!-- blog -->
    <section class="banner-bottom py-lg-5 py-md-5 py-3">
	<div class="container">
	<div class="row">
        
      <?php
                use App\tbl_pharmacy;
				use App\tbl_image;
                $sql = DB::select('SELECT * FROM tbl_pharmacies'); 
				
                foreach($sql as $a)
				{
					$mid=$a->mid;
					$price=$a->price;
					$m_name=$a->m_name;
					$b_id=$a->b_id;
					$img=DB::table('tbl_images')->where('mid',$mid)->first();
					$cname=DB::table('tbl_brands')->select('b_name')->where('b_id',$b_id)->pluck('b_name');
					
				?>   
	
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="my-list">
			<img src="../../../public/upload/<?php echo $img->image;?>" alt="dsadas" style="max-width:100%;height:225px;" />
			<h3><img src="../../patient/images/rupee.png" width="10px" height="10px"><?php echo $price;?></h3>
			<span>&nbsp;</span>
			<span class="pull-right"><?php echo $m_name;?></span>
			<div class="offer">Brand:&nbsp;<?php echo $cname[0];?></div>
			<div class="detail">
			<p><?php echo $m_name;?></p>
			<img src="../../../public/upload/<?php echo $img->image;?>" alt="dsadas" style="max-width:100%;height:225px;" />
			
			<a href="{{route('imgview', ['mid' => $mid])}}" class="btn btn-info">View Details</a>
			</div>
		</div>	
		
		
		
		</div>
<?php
		}
		?>		
	</div>		
    </div>
				   
				   
				   
				   
				   
				   

                </div>
            </div>
        </div>
		
    </section>
    <!-- //blog-->
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
    <!-- js -->
    <script src="patient/js/jquery-2.2.3.min.js"></script>
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
    <!-- start-smooth-scrolling -->
    <script src="patient/js/easing.js"></script>
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
    <script src="patient/js/SmoothScroll.min.js"></script>
    <!-- //end-smooth-scrolling -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>