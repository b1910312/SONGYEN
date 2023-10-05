@extends('layouts.admin.admin')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Thêm sự kiện mới</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('admin.event.add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Tên sự kiện</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm</label>
                                        <input type="text" name="place" id="name" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày bắt đầu</label>
                                        <input type="date" name="timestart" id="name" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày kết thúc</label>
                                        <input type="date" name="timeend" id="name" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nội dung tóm tắt</label>
                                        <textarea class="form-control" maxlength="200" name="content" id="content" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nội dung chi tiết</label>
                                        <textarea id="summernote" name="contentdetails"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ảnh thumbnail</label> <br>
                                        <input type="file" class="form-control-file" name="thumbnail" id="thumbnail">
                                    </div>
                                    <div class="form-group" style="float: right">
                                        <button type="submit" class="btn btn-primary">Đăng tải</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    @endsection
