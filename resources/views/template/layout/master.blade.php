<?php
    //dd(Request()->session()->get('member_id'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cambodia-Japan Association for Business & Investment (CJBI) - Benefits</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Driving School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link rel="icon" href="{{ url('template/images/cjbi-fav.ico') }}" type="image/gif">
<link href="{{url('template/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url('template/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{url('template/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{url('template/js/main.js')}}"></script>
<!-- //js -->
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<!-- font-awesome-icons -->
<link href="{{url('template/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{url('template/css/flexslider.css')}}" type="text/css" media="screen" property="" />
<!-- //font-awesome-icons -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
@if(Request()->segment(1) == "jp")
<style>
	html, body, h1,h2,h3,h4,h5,h6, .navbar-default .navbar-nav > li > a, .snippet h1, h2, h3, h4, h5, h6, .wthree-services-right > h1, h2, h3,  h4, h5, h6 {
		font-family: 'Hiragino',Meiryo,'MS PGothic',sans-serif;
	}
</style>
@endif
</head>
<body>
    <!-- header -->
    	@include('template.layout.header')
	<!-- end header -->

	<!-- slide -->
 	<!-- end slide -->

		@yield('content')

	<!-- footer -->
		@include('template.layout.footer')
	<!-- //footer -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{url('template/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{url('template/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script src="{{url('template/js/bootstrap.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		 			
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
</body>
</html>