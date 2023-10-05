@extends('layouts.admin.admin')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Cập nhật bài viết mới</h1>
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
                                <form action="{{ route('admin.blog.update', ['id'=>$blog->id]) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Tên bài viết</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="{{$blog->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Danh mục bài viết</label>
                                        <select class="form-control" name="cate" id="cate">
                                            <option 
                                            @if ($blog->categories == 1)
                                                {{'selected'}}                                                
                                            @endif 
                                            value="1">1</option>
                                            <option 
                                            @if ($blog->categories == 2)
                                                {{'selected'}}                                                
                                            @endif 
                                            value="2">2</option>
                                            <option
                                            @if ($blog->categories == 3)
                                                {{'selected'}}                                                
                                            @endif 
                                            value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nội dung tóm tắt</label>
                                        <textarea class="form-control" maxlength="200" name="content" id="content" rows="3">{{$blog->content}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="summernote" style="overflow-y: 200px; height: 300px;" name="contentdetails" >{{$blog->content_details}}</textarea>
                                    </div>
                                    <div class="form-group" style="float: right">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
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
