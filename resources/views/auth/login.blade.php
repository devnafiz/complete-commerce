

        @extends('frontend.master')

        @section('extra-css')
            <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_styles.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_responsive.css')}}">

        @endsection


        @section('content')

    

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

      

        <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1" style="border:1px solid gray; padding: 20px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Signin</div>


        <form action="{{route('login')}}" id="contact_form" method="POST">
               @csrf
                           
                            <div class="form-group">
                                 <input type="text"  class="form-control " placeholder="Your name" required="required" data-error="Name is required." name="email">
                            </div> 
                            <div class="form-group">
                                 <input type="password"  class="form-control " placeholder="Your name" required="required" data-error="Name is required." name="password">
                            </div> 
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">login </button>
                            </div>
                        </form>
                      <br>

                        @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                      <button type="submit" class="btn btn-block btn-primary">Login with Facebook</button>
                        <button type="submit" class="btn btn-block btn-danger">Login with Google</button>

                    </div>
                </div>
                    
                <div class="col-lg-5 offset-lg-1" style="border:1px solid gray; padding: 20px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Sign Up</div>


        <form action="{{route('register')}}" id="contact_form" method="POST">
                         @csrf   
                            <div class="form-group">
                                 <input type="text"  class="form-control " placeholder="Your Full name" required="required" data-error="Name is required." name="name">
                            </div> 
                            <div class="form-group">
                                 <input type="text"  class="form-control " placeholder="Your Phone" required="required" data-error="Name is required." name="phone">
                            </div> 
                              <div class="form-group">
                                 <input type="email"  class="form-control " placeholder="Your email" required="required" data-error="Name is required." name="email">
                            </div> 
                            <div class="form-group">
                                 <input type="password"  class="form-control " placeholder="Your Password" required="required" data-error="Name is required." name="password">
                            </div> 
                             <div class="form-group">
                                 <input type="password"  class="form-control " placeholder="Your Confirm Password" required="required" data-error="Name is required." name="password_confirmation">
                            </div> 
                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Sign Up</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>




     @endsection   
