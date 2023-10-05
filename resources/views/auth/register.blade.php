@extends('layouts.users.login')

@section('sesion')
    <section class="ftco-section">
        <div class="container card" style="max-width:30%;background-color: rgba(0, 0, 0, 0.2); padding:10px 10px ">
            <div class=" justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center mb-12">
                        <h2 class="heading-section">Đăng Ký</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center mb-12">
                        <h4 class="text-white">Bạn đã có tài khoản 
                            <a href="{{route('login')}}" class="text-white btn btn-outline-primary">Đăng nhập ngay</a> 
                        </h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="login-wrap p-0">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Họ và tên') }}</label>

                                    <div class="col-md-12">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nguyễn Văn/Thị A">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="abc123@gmail.com">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="***************">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-6 col-form-label text-md-end">{{ __('Nhập lại Mật khẩu') }}</label>

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password" placeholder="***************">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 ">
                                        <button type="submit" class="btn btn-outline-success text-white w-100">
                                            {{ __('Đăng ký') }}
                                        </button>
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
