@extends('layouts.admin.admin')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm đối tác</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.partner.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="">Tên</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="">Logo</label>
                                <input type="file" class="form-control-file" name="image" id="image">
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
                                <label for="">Ghi chú</label>
                                <textarea class="form-control" name="note" id="note" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submit" class="btn btn-primary">Add</button>
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
                                <h3 class="card-title text-bold">Danh sách đối tác
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
                                            <th class="col-lg-1">Logo</th>
                                            <th class="col-lg-1">Email</th>
                                            <th class="col-lg-1">Số điện thoại</th>
                                            <th class="col-lg-1">Địa chỉ</th>
                                            <th class="col-lg-2">Ghi chú</th>
                                            <th class="col-lg-1">Tạo mới</th>
                                            <th class="col-lg-1">Cập nhật</th>
                                            <th class="col-lg-2">Thao tác</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $blg)
                                            <tr>
                                                <td class="col-lg-1">{{ $blg->id }}</td>
                                                <td class="col-lg-1">{{ $blg->name }}</td>
                                                <td class="col-lg-1"><img
                                                        src="{{ asset('uploads/partner/' . $blg->image) }}"
                                                        class="img-fluid h-50" alt=""></td>
                                                <td class="col-lg-1">{{ $blg->email }}</td>
                                                <td class="col-lg-1">{{ $blg->phone }}</td>
                                                <td class="col-lg-1">{{ $blg->address }}</td>
                                                <td class="col-lg-2">{{ $blg->note }}</td>
                                                <td class="col-lg-1">{{ $blg->created_at }}</td>
                                                <td class="col-lg-1">{{ $blg->updated_at }}</td>
                                                <td class="col-lg-2">   
                                                    <a href="#" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#model{{ $blg->id }}"><i
                                                            class="fa fa-wrench"></i></a>
                                                    <a href="#" class="btn btn-info" data-toggle="modal"
                                                        data-target="#image{{ $blg->id }}"><i
                                                            class="fa fa-user-circle"></i></a>
                                                    <a href="{{ route('admin.partner.delete', ['id' => $blg->id]) }}"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="model{{ $blg->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Cập nhật thông tin đối tác</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.partner.update', ['id' => $blg->id]) }}"
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
                                                                    <div class="form-group">
                                                                        <label for="">Ghi chú</label>
                                                                        <textarea class="form-control" name="note" id="note" rows="3">{{ $blg->note }}</textarea>
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
                                                            <h5 class="modal-title">Cạp nhật logo đối tác</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.partner.update.image', ['id' => $blg->id]) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="form-group">
                                                                        <label for="">Logo</label>
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
