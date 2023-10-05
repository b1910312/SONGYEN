@extends('layouts.admin.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-bold">Danh sách bình luận</h3>
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
                            <div class="card-body table-responsive p-0" style="height: 860px;">
                                <table class="table table-head-fixed text-nowrap" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1">ID</th>
                                            <th class="col-lg-2">Người dùng</th>
                                            <th class="col-lg-2">Bài viết</th>
                                            <th class="col-lg-2">Nội dung</th>
                                            <th class="col-lg-1">Trạng thái</th>
                                            <th class="col-lg-1">Reply_id</th>
                                            <th class="col-lg-1">Tạo mới</th>
                                            <th class="col-lg-1">Cập nhật</th>
                                            <th class="col-lg-2">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $cmt)
                                            <tr>
                                                <td class="col-lg-1">{{ $cmt->id }}</td>
                                                <td class="col-lg-2">
                                                    @foreach ($users as $us)
                                                        @if ($us->id == $cmt->user)
                                                            {{ $us->name }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="col-lg-2">
                                                    @foreach ($blogs as $us)
                                                        @if ($us->id == $cmt->blog)
                                                            {{ $us->name }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="col-lg-2">{{ $cmt->content }}</td>
                                                <td class="col-lg-1">
                                                    @if ($cmt->status == 1)
                                                        {{_('đang hiển thị')}}
                                                    @else
                                                        {{_('đã ẩn')}}
                                                    @endif
                                                </td>
                                                <td class="col-lg-1">{{ $cmt->reply_id }}</td>
                                                <td class="col-lg-1">{{ $cmt->created_at }}</td>
                                                <td class="col-lg-1">{{ $cmt->updated_at }}</td>
                                                <td class="col-lg-2">
                                                    @if ($cmt->status == 1)
                                                        <a href="{{ route('admin.comment.hide', ['id'=>$cmt->id]) }}" class="btn btn-secondary"><i
                                                                class="fa fa-eye-slash"></i></a>
                                                    @else
                                                        <a href="{{ route('admin.comment.show', ['id'=>$cmt->id]) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                    @endif
                                                    <a href="{{ route('admin.comment.delete', ['id'=>$cmt->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
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