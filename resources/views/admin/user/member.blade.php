@extends('layouts.admin.admin')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm nhân sự</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.member.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="abc123@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="">Tên</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nguyễn Văn A">
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh đại diện</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="">Ngày sinh</label>
                                <input type="date" name="birth" id="birth" class="form-control">
                            </div>
                            <div class="form-group d-inline">
                                <label for="">Giới tính</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="sex" id="sex"
                                            value="0">
                                        Nam
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="sex" id="sex"
                                            value="1">
                                        Nữ
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" id="address">
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    onkeyup="check()">
                            </div>
                            <div class="form-group">
                                <label for="">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="passwordconfirm" id="passwordconfirm"
                                    onkeyup="check()">
                                <span id='message'></span>
                            </div>
                            <div class="form-group d-inline">
                                <label for="">Vai trò</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="role" id="role"
                                            value="1">
                                        Quản trị viên
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="role" id="role"
                                            value="2">
                                        Khách hàng
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submit" class="btn btn-primary" disabled='disable'>Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-bold">Danh sách nhân sự
                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modelId">+</a>
                                </h3>
                                <div class="card-tools">

                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search" id="myInput" onkeyup="search()">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 840px;">
                                <table class="table table-head-fixed" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1">ID</th>
                                            <th class="col-lg-1">Tên</th>
                                            <th class="col-lg-1">Ảnh đại điện</th>
                                            <th class="col-lg-1">Email</th>
                                            <th class="col-lg-1">Ngày sinh</th>
                                            <th class="col-lg-1">Giới tính</th>
                                            <th class="col-lg-1">Số điện thoại</th>
                                            <th class="col-lg-2">Địa chỉ</th>
                                            <th class="col-lg-1">Tạo mới</th>
                                            <th class="col-lg-1">Cập nhật</th>
                                            <th class="col-lg-1">Thao tác</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Users as $blg)
                                            @foreach ($Customers as $cus)
                                                @if ($cus->email == $blg->email)
                                                    <tr>
                                                        <td class="col-lg-1">{{ $blg->id }}</td>
                                                        <td class="col-lg-1">{{ $blg->name }}</td>
                                                        <td class="col-lg-1"><img
                                                                src="{{ asset('uploads/avatar/' . $blg->image) }}"
                                                                class="img-fluid h-50" alt=""></td>
                                                        <td class="col-lg-1">{{ $blg->email }}</td>
                                                        <td class="col-lg-1">{{ date('d-m-Y', strtotime($blg->birth)) }}
                                                        </td>
                                                        <td class="col-lg-1">
                                                            @if ($blg->sex == 0)
                                                                {{_('Nam')}}
                                                            @else
                                                                {{_('Nữ')}}
                                                            @endif
                                                        </td>
                                                        <td class="col-lg-1">{{ $blg->phone }}</td>
                                                        <td class="col-lg-2">{{ $blg->address }}</td>
                                                        <td class="col-lg-1">{{ $blg->created_at }}</td>
                                                        <td class="col-lg-1">{{ $blg->updated_at }}</td>
                                                        <td class="col-lg-1">
                                                            <a href="#" class="btn btn-warning" data-toggle="modal"
                                                                data-target="#model{{ $blg->id }}"><i
                                                                    class="fa fa-wrench"></i></a>
                                                            <a href="#" class="btn btn-info" data-toggle="modal"
                                                                data-target="#image{{ $blg->id }}"><i
                                                                    class="fa fa-user-circle"></i></a>
                                                            <a href="{{ route('admin.member.update.role', ['email' => $blg->email]) }}"
                                                                class="btn btn-secondary"><i class="fa fa-key"></i></a>
                                                            <a href="{{ route('admin.blog.delete', ['id' => $blg->id]) }}"
                                                                class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            <div class="modal fade" id="model{{ $blg->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Cập nhật thông tin nhân sự</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.member.update', ['id' => $blg->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <input type="email" class="form-control"
                                                                        name="email" id="email" hidden
                                                                        value="{{ $blg->email }}">
                                                                    <div class="form-group">
                                                                        <label for="">Tên</label>
                                                                        <input type="text" class="form-control"
                                                                            name="name" id="name"
                                                                            placeholder="Nguyễn Văn A"
                                                                            value="{{ $blg->name }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Ngày sinh</label>
                                                                        <input type="date" name="birth"
                                                                            id="birth" class="form-control"
                                                                            value="{{ $blg->birth }}">
                                                                    </div>
                                                                    <div class="form-group d-inline">
                                                                        <label for="">Giới tính</label>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="sex" id="sex"
                                                                                    value="0"
                                                                                    @if ($blg->sex == 0) {{ _('checked') }} @endif>
                                                                                Nam
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="radio"
                                                                                    class="form-check-input"
                                                                                    name="sex" id="sex"
                                                                                    value="1"
                                                                                    @if ($blg->sex == 1) {{ _('checked') }} @endif>
                                                                                Nữ
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Số điện thoại</label>
                                                                        <input type="text" class="form-control"
                                                                            name="phone" id="phone"
                                                                            value="{{ $blg->phone }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Địa chỉ</label>
                                                                        <input type="text" class="form-control"
                                                                            name="address" id="address"
                                                                            value="{{ $blg->address }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="image{{ $blg->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Cạp nhật ảnh đại diện nhân sự</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.member.update.image', ['id' => $blg->id]) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="form-group">
                                                                        <label for="">Ảnh đại diện</label>
                                                                        <input type="file" class="form-control-file"
                                                                            name="image" id="image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <script>
        var DSB = function() {
            $('#password, #passwordconfirm').on('keyup', function(event) {
                event.preventDefault();
                if ($('#password').val() == '') {
                    $('#submit').attr('disabled');
                } else {
                    if ($('#password').val() == $('#passwordconfirm').val()) {
                        $('#submit').removeAttr('disabled');
                    } else
                        $('#submit').attr('disabled', 'disabled');

                }
            });
        }
        var check = function() {
            $('#password, #passwordconfirm').on('keyup', function(event) {
                event.preventDefault();
                if ($('#password').val() == $('#passwordconfirm').val()) {
                    $('#message').html('Mật khẩu trùng khớp').css('color', 'green');
                } else
                    $('#message').html('Mật khẩu không trùng khớp').css('color', 'red');
            });
            DSB();
        }
    </script>
    <script>
        function search() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
    
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
