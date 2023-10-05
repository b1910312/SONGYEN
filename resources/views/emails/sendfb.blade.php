@extends('emails.email')
@section('content')
    <div>
        <h3>Xin chào Song Yến!!</h3>
    </div>
    <br>
    <div class="text-left">
        <p>Tôi tên là <b>
            {{$name}} </b>
        <p>Email của tôi là: <b>
            {{$email}}
        </b></p>
        <p>Tôi muốn liên hệ với các bạn về vấn đề sau:<b>
            {{$subject}}
        </b></p>
        <p>với nội dung cụ thể như sau: <b>
            {{$messages}}
        </b></p>

        <p>Tôi hi vọng sẽ sớm nhận được phản hồi từ các bạn</p>
        <p>Ngày phản hồi: <b>
            {{$date}}
        </b></p>
    </div>
    </div>
@endsection
