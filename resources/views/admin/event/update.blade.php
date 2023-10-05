@extends('layouts.admin.admin')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Cập nhật sự kiện</h1>
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
                                <form action="{{ route('admin.event.update', ['id'=>$event->id]) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Tên sự kiện</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="{{$event->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa điểm tổ chức</label>
                                        <input type="text" name="place" id="place" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="{{$event->place}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày bắt đầu</label>
                                        <input type="date" name="timestart" id="timestart" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="{{$event->time_start}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày kết thúc</label>
                                        <input type="date" name="timeend" id="timeend" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="{{$event->time_end}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nội dung tóm tắt</label>
                                        <textarea class="form-control" maxlength="200" name="content" id="content" rows="3">{{$event->content}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="summernote" style="overflow-y: 200px; height: 300px;" name="contentdetails" >{{$event->content_details}}</textarea>
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
