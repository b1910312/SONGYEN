@extends('layouts.users.login')

@section('sesion')
    <section class="ftco-section">
        <div class="container card" style="max-width:30%;background-color: rgba(0, 0, 0, 0.2); padding:10px 10px ">
            <div class=" justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center mb-12">
                        <h2 class="heading-section">Đăng nhập</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center mb-12">
                        <h4 class="text-white">Bạn chưa có tài khoản <a href="{{route('register')}}" class="text-white btn btn-outline-success">Đăng ký ngay</a> </h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="login-wrap p-0">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mb-12">
                                    <label for="email"
                                        class="col-md-5 col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required placeholder="abc123@gmail.com"
                                            autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-12">
                                    <label for="password"
                                        class="col-md-6 col-form-label text-md-end">{{ __('Password') }}</label>
                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="**************">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 w-100 text-center">
                                        <button type="submit" class="btn btn-outline-primary text-white col-md-5"
                                            style="margin: 5px 5px;">
                                            {{ __('Đăng nhập') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-outline-warning text-white col-md-6"
                                                href="{{ route('password.request') }}">
                                                {{ __('Quên mật khẩu?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
