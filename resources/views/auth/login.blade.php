

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

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

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
