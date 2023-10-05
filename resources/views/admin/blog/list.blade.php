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
                                <h3 class="card-title text-bold">Danh sách bài viết
                                    <a href="{{ route('admin.blog.new') }}" class="btn btn-primary">+</a>
                                </h3>
                                <div class="card-tools">

                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" id="myInput" class="form-control float-right"
                                            placeholder="Search" onkeyup="search()">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 840px;">
                                <table class="table table-head-fixed" id="myTable">
                                    <thead>
                                        <tr>
                                            <th class="col-lg-1">ID</th>
                                            <th class="col-lg-1">Tên bài viết</th>
                                            <th class="col-lg-3">Nội dung tóm tắt</th>
                                            <th class="col-lg-3">Nội dung chi tiết</th>
                                            <th class="col-lg-1">Danh mục</th>
                                            <th class="col-lg-1">Đăng tải</th>
                                            <th class="col-lg-1">Cập nhật</th>
                                            <th class="col-lg-1">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blg)
                                            <tr>
                                                <td class="col-lg-1">{{ $blg->id }}</td>
                                                <td class="col-lg-1">{{ $blg->name }}</td>
                                                <td class="col-lg-3">{{ $blg->content }}</td>
                                                <td class="col-lg-3"><div style="overflow-y: auto; max-height: 300px;">{!!$blg->content_details!!}</div></td>
                                                <td class="col-lg-1">{{ $blg->categories }}</td>
                                                <td class="col-lg-1">{{ $blg->created_at }}</td>
                                                <td class="col-lg-1">{{ $blg->updated_at }}</td>
                                                <td class="col-lg-1">
                                                    <a type="button" class="btn btn-primary " data-toggle="modal" data-target="#modelId{{$blg->id}}">
                                                        <i class="fa fa-image"></i>
                                                      </a>
                                                      
                                                      <!-- Modal -->
                                                      <div class="modal fade" id="modelId{{$blg->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                  <div class="modal-header">
                                                                      <h5 class="modal-title">{{$blg->name}}</h5>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <form action="{{ route('admin.updatethumbnail', ['post'=>$blg->id, 'type'=> '1']) }}" method="POST" enctype="multipart/form-data">
                                                                          @csrf
                                                                          <div class="form-group">
                                                                              <label for="">Thumbnail hiện tại</label> <br>
                                                                              @foreach ($ThumbNails as $item)
                                                                                  @if ($item->post == $blg->id && $item->typepost == 1)
                                                                                      <img class="img-fluid" src="{{ asset('uploads/thumbnail/'.$item->image) }}" alt="">
                                                                                  @endif
                                                                              @endforeach
                                                                          </div>
                                                                         <div class="form-group">
                                                                           <label for="">Ảnh thumbnail</label>
                                                                           <input type="file" class="form-control-file" name="thumbnail" id="thumbnail">
                                                                         </div>
                                                                         <div class="modal-footer">
                                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                          <button type="submit" class="btn btn-primary">Save</button>
                                                                      </div>
                                                                      </form>
                                                                  </div>
                                                                 
                                                              </div>
                                                          </div>
                                                      </div>
                                                    <a href="{{ route('admin.blog.edit', ['id'=>$blg->id]) }}" class="btn btn-warning"><i
                                                            class="fa fa-wrench"></i></a>
                                                    <a href="{{ route('admin.blog.delete', ['id'=>$blg->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
