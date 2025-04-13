<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Qa Qc</title>
    <!-- CSS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Sanksi In Quality">
	<meta name="author" content="D-Azulli">
	<!-- CSS -->
	<link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
	<!--<link href="{{asset('admin/assets/css/main.css')}}" rel="stylesheet" type="text/css"> -->
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{asset('admin/assets/ico/queenadmin-favicon144x144.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{asset('admin/assets/ico/queenadmin-favicon114x114.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{asset('admin/assets/ico/queenadmin-favicon72x72.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{asset('admin/assets/ico/queenadmin-favicon57x57.png')}}">
	<link rel="shortcut icon" href="{{asset('admin/assets/ico/favicon.ico')}}">
</head>

<body class="fixed-top-active dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP NAV BAR -->
		@include('layout.include._navbarviewuser')
		<!-- END TOP NAV BAR -->
		
		<!-- COLUMN RIGHT -->
		<div id="col-right" class="col-right ">
			<div class="container-fluid primary-content">
				<!-- PRIMARY CONTENT HEADING -->
				
				<!-- END PRIMARY CONTENT HEADING -->
				@yield('content')
			</div>
			
		</div>
		<!-- END COLUMN RIGHT -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap/bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-common.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.time.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.orderBars.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/raphael/raphael-min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/jquery.mapael.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/maps/world_countries.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-editable/bootstrap-editable.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-maskedinput/jquery.masked-input.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-charts.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-maps.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-elements.js')}}"></script>
	<!-- Javascript Table -->
    <script src="{{asset('admin/assets/js/plugins/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/exts/dataTables.colVis.bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/exts/dataTables.colReorder.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/exts/dataTables.tableTools.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/datatable/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-table.js')}}"></script>
	<!-- Javascript form -->
	<script src="{{asset('admin/assets/js/plugins/bootstrap-slider/bootstrap-slider.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-form-layouts.js')}}"></script>




</body>

</html>
