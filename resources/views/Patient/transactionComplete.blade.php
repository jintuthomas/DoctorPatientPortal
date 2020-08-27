<html>
<title>MEDILIFE</title>

<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
body {
    margin-top: 20px;
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
							
						}
						//$user=DB::table('registers')->where('id',$id)->first();						
					  
					?>
					<br>
					<br><br><br>
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>MEDILIFE</strong>
                        <br>
                        2135 Sunset Blvd
                        <br>
                        Los Angeles, CA 90026
                        <br>
                        P: (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
					
                        <em>Date:  <?php
            $mydate=getdate(date("U"));
			
       echo "$mydate[month] $mydate[mday], $mydate[year]";
	   
	   
	  //$a= date('Y-m-d');
	   //echo $a;
	   ?></em>
                    </p>
                    <p>
                        <em>Receipt : {{$p_name}}</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th></th>
                            <th class="text-center"></th>
                            <th class="text-center">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Appointment</em></h4></td>
                            <td class="col-md-1" style="text-align: center">  </td>
                            <td class="col-md-1 text-center"></td>
                            <td class="col-md-1 text-center">${{$fee}}</td>
                        </tr>
                        
                       
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>${{$fee}}</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block">
                   <a href="javascript:window.print()">  Download Receipt </a> <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>
</body>
</html>