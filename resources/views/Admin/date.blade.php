<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
</head>
<body>
<input type="text" class="form-control date"/> 
</body>
<script>
$('.date').datepicker({
    multidate: true
});

$('.date').datepicker('setDates', [])
</script
</html>