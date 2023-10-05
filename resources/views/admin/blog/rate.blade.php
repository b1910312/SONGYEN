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
                                <h3 class="card-title text-bold">Danh sách đánh giá
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
                            <div class="card-body table-responsive p-0" style="height: 860px;">
                                <table class="table table-head-fixed text-nowrap" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="col-md-3">Id</th>
                                            <th class="col-md-3">Bài viết</th>
                                            <th class="col-md-3">Người đánh giá</th>
                                            <th class="col-md-3">Số sao</th>
                                            <th class="col-md-3">Tạo mới</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rates as $rate)
                                            <tr>
                                                <td class="col-md-3">{{ $rate->id}}</td>
                                                <td class="col-md-3">
                                                    @foreach ($blogs as $blg)
                                                        @if ($blg->id == $rate->blog)
                                                            {{ $blg->name }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="col-md-3">
                                                    @foreach ($users as $blg)
                                                        @if ($blg->id == $rate->user)
                                                            {{ $blg->name}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td class="col-md-3">{{ $rate->number_rate }} <i class="fa fa-star text-yellow"></i></td>
                                                <td class="col-md-3">{{ $rate->created_at }}</td>
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