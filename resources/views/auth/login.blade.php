@extends('frontend.listing.layout.app')
@section('title','best institute for iit in patna,Top coaching in Patna for NEET,Best coaching in Patna for 11 and
12,Best Coaching in Patna for SSC,Best IIT coaching in Bihar')
@section('content')
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">Sign in</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign in</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-log">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 offset-lg-3">
                <div class="login_form inner_page">
                    <form method="POST" action="{{ route('login') }}"> @csrf
                        <div class="input-group mb-2 mr-sm-2">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group form-group mb5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                            
                            @if (Route::has('password.request'))
                            <a class="btn-fpswd float-right text-thm" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                        <button type="submit" class="btn btn-log btn-block btn-thm">
                            {{ __('Login') }}
                        </button>
                        <p class="text-center mb30 mt20">Don't have an account? <a class="text-thm" href="{{route('register')}}">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
