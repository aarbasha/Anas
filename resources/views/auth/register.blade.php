@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">


                            <div class=" col-md-6 offset-md-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6 offset-md-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 offset-md-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Conferm Password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-6 offset-md-3 mt-3 ">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{route('login')}}" class="btn btn-block btn-success">
                                    {{ __('Login') }}
                                </a>
                            </div>
                        </div>
                        <hr class="">
                        <p class="text-center mt-3" style="font-weight:bold">OR</p>

                        <div class="d-flex  justify-content-center mt-4 ">

                            <a href="{{ route('login.github')}}" class="m-2 btn  btn-lg"
                                style="background:black;color:white;padding:10px 30px;border-radius:20px;border:none;">Github</a>
                            <a href="{{ route('login.facebook')}}" class="m-2 btn  btn-lg"
                                style="background:rgb(0, 31, 236);color:white;padding:10px 30px;border-radius:20px;border:none;">Facebook</a>
                            <a href="{{ route('login.google')}}" class="m-2 btn  btn-lg"
                                style="background:rgb(186, 0, 0);color:white;padding:10px 30px;border-radius:20px;border:none;">Google</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
