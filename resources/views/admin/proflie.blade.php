@extends('layouts.admin.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row" style="padding: 30px 30px">
                    <div class="container col-lg-3 card border border-warning " style="padding: 30px 30px">
                        <div>
                            <div class="row d-flex">
                                <img class="img-fluid  mx-auto" style="max-height: 300px; width: auto; border-radius: 1 0%;"
                                    src="{{ asset('uploads/avatar/' . $Infor->image) }}" alt="">

                            </div>
                            <div class="container text-center">
                                <br>
                                <h5>{{ $Infor->name }}
                                </h5>
                            </div>
                            <br>
                            <div class=" container text-left" style="padding: 30px 30xp;">
                                <p><b>Vai trò:</b> <br>
                                    @if ($Account->role == 1)
                                        {{ _('Quản trị viên') }}
                                    @else
                                        {{ _('Khách hàng') }}
                                    @endif
                                </p>
                                <p><b>Email:</b> <br> {{ $Infor->email }}</p>
                                <p><b>Số điện thoại:</b> <br> {{ $Infor->phone }}</p>
                                <p><b>Ngày sinh:</b> <br> {{ date('d/m/Y', strtotime($Infor->birth)) }}</p>
                                <p><b>Giới tính:</b> <br>
                                    @if ($Infor->sex == 1)
                                        {{ _('Nam') }}
                                    @else
                                        {{ _('Nữ') }}
                                    @endif
                                </p>
                                <p><b>Địa chỉ:</b> <br> {{ $Infor->address }}</p>
                                <p><b>Ngày đăng ký:</b> <br> {{ date('d/m/Y', strtotime($Infor->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 card border border-warning d-flex" style="padding: 30px 30px">

                        <div class="card" style="padding: 20px 20px;  margin: 10px 10px;">
                            <div class="card-head text-center">
                                <h4 class="text-uppercase">Cập nhật ảnh đại diện</h4>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <form action="{{ route('admin.customer.update.image', ['id' => $Infor->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group-lg">
                                            <label class="col-form-label-lg" for="">Ảnh đại diện</label>
                                            <br>
                                            <input type="file" class="form-control-file" name="image" id="image">
                                        </div>
                                        <br>
                                        <div class="float-end">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="padding: 20px 20px;  margin: 10px 10px;">
                            <div class="card-head text-center">
                                <h4 class="text-uppercase">Cập nhật thông tin cá nhân</h4>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <form action="{{ route('admin.customer.update', ['id' => $Infor->id]) }}"
                                        method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="">Họ tên</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="" aria-describedby="helpId" value="{{ $Infor->name }}">
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col">
                                                <label for="">Giới tính</label>
                                                <select class="form-control" name="sex" id="sex">
                                                    <option value="0"
                                                        @if ($Infor->sex == 0) {{ _('selected') }} @endif>
                                                        Nữ
                                                    </option>
                                                    <option value="1"
                                                        @if ($Infor->sex == 1) {{ _('selected') }} @endif>
                                                        Nam
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="">Số điện thoại</label>
                                                <input type="text" name="phone" id="phone" class="form-control"
                                                    placeholder="" aria-describedby="helpId" value="{{ $Infor->phone }}">
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col">
                                                <label for="">Ngày sinh</label>
                                                <input type="date" name="birth" id="birth" class="form-control"
                                                    placeholder="" aria-describedby="helpId" value="{{ $Infor->birth }}">
                                            </div>
                                        </div>

                                        <div class="row">


                                            <div class="form-group col">
                                                <label for="">Địa chỉ</label>
                                                <input type="text" name="address" id="address" class="form-control"
                                                    placeholder="" aria-describedby="helpId" value="{{ $Infor->address }}">
                                            </div>
                                        </div>
                                        <div class="row" style="float: right; margin: 10px 10px">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
