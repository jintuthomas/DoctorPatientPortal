
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title> MEDILIFE </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
  <link rel="icon" type="image/png" href="admin/images/a3.jpg">

	<!-- Custom Theme files -->
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->
<style>
#txt {
    text-transform:lowercase;
}
</style>
</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1> Login </h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="/Loginme"  method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="hidden"  name="_token" value="{{csrf_token()}}">
						<input type="email" placeholder="Email Address" required="" id="txt" onkeyup="return forceLower(this);" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/ >
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" required="" name="password" />
					</div>
					
					<div class="bottom">
						<button class="btn">Log In</button>
					</div>
					<div class="links">
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                       @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    </a>						<p class="right"><a href="welcome">New User? Register</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			
		</div>
		
		<!-- copyright -->
		
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->
<script>
function forceLower(strInput) 
{
strInput.value=strInput.value.toLowerCase();
}
</script>

</body>
</html>