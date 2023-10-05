@extends('layouts.admin.admin')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Thêm bài viết mới</h1>
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
                                <form action="{{ route('admin.blog.add') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Tên bài viết</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Danh mục bài viết</label>
                                        <select class="form-control" name="cate" id="cate">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nội dung tóm tắt</label>
                                        <textarea class="form-control" maxlength="200" name="content" id="content" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ảnh thumbnail</label> <br>
                                        <input type="file" name="thumbnail" id="thumbnail">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="summernote" name="contentdetails"></textarea>
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
