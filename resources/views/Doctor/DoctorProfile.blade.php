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
  <style>
  .loginBox
  {
	  position:absolute;
	  top:70%;
	  left:50%;
	  transform:translate(-50%,-50%);
	  width:450px;
	  height:500px;
	  padding:20px 0px;
	  box-sizing:border-box;
	  background:rgb(118, 68, 138);
	  border-radius:50%;
  }
  .user
  {
	  width:150px;
	  height:150px;
	  border-radius:50%;
	  overflow:hidden;
	 right:150%;
	 top:calc(-50px/2);
  }
  .h2
  {
	  margin:150px;
	  padding: 4 4 20px;
	  color: #ffff1a;
	  
  }
  .loginBox p
  {
	  margin:1%;
	  padding:0;
	  font-weight:bold;
	  font-size:15px;
	  color:red;
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
                  <img alt="image" src="../../doctor/dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../../doctor/dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../../doctor/dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../../doctor/dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../../doctor/dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
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
            <div class="d-sm-none d-lg-inline-block"><div class="d-sm-none d-lg-inline-block"><span class="username">{{Session::get('email')}}
		   {{csrf_field()}}</span></div></div></a>
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
             
          </div>
        </aside>
      </div>
      <div class="main-content">
	  <section class="section">
          <h1 class="section-header">
            <div>Profile</div>
          </h1>
		  </section>

	
        <div class="loginBox">
					
				
					 <table align="center">
                     <tr><center><img src="../../storage/upload/{{$user->photo}}" class="user" align="middle"></center></tr>					 			        
                     <tr><td><h2>{{ $user->d_name}}&nbsp{{ $user->surname}}</h2></td></tr>
					 <tr><td><center><p>{{  $user->quali}}</p></center></td></tr>
					 <tr><td><center><p>{{ $user->email}}</p></center></td></tr>
					 <tr> <td><center><p>{{  $user->gender}}</p></center></td></tr>
					 <tr><td><center><p><?php echo $cname[0];?></p></center></td></tr>
					 <tr><td><center><p>{{  $user->h_name}}</p></center></td></tr>
					 <tr><td><center><p>{{  $user->city}}</p></center></td></tr>			
					 <tr><td><center><p>{{  $user->phone}}</p></center></td></tr>
			         <tr><td><center><p><a href="{{route('profile_edit',['id'=>$id])}}" class="btn btn-action btn-secondary">&nbsp&nbspEdit&nbsp&nbsp</a></td></tr>
			         </table>
			
			         <!--<td><a href = 'delete/{{ $user->id }}' class='fa fa-times text-danger text'></a></td>-->
        </div>
		
   
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
</body>
</html>