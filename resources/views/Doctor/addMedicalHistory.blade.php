<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>MEDILIFE</title>

  <link rel="stylesheet" href="../../doctor/dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../doctor/dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../doctor/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../../doctor/dist/css/demo.css">
  <link rel="stylesheet" href="../../doctor/dist/css/style.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <style>
  @import url('https://fonts.googleapis.com/css?family=Open+Sans');
 html {

  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
     overflow-x:hidden;
     font-family: 'Open Sans', sans-serif;
     position:relative;
}
.custom-upload { margin-top:20px;}
section {
    padding: 60px 0;
    overflow-y: auto !important;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
.btn {margin-right:10px;}
a {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  font-family: 'Open Sans', sans-serif;
  color: #000;
}
a:hover {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  color: #000;
  text-decoration: none;
}

h1,h2,h3,h4,h5{
       font-family: 'Open Sans', sans-serif;
}
p, ul,li{
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    line-height: 25px;
}
.form-inline .form-control.custom-file-upload {
  border: 1px solid #ccc;
  
  padding: 6px 12px;
  cursor: pointer;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 100%;
}

.wrap-input-container {
  display: inline-block;
  position: relative;
  overflow: hidden;
}
.wrap-input-container input {
position: absolute;
font-size: 400px;
opacity: 0;
z-index: 1;
top: 0;
left: 0;
}

  </style>
</head>

<body>

  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="ion ion-search"></i></button>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">View All</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="doctor/dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="doctor/dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="doctor/dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="doctor/dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="doctor/dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block"><span class="username">{{Session::get('email')}}
		   {{csrf_field()}}</span></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="ion ion-android-person"></i> Profile
              </a>
              <a href="/logout" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <?php
						use App\tbl_Doctor;
						$sess=session()->get('email');
						$a=tbl_Doctor::where('email',$sess)->get();
						foreach($a as $object)
						{
							$id=$object->id;
							$email=$object->email;
							$sid=$object->sid;
						}
						$user=DB::table('tbl__doctors')->where('id',$id)->first();						
					   $cname=DB::table('specilizations')->select('specilization')->where('sid',$sid)->pluck('specilization');
					?>
					
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">MEDILIFE</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img src="../../storage/upload/{{$user->photo}}" width="50px" height="50px">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Dr.{{ $user->d_name}}&nbsp{{ $user->surname}}</div>
              <div class="user-role">
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            
            <li class="active">
              <a href="/DoctorHome"><i class="ion ion-speedometer"></i><span>Home</span></a>
            </li>

            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Leave</span></a>
              <ul class="menu-dropdown">
                <li><a href="/ApplyLeave"><i class="ion ion-ios-circle-outline"></i> Apply Leave</a></li>
                <li><a href="/LeaveCancel"><i class="ion ion-ios-circle-outline"></i> Cancel Leave</a></li>
                <li><a href="/LeaveStatus"><i class="ion ion-ios-circle-outline"></i> Leave Status</a></li>
               <!-- <li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>-->
              </ul>
            </li>
           <!-- <li>
              <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Appoinments</span></a>
              <ul class="menu-dropdown">
                <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
                <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
              </ul>
            </li>-->
			<li>
              <a href="/viewAppointment"><i class="ion ion-flag"></i><span>Appoinments</span></a>
            </li>
            <li>
              <a href="DoctorProfile"><i class="ion ion-clipboard"></i><span>Profile</span></a>
            </li>
            
            <li>
              <a href="viewMedicalHistory"><i class="ion ion-ios-location-outline"></i><span>Patient History</span></a>
            </li>
			<li>
              <a href="addMedicalHistory"><i class="ion ion-ios-location-outline"></i><span>Medical History</span></a>
            </li>
           <!-- <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
              <ul class="menu-dropdown">
                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
              </ul>
            </li>-->

            
             
         
        </aside>
      </div>
      <div class="main-content">
	  <section class="section">
          <h1 class="section-header">
            <div>Doctor History</div>
          </h1>
		  </section>

	
        <div class="container">
	
      

<form action="/medicalhistory" method="post">

<label for="add_features"><b>Add more History ...Add Here..</b></label>
                               <br>
                                <div class="table-responsive">  
                                  <table class="table table-bordered" id="dynamic_field">  
                                     <tr>  
									 <input type="hidden" name="_token" value="{{csrf_token()}}" />
									 <input type="hidden" name="d_id" value="<?php echo $id ;?>" />
                                       <td><input type="text" name="name[]" placeholder="Add new feature" class="form-control name_list" /></td>  
                                        <td><button type="button" name="add" id="add" style="background-color:#fc0c4c;" class="btn btn-success">Add More</button></td>  
                                            </tr>  
                                        </table>  
                                      <input type="submit" class="btn btn-info" value="Submit" /> 
                                           </div>
										   </form>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Add new features" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="background-color:red;">X</button></td></tr>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>

	  
            
			 

 </div>
  </div>

  <script src="../../doctor/dist/modules/jquery.min.js"></script>
  <script src="../../doctor/dist/modules/popper.js"></script>
  <script src="../../doctor/dist/modules/tooltip.js"></script>
  <script src="../../doctor/dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../doctor/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../../doctor/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="../../doctor/dist/js/sa-functions.js"></script>
  
  <script src="../../doctor/dist/js/scripts.js"></script>
  <script src="../../doctor/dist/js/custom.js"></script>
  <script src="../../doctor/dist/js/demo.js"></script>
  <script>
$(function() {
    // Remove button click
    $(document).on(
        'click',
        '[data-role="appendRow"] > .form-inline [data-role="remove"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-row').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="appendRow"] > .form-row [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="appendRow"]');
            new_field_group = container.children().filter('.form-row:first-child').clone();
          new_field_group.find('label').html('Upload Document'); new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});


// file upload

$(document).on('change', '.file-upload', function(){
  var i = $(this).prev('label').clone();
  var file = this.files[0].name;
  $(this).prev('label').text(file);
});


</script>
</body>
</html>