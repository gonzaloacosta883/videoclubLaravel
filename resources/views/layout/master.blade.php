
<html>
<head>
	<title> </title>
<link href = "{{asset ('css/bootstrap.css')}}" rel = "stylesheet">
<script src = "{{asset ('js/bootstrap.min.js')}}"> </script>
 <script src = "js/bootstrap.min.js"> </script>
</head>
<body>



@include ('partials.navbar')


<div class = "container">
	@include('flash::message')
	@section ('menu')
	<p>Gestion del Videoclub</p>
	@show
</div>
<div class="container">
	@yield ('content')
</div>	


</body>
</html>