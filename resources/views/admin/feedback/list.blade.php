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
                                <h3 class="card-title text-bold">Danh sách liên hệ phản hồi
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
                                            <th class="col-lg-1">ID</th>
                                            <th class="col-lg-1">Khách hàng</th>
                                            <th class="col-lg-1">Enail</th>
                                            <th class="col-lg-2">Chủ đề</th>
                                            <th class="col-lg-3">Nội dung</th>
                                            <th class="col-lg-1">Trạng thái</th>
                                            <th class="col-lg-1">Tạo mới</th>
                                            <th class="col-lg-1">Phản hồi</th>
                                            <th class="col-lg-1">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedbacks as $fb)
                                            <tr>
                                                <td class="col-lg-1">{{ $fb->id }}</td>
                                                <td class="col-lg-1">{{ $fb->name }}</td>
                                                <td class="col-lg-1">{{ $fb->email }}</td>
                                                <td class="col-lg-2">{{ $fb->subject }}</td>
                                                <td class="col-lg-3">{{ $fb->content }}</td>
                                                <td class="col-lg-1">
                                                    @if ($fb->status == 1)
                                                        <p class="text-success text-bold">{{ _('đã phản hồi') }}</p>
                                                    @else
                                                        <p class="text-danger text-bold">{{ _('Chưa phản hồi') }}</p>
                                                    @endif
                                                </td>
                                                <td class="col-lg-1">{{ $fb->created_at }}</td>
                                                <td class="col-lg-1">{{ $fb->replied_at }}</td>
                                                <td class="col-lg-1">
                                                    @if ($fb->status == 0)
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#reply{{ $fb->id }}"><i
                                                                class="fa fa-arrow-left"></i></a>
                                                    @endif
                                                </td>
                                            </tr>


                                            <!-- Modal -->
                                            <div class="modal fade" id="reply{{ $fb->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Phản hồi khách hàng</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form
                                                            action="{{ route('admin.feedback.reply', ['id' => $fb->id]) }}"
                                                            method="GET">
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="form-group">
                                                                        <label for="">Tên Khách hàng</label>
                                                                        <input type="text" class="form-control"
                                                                            name="cus" id="cus"
                                                                            aria-describedby="helpId" placeholder=""
                                                                            value="{{ $fb->name }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Email khách hàng</label>
                                                                    <input type="text" class="form-control"
                                                                        name="cusemail" id="cusemail"
                                                                        aria-describedby="helpId" placeholder=""
                                                                        value="{{ $fb->email }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Chủ đề</label>
                                                                    <input type="text" class="form-control"
                                                                        name="subject" id="subject"
                                                                        aria-describedby="helpId" placeholder=""
                                                                        value="{{ $fb->subject }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nội dung phản hồi</label>
                                                                    <textarea class="form-control" name="message" id="message" rows="4">{{ $fb->content }}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Trả lời</label>
                                                                    <textarea class="form-control" name="reply" id="reply" rows="4"></textarea>
                                                                </div>
                                                                <input type="text" name="name" id="name"
                                                                    hidden value="{{ Auth::user()->name }}">
                                                                <input type="text" name="email" id="email"
                                                                    hidden value="{{ Auth::user()->email }}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Reply</button>
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