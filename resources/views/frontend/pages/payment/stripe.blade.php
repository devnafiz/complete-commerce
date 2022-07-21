@extends('frontend.master')

@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/product_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/cart_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/styles/cart_responsive.css')}}">
<script src="https://js.stripe.com/v3/"></script>

@endsection
@section('content')

@php
   $charge =DB::table('settings')->first();
   $shipping =$charge->shopping_charge;
   $vat =$charge->vat;
   $cart =Cart::content();

@endphp

	<div class="cart_section">
		<div class="container">
			

				<div class="row">
					   <div class="col-lg-7 col-md-7" style="border:1px solid gray; padding: 20px;">
					   		<div class="cart_items">
							<ul class="cart_list">
                            @foreach($cart as $k=>$val)

								<li class="cart_item clearfix">
								
									<div class=" d-flex flex-md-row flex-column justify-content-between">

										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Image</div>
											<div class="cart_item_text"><img src="{{asset($val->options->image)}}" alt="" width="60" height="60"></div>
										</div>
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">{{$val->name}}</div>
										</div>
										@if($val->options->color==NULL)

										@else
										   <div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"> {{$val->options->color}}</div>
										</div>
										@endif
										
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text"> {{$val->qty}}</div>

											
											
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">${{$val->price}}</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">${{$val->qty*$val->price}}</div>
										</div>

										
									</div>
								</li>

								@endforeach
							</ul>
							<ul class="list-group col-lg-4" style="float: right;">

								@if(Session::has('coupon'))
								<li class="list-group-item">Sub Total:<span style="float:right;">${{Session::get('coupon')['balance']}}</span></li>
								<li class="list-group-item">Coupon:({{Session::get('coupon')['name']}}) 
                 <a href="{{route('coupon.remove')}}" class="btn btn-danger btn-sm">X</a>
									<span style="float:right;">{{Session::get('coupon')['discount']}}</span></li>
								@else

								<li class="list-group-item">Sub Total:<span style="float:right;">${{Cart::subtotal()}}</span></li>
						

								@endif
								<li class="list-group-item">Shipping Charge:<span style="float:right;">{{ $shipping}}</span></li>
								<li class="list-group-item">Vat:<span style="float:right;">{{ $vat}}</span></li>

								@if(Session::has('coupon'))
                    <li class="list-group-item">Total:<span style="float:right;">{{Session::get('coupon')['balance'] + $shipping + $vat}}</span></li>
								@else
                 <li class="list-group-item">Total:<span style="float:right;">{{Cart::subtotal() + $shipping + $vat}}</span></li>
								@endif
								
								
							</ul>
						</div>
					   	
					   </div>
					   <div class="col-lg-5 " style="border:1px solid gray; padding: 20px;">

					   	  <div class="contact_form_container">
                        <div class="contact_form_title text-center">Shipping address</div>


                          <form action="{{route('stripe.charge')}}" method="post" id="payment-form">
                          	@csrf
							  <div class="form-row">
							    <label for="card-element">
							      Credit or debit card
							    </label>
							    <div id="card-element">
							      <!-- A Stripe Element will be inserted here. -->
							    </div>

							    <!-- Used to display Element errors. -->
							    <div id="card-errors" role="alert"></div>
							  </div><br>
							  <input type="hidden" name="shipping" value="{{ $shipping}}">
							   <input type="hidden" name="vat" value="{{$vat}}">
							    <input type="hidden" name="total" value="{{Cart::Subtotal() + $shipping + $vat}}">

							  <button class="btn btn-info">pay now</button>
							</form>

        

                    </div>
					   	
					   </div>
					
				</div>
						

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">All Cancel</button>
							<a href="{{route('payment.step')}}" class="button cart_button_checkout">Checkout</a>
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


	
	<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_YiOT0gxpcUb2SVnMrzC0rIOt');
// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>

	


	<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;
  height: 40px;
  width: 100%;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>

@endsection

@section('extra_ja')

<script src="{{asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('frontend/js/product_custom.js')}}"></script>
<script src="{{asset('frontend/plugins/easing/easing.js')}}"></script>
<script src="{{asset('frontend/js/cart_custom.js')}}"></script>
@endsection