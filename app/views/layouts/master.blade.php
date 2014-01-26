<style type="text/css">
	.text-head{
		text-align:center;font-size:25px;font-weight:bold;text-decoration:underline;
	}
</style>
{{ HTML::script('assets/jquery/jquery.min.js'); }}
{{ HTML::script('assets/bootstrap/dist/js/bootstrap.min.js'); }}
{{ HTML::style('assets/bootstrap/dist/css/bootstrap.css'); }}

<html>
<body>
	@section('sidebar')
		<div class="text-head"> Práctica Laravel Gestor de usuarios.<br><br> </div>
	@show
	<div class="container">
		@yield('content')
	</div>
</body>
</html>