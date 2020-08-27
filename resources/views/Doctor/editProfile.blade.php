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
            
             
          </div>
        </aside>
      </div>
      <div class="main-content">
	  <section class="section">
          <h1 class="section-header">
            <div>&nbsp</div>
          </h1>
		  </section>
	  
        <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
             Profile
            </div>
                      
			
            <div class="card card-primary">
              <div class="card-header"></div>

              <div class="card-body">
                <form method="POST" action="/profileUpdate">
				<div class="form-divider">
                  Personal
				   </div>
                  <div class="row">
                    <div class="form-group col-6">
					
                      <label for="frist_name">First Name</label>
					  <input type="hidden" name="_token" value="{{csrf_token()}}" />
					  <input type="hidden"  name="d_id" value="<?php echo $user->id;?>">
                     @csrf
                      <input id="frist_name" type="text" class="form-control" name="frist_name" value="<?php echo $user->d_name; ?>" readonly>
                    </div>
				
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="surname" value="<?php echo $user->surname;?>">
                    </div>
                  </div>
                  <div class="row">
                  
				    <div class="form-group col-6">
                     <label for="password" class="d-block">E-mail</label>
                    <input id="email" type="text" class="form-control" name="email" value="<?php echo $user->email; ?>" readonly>
                    </div>
					<div class="form-group col-6">
					 <label for="password" class="d-block">Phone</label>                  
                    <input id="email" type="text" class="form-control" name="phone" value="<?php echo $user->phone;?>">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Gender</label>
                      <input id="gender" type="text" class="form-control" name="gender" value="<?php echo $user->gender;?>" readonly>
                    </div>
					<div class="form-group col-6">
                      <label for="password" class="d-block">Date of Birth</label>
                      <input id="gender" type="text" class="form-control" name="gender" value="<?php echo $user->dob;?>" readonly>
                    </div>
                    </div>
				  <div class="form-divider">
                   Profession
				   </div>
				   <div class="row">
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Specilalization</label>
                      <input id="password2" type="text" class="form-control" name="specilalization" value="<?php echo $cname[0];?>" readonly>
                    </div>
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Qualification</label>
                      <input id="gender" type="text" class="form-control" name="quali" value="<?php echo $user->quali;?>">
                    </div>
					</div>
					<div class="row">
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Year of Experience</label>
                      <input id="password2" type="text" class="form-control" name="y_exp" value="<?php echo $user->y_exp;?>">
                    </div>
                  
				    <div class="form-group col-6">
                      <label for="password2" class="d-block">Employ History</label>
                      <input id="password2" type="text" class="form-control" name="emp_history" value="<?php echo $user->emp_history;?>">
                    </div>
                  </div>

                  <div class="form-divider">
                   Address
                  </div>
				   <div class="row">
                    <div class="form-group col-6">
                      <label>Housename</label>
                      <input type="text" class="form-control" name="h_name" value="<?php echo $user->h_name;?>">
                    </div>
                   <!-- <div class="form-group col-6">
                      <label>Street</label>
                      <input type="text" class="form-control" name="street" value="">
                    </div>-->
                  </div>
                  <div class="row">				  
                    <div class="form-group col-6">
                      <label>City</label>
                      <input type="text" class="form-control"name="city" value="<?php echo $user->city;?>">
                    </div>
                    <div class="form-group col-6">
                      <label>State</label>
                      <input type="text" class="form-control"name="state" value="<?php echo $user->state;?>">
                    </div>
					</div>
					<div class="row">				  
                    <div class="form-group col-6">
                      <label>Country</label>
                      <input type="text" class="form-control" name="country" value="<?php echo $user->country;?>">
                    </div>
                    <div class="form-group col-6">
                      <label>Zip-Code</label>
                      <input type="text" class="form-control"  name="zip"value="<?php echo $user->zip;?>">
                    </div>
                 </div>
                   <!-- <div class="form-group col-6">
                      <label>Country</label>
                      <select class="form-control">
                        <option>Indonesia</option>
                        <option>Palestine</option>
                        <option>Syria</option>
                        <option>Malaysia</option>
                        <option>Thailand</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Province</label>
                      <select class="form-control">
                        <option>West Java</option>
                        <option>East Java</option>
                      </select>
                    </div>-->
                  

                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                      Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
      </div>
      <footer class="main-footer">
        
        <div class="footer-right"></div>
      </footer>
    </div>
  </div>

  <script src="doctor/dist/modules/jquery.min.js"></script>
  <script src="doctor/dist/modules/popper.js"></script>
  <script src="doctor/dist/modules/tooltip.js"></script>
  <script src="doctor/dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="doctor/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="doctor/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="doctor/dist/js/sa-functions.js"></script>
  
  <script src="doctor/dist/js/scripts.js"></script>
  <script src="doctor/dist/js/custom.js"></script>
  <script src="doctor/dist/js/demo.js"></script>
</body>
</html>