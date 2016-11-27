<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
</head>
<body>

{{-- form start --}}
<form action="/hitung" method="post">
{{csrf_field()}}  {{-- csrf token --}}
<input type="text" name="startdate" class="datepicker" placeholder="startdate">
<input type="text" name="enddate" class="datepicker">
<button>Hitung</button>
@if(session('hasil'))
{{session('hasil')}}
@endif
</form>
{{-- form end --}}
<script type="text/javascript">
    

</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });
</script>
</body>
</html>