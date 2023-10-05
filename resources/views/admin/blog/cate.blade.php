@extends('layouts.admin.admin')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm danh mục mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.cate.add') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <textarea class="form-control" name="explains" id="explains" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="sumbit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-bold">Danh sách danh mục bài viết
                                    <a href="{{ route('admin.cate.add') }}" class="btn btn-primary" data-toggle="modal"
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
                                            <th class="col-lg-3">Tên danh mục</th>
                                            <th class="col-lg-5">Mô tả</th>
                                            <th class="col-lg-1">Tạo mới</th>
                                            <th class="col-lg-1">Cập nhật</th>
                                            <th class="col-lg-1">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $blg)
                                        <div class="modal fade" id="model{{$blg->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Thêm danh mục mới</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('admin.cate.update', ['id'=>$blg->id]) }}" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="form-group">
                                                                    <label for="">Tên danh mục</label>
                                                                    <input type="text" class="form-control" name="name" id="name" value="{{$blg->name}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Mô tả</label>
                                                                    <textarea class="form-control" name="explains" id="explains" rows="3">{{$blg->explains}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="sumbit" class="btn btn-primary">Update</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                    
                                                </div>
                                            </div>
                                        </div>
                                            <tr>
                                                <td class="col-lg-1">{{ $blg->id }}</td>
                                                <td class="col-lg-3">{{ $blg->name }}</td>
                                                <td class="col-lg-5">{{ $blg->explains }}</td>
                                                <td class="col-lg-1">{{ $blg->created_at }}</td>
                                                <td class="col-lg-1">{{ $blg->updated_at }}</td>
                                                <td class="col-lg-1">
                                                    <a href="#" data-toggle="modal" data-target="#model{{$blg->id}}"
                                                        class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                                                    <a href="{{ route('admin.cate.delete', ['id' => $blg->id]) }}"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
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
@endsection

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