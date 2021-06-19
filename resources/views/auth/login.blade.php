@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-md-6 col-sm-8 ml-auto mr-auto">
            <div class="card flex-row" style="overflow: hidden">
                <div class="col-lg-6 col-12 px-0 d-lg-block d-none">
                    <img src="{{ asset('assets/img/bg.jpg') }}" alt="" class="card-img">
                </div>
                <div class="col-lg-6 col-12 px-0">
                    <div class="card-body  justify-content-center">
                        <h4 class="text-center font-weight-bold">Login</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="bmd-form-group is-filled">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text pl-0">
                                          <i class="material-icons">email</i>
                                      </span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="bmd-form-group is-filled">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text pl-0">
                                          <i class="material-icons">lock_open</i>
                                      </span>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-check mr-auto ml-1 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Remember Me') }}
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            
                            <div class="form-group row justify-content-between mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
    
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link pr-0" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
