<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
ul.card-toolbar {
    margin: 0;
    padding: 0;
    display: block;
}

    ul.card-toolbar > li {
        float: left;
        display: list-item;
        list-style: none;
        margin: 0px;
        /*margin: 0 5px 10px 0;*/
    }

.btn-default {
    background-image: -webkit-linear-gradient(top,#fff 0,#e0e0e0 100%);
    background-image: linear-gradient(to bottom,#fff 0,#e0e0e0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-color: #dbdbdb;
    text-shadow: 0 1px 0 #fff;
    border-color: #ccc;
    text-shadow: 0 -1px 0 rgba(0,0,0,.2);
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 1px rgba(0,0,0,.075);
}

.thin-card-header {
    padding: 0.5rem 1.25rem;
}

.card {
    border-radius: 0.5rem;
}

</style>
</head>
<body>
<?php
						use App\Register;
						$sess=session()->get('email');
						$a=Register::where('email',$sess)->get();
						foreach($a as $object)
						{
							$id=$object->id;
							$email=$object->email;
							$p_name=$object->p_name;
							$phone=$object->phone;
							$h_name=$object->h_name;
							$street=$object->street;
							$district=$object->district;
							$city=$object->city;
							$pin=$object->pin;
							$dname=DB::table('tbl_district')->select('name')->where('district_id',$district)->pluck('name');							
							$cname=DB::table('tbl_city')->select('city_name')->where('city_id',$city)->pluck('city_name');
							
						}
						//$user=DB::table('registers')->where('id',$id)->first();						
					  
					?>
<br><br><br>
<div class="container">
	<div class="row">
	    <div class="col-lg-12">
	   
		<div class="card bg-default mb-3">
    <div class="card-header thin-card-header">
        <div class="card-title">
            <ul class="card-toolbar">
                <li class="float-left">
                    <h4 style="font-family:Poppins, sans-serif"><i class="fa fa-map-marker"></i> Address</h4>
                </li>
               
            </ul>
        </div>
    </div>
    <div class="card-body">
        <form class="form-horizontal" role="form" method="post" action="/Check">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />

            <div class="row">
                <div class="col-lg-6">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="textinput">Name</label>
                        <input type="text" value="{{$p_name}}" name="name" class="form-control">
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="textinput">Address</label>
                        <textarea rows="2"  name="address"class="form-control" >{{$h_name}},{{$street}}
						
						
						</textarea>

                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="textinput">City</label>
                        <input type="text" name="city" value="{{$cname[0]}}" class="form-control">
                    </div>
                    <!-- Text input-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="textinput">District</label>
                                <input type="text" name="district" value="{{$dname[0]}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label" for="textinput">Postcode</label>
                                <input type="text"  name="pin"value="{{$pin}}" class="form-control">
                            </div>
                        </div>
                    </div>

                    
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="text" name="email"class="form-control" value="{{$email}}" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mobile Number</label>
                        <input type="text"  name="mobile"class="form-control" value="{{$phone}}" />
                    </div>
                    
<div class="card-header thin-card-header">
        <div class="card-title">
            <ul class="card-toolbar">
                <li class="float-left">
                     
                        <label class="control-label">PRICE DETAILS</label>
						<br><br>
						 <?php
						 $sess=session()->get('amt');
						$c = DB::table('tblcarts')->where('id',$id)->where('status', '=' ,1)->get();								
						$s=count($c);					
						?>
						<table>
						<tr><th> <label class="control-label">Price({{$s}})&nbsp;Item:&nbsp;</th><td>{{$t}}</td></label></tr>
						 </table>
						
                </li>
               
            </ul>
        </div>
    </div>
                        <input type="hidden" name="amt" value="{{$t}}">
						<input type="hidden" name="p_id" value="{{$id}}">
			
			            
						</div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
	</div>
	</div>
</div>
</body>
</html>