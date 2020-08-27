<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>MEDILIFE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../../doctor/dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../doctor/dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../doctor/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="../../doctor/dist/css/demo.css">
  <link rel="stylesheet" href="../../doctor/dist/css/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<style>
input[type="text"]{
		border-top: none !important;
		border-right: none !important;
		border-left: none !important;
		border-bottom: 1px dotted #2196f3 !important;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		-moz-transition: none !important;
		-webkit-transition: none !important;
	}
	.textarea{
		border-top: none !important;
		border-right: none !important;
		border-left: none !important;
		border-bottom: 1px dotted #2196f3 !important;
		box-shadow: none !important;
		-webkit-box-shadow: none !important;
		-moz-box-shadow: none !important;
		-moz-transition: none !important;
		-webkit-transition: none !important;
	}
	.heading{
    color: #2196f3;
}

.control{
padding-top:7px;
}

.reciept{
    border-top: 5px solid #2196f3;
    -webkit-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    -moz-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    box-shadow: 0px 
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
							$d_name=$object->d_name;
							$surname=$object->surname;
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
 <?php
					use App\Tbl_appoinment;
					use App\Register;
					$sess=session()->get('p_id');					
					$req=DB::table('registers')->where('id',$sess)->where('status',1)->get();
					foreach($req as $s)
					{						
						$p_id=$s->id;
						
					    $dob=$s->dob;
					    $p_name=$s->p_name;
					    $gender=$s->gender;
					    //$name=DB::table('registers')->where('id',$p_id)->first();
						$dob=$s->dob;				
					}
					?>
           
             
          </div>
        </aside>
      </div>
      <div class="main-content">
	  <section class="section">
          <h1 class="section-header">
            <div>Treatment Details</div>
          </h1>
		  </section>
		  
	
	   
      
<div class="container">
<div class="reciept">
				

	<div class="row" style="margin-top:10px;">
		<div class="col-md-8">
			<div class="col-md-3">
            <img class="media-object img-thumbnail user-img" style="height: 80px;"  src="../../doctor/dist/img/dr.png"></div>
		   <div class="col-md-9 text-right">
			<h4 class="heading">MEDILIFE HOSPITAL</h4>
			<h5 class="heading">Hanuman Mandir C.C.Road, Kochi</h5>
			<h6 class="heading">+91 9455078760</h6>
			</div>
		</div>
		<div class="col-md-4">
			<label class="col-md-6 control" >Date :&nbsp;<font color="red" size="2px"><?php
			  $mydate=getdate(date("U"));			
			  echo "$mydate[month] $mydate[mday], $mydate[year]";	   
			   ?></font></label>
          
		         
		    
              <label class="col-md-6 control" > Age:&nbsp;<font color="red" size="2px"><?php
			$dateOfBirth = $dob;
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			 echo $diff->format('%y');
			?>   </font> </label>
			     
			
              
                            
           
		                
		</div>
	</div>
	<br/>
	<!--<a href="javascript:window.print()">Download</a>-->
	<div class="row">
		<div class="col-md-12">
             <label class="col-md-3 control">Patient Name :<font color="black" size="3px"><b>&nbsp;{{$p_name}}</b></font></label><br>		
              <label class="col-md-3 control" for="">Gender :<font color="black" size="3px"><b>&nbsp;{{$gender}}</b></font></label>                    
         </div>
     </div>
	 <div class="row">
		<div class="col-md-12">
			<div class="form-group">
			<?php
					use App\Tbl_treatment;		
					$di=DB::table('tbl_treatments')->select('diseases')->where('d_id',$id)->where('p_id',$p_id)->where('date',$today)->pluck('diseases');								 
					  ?>
					  <div class="col-md-12" style="padding-left:20px;">
					   Diseases:{{$di[0]}}</div>
              <label class="col-md-12 control">Prescription :</label>
              <div class="col-md-12" style="padding-left:20px;">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			
	   
                             <div class="table-responsive">  
                                  <table class="table">
					
                <thead>
				
				
                    <tr>
                        <th>Sl.No</th>
                        <th >Medicine</th>
                        <th>Times</th>
                        <th >Section</th>
						
                    </tr>
                </thead>
                <tbody>
				<?php
					//use App\Tbl_treatment;
					
					
					$mno=DB::table('tbl_treatments')->where('d_id',$id)->where('p_id',$p_id)->where('date',$today)->get();
					//dd($req);
					$counter = 0;
					foreach($mno as $m)
					{
						
						$p_id=$m->p_id;
					   $d_id=$m->d_id;
                       $trt_id=$m->trt_id;					   
					   $diseases=$m->diseases;
					  // $time=$m->time;
					  // $section=$m->section;
					   	$po=DB::table('tbl_trt_details')->where('trt_id',$trt_id)->get();
						foreach($po as $n)
						{
							$treatment=$n->treatment;
						   $time=$n->time;
						   $section=$n->section;	

					    //$p_name=DB::table('registers')->select('p_name')->where('id',$p_id)->pluck('p_name');
						//$p_name=DB::table('registers')->select('p_name')->where('id',$p_id)->pluck('p_name');					
					
?>					
                    <tr>
                        <td>{{++$counter}}</td>
                        <td>{{$treatment}}</td>
                        <td>{{$time}}</td>
                        <td>{{$section}}</td>
						
						

						
                    </tr>
					<?php
					}
					}
					?>
                    
                </tbody>
         </table>                                    
              <a href="javascript:window.print()"><div style="margin-left: 750px;"><input type="submit" class="btn btn-info" value="Download" /> </div></a>

                                           </div>
										   </form>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Medicine" class="form-control name_list" /></td><td><select name="times[]"><option value="1">1-times</option><option value="2">2-times</option><option value="3">3-times</option></select></td><td><select name="section[]"><option value="before">Before Food</option><option value="after">After Food</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="background-color:red;">X</button></td></tr>');  
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

            </div>
			
			
	</form>
			
			
		<div class="row" style="margin-top:80px;margin-left: 730px;">
		<div class="col-md-9">
		</div>
		<div class="col-md-6">
			<div class="form-group">
              <label class="control" for="name"><u>Authorised Signature</u></label>
			  <label><big><b>Dr.{{$d_name}}&nbsp;{{$surname}}</b></big></label><br>
			  <label><big><b>{{$cname[0]}}</b></big></label>

            </div>
		</div>
		</div>
		</div>
	</div>

      
      

    
<script>
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script
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