<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from colorlib.com/polygon/admindek/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
	<!-- Added by HTTrack -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<!-- /Added by HTTrack -->
	<head>
		<title>Khanqabd</title>
		<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.admin')/js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
		<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
		<meta name="author" content="colorlib" />
		<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('admin')}}/css/waves.min.css" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/feather.css">
		<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/font-awesome-n.min.css">
		<link rel="stylesheet" href="{{asset('admin')}}/css/chartist.css" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/widget.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
			<script type="text/javascript">
		const Toast = Swal.mixin({
		  toast: true,
		  position: 'top-end',
		  showConfirmButton: false,
		  timer: 3000,
		  timerProgressBar: true,
		  didOpen: (toast) => {
		    toast.addEventListener('mouseenter', Swal.stopTimer)
		    toast.addEventListener('mouseleave', Swal.resumeTimer)
		  }
		})
	</script>
	</head>
	<body>
		<div class="loader-bg">
				<div class="loader-bar"></div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				@include('admin.master.header')
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						@include('admin.master.nav')
					<div class="pcoded-content">
						@yield('content')
					</div>
					<div id="styleSelector"></div>
				</div>
			</div>
		</div>
	</div>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/jquery.min.js"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/jquery-ui.min.js"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/popper.min.js"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('admin')}}/js/waves.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/jquery.slimscroll.js"></script>
	<script src="{{asset('admin')}}/js/jquery.flot.j')}}s" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/jquery.flot.categories.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/curvedlines.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/jquery.flot.tooltip.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/amcharts.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/serial.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/light.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/markerclusterer.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/gmaps.j')}}s"></script>
	<script src="{{asset('admin')}}/js/pcoded.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script src="{{asset('admin')}}/js/vertical-layout.min.js" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/crm-dashboard.min.js"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript" src="{{asset('admin')}}/js/script.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="2d8d78e876b340f9029c575b-text/javascript"></script>
	<script type="2d8d78e876b340f9029c575b-text/javascript">
	window.dataLayer = window.dataLayer || [];
	function gtag() {
	dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'UA-23581568-13');
	</script>
	<script src="{{asset('admin')}}/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer=""></script>
</body>

</html>