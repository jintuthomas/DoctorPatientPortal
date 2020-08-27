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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="patient/cart/css/style.css">
	<link rel="stylesheet" href="patient/cart/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="patient/cart/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="patient/cart/css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="patient/cart/css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="patient/cart/css/bootstrap.min.css">
	<style>
	.full-width{
    float:right;width:100%;margin-top:30px;min-height:100px;position:relative;
}
.form-style-fake{position:absolute;top:0px;}
.form-style-base{position:absolute;top:0px;z-index: 999;opacity: 0;}
.fake-styled-btn{
    background: #006cad;
    padding: 10px;
    color: #fff;
}
.truncate {
    width: 250px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.custom-btn{
    margin-top: 15px;
    border-radius: 0px;
    padding: 10px 60px;
    margin-bottom: 15px;
}
div.b {
  position: absolute;
  right: 0;
  width: 400px;
  height: 500px;
} 

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
            <ul>			
			<?php
			$c = DB::table('tblcarts')->where('id',$id)->where('status', '=' ,1)->sum('quantity');
			//$c=count($prd);
			?>
			<center><li class="cart"><a href="/viewCart"><i class="fas fa-shopping-cart"></i> Cart [{{$c}}]</a></li></center>
			</ul>			
        </ol>		
    </nav>
    <!-- //breadcrumbs -->
    <!-- //banner -->
    <!-- blog -->
        
            
    
	
    <section class="banner-bottom py-lg-5 py-md-5 py-3">
			<div class="container" style="height:auto;">					
				<div class="row row-pb-lg">
					<div class="col-md-12" style="height:auto;">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
							
						</div>
						
						<?php 
						//$mid=$scartz->mid;
						//$prd=DB::table('tbl_pharmacies')->where('mid',"=",$mid)->get();
						$prd=DB::table('tblcarts')->where('id',$id)->where('status', '=', 1)->get();
						foreach($prd as $pro)
						{
							$cart_id=$pro->cart_id;
							$mid=$pro->mid;
							$quantity=$pro->quantity;
							$price=$pro->price;
							
							$cname=DB::table('tbl_pharmacies')->where('mid',$mid)->first();
							//$cname=DB::table('tbl_pharmacies')->select('m_name')->where('mid',$mid)->pluck('m_name');
							$img=DB::table('tbl_images')->where('mid',$mid)->first();
						
						?>
						<div class="product-cart d-flex">
						
							<div class="one-forth">
							
								<div class="product-img" style="background-image: url(../../../public/upload/<?php echo $img->image;?>);">
								</div>
								<div class="display-tc">
									<h3><?php echo $cname->m_name;?></h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price"><?php echo $cname->price;?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="number" id="quantity" name="quantity" class="form-control input-number text-center" value="{{$quantity}}" min="1" max="100">
									
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{$price}}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href='delete2/{{ $cart_id }}' class='closed'></a>
								</div>
							</div>
							
						</div>
						<?php
						}
						?>
				
						
					</div>
					
				
				</div>
				</div>
				
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											
											
										</div>
									</form>
								</div>
								
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
										    <?php
											$s = DB::table('tblcarts')->where('id',$id)->where('status', '=' ,1)->sum('price');
											?>
											<p><span>Subtotal:</span> <span>${{$s}}.00</span></p>
											<p><span>Delivery:</span> <span>$50.00</span></p>
											<!--<p><span>Discount:</span> <span>$0.0</span></p>-->
										</div>
										<div class="grand-total">
										        <?php $t=50+$s; ?>
											<p><span><strong>Total:</strong></span> <span>${{$t}}</span></p>
										</div>
									</div>
								</div>
								<div class="col-sm-3 text-left">
								<table><tr>
								<th><a href="/ProductView"><button type="button" class="btn btn-secondary btn-lg btn-block"><b><&nbsp;Continue Purchace</b></button></a></th>
								<th><a href="/CheckOut?id={{$t}}"><button type="button" class="btn btn-primary btn-lg btn-block">&nbsp;&nbsp;&nbsp;&nbsp;<b>Place Order</b>&nbsp;&nbsp;&nbsp;&nbsp;</button></th>
								</tr>
								</table>
								</div>
							</div>
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
        <p>© 2018 Poly Clinic. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
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
    <script src="patient/js/bootstrap.js"></script>
	<script>

    $('input[id=main-input]').change(function() {
        console.log($(this).val());
        var mainValue = $(this).val();
        if(mainValue == ""){
            document.getElementById("fake-btn").innerHTML = "Choose File";
        }else{
            document.getElementById("fake-btn").innerHTML = mainValue.replace("C:\\fakepath\\", "");
        }
    });
   
    </script>
</body>

</html>