<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{secure_asset('frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/styles/blog_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('frontend/styles/blog_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


@yield('extra-css')

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	@include('frontend.body.header_one')

	<!-- Home -->

	<!-- <div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Technological Blog</h2>
		</div>
	</div> -->

	<!-- Blog -->
  
	<div class="blog">
		 @yield('content')
		
	</div>

	<!-- Newsletter -->

	@include('frontend.body.footer')
</div>

<script src="{{secure_asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{secure_asset('frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{secure_asset('frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{secure_asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{secure_asset('frontend/js/blog_custom.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>

@yield('extra_ja')
</body>

</html>