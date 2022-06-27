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
						<div class="cart_title">Shopping Cart</div>
						<div class="cart_items">
							<ul class="cart_list">
                            @foreach($cart as $k=>$val)

								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="{{asset($val->options->image)}}" alt="" width="70" height="70"></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{$val->name}}</div>
										</div>
										@if($val->options->color==NULL)

										@else
										   <div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"> {{$val->options->color}}</span></div>
										</div>
										@endif
										
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div><br>

											<form method="POST" action="{{route('update.cart.item')}}">
												@csrf
												<input type="hidden" name="productId" value="{{$val->rowId}}">
												<input type="text" name="qty" value="{{$val->qty}}" style="width: 50px;">
												<button class="btn btn-success btn-sm" type="submit"><i class="fas fa-check-square"></i></button>

											</form>
											
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{$val->price}}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">${{$val->qty*$val->price}}</div>
										</div>

										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Action</div>
											<a href="{{url('remove/cart/'.$val->rowId)}}"><i class="fas fa-trash-alt"></i></a>
										</div>
									</div>
								</li>

								@endforeach
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">${{Cart::total()}}</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">All Cancel</button>
							<a href="#" class="button cart_button_checkout">Checkout</a>
						</div>
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