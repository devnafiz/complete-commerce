@extends('frontend.master')

@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/product_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/cart_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/cart_responsive.css')}}">

@endsection
@section('content')



	<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Your Wishlist Product</div>
						<div class="cart_items">
							<ul class="cart_list">
                            @foreach($products as $k=>$val)

								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{asset($val->product_thambnail)}}" alt="" width="70" height="70"></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{$val->product_name_en}}</div>
										</div>
										@if($val->product_color_en==NULL)

										@else
										   <div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"> {{$val->product_color_en}}</span></div>
										</div>
										@endif
										
										
										

										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Action</div>
											<a href="#"><i class="fas fa-trash-alt"></i></a>
											<a href="#"><i class="fas fa-cart"></i></a>
										</div>
									</div>
								</li>

								@endforeach
							</ul>
						</div>
						
						<!-- Order Total -->
					

					
					</div>
				</div>
			</div>
		</div>
	</div>












<script>
 const triggerTabList = document.querySelectorAll('#myTab button')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
})

</script>

@endsection

@section('extra_ja')

<script src="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('frontend/js/product_custom.js')}}"></script>
<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('frontend/js/cart_custom.js')}}"></script>
@endsection