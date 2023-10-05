@extends('email.email')
@section('content')
    <div>
        <h3>Xin chào {{$customer}}!!</h3>
    </div>
    <br>
    <div class="text-left">
        <p>Tôi tên là <b>{{$name}}</b>, đại diện Doanh nghiệp tư vấn và đào tạo Song Yến</p>
        <p>Email của tôi là: <b>{{$email}}</b></p>
        <p>Tôi đã tiếp nhận phản hồi của bạn về vấn đề <b>{{$subject}}</b></p>
        <p>với nội dung cụ thể như sau: <b>{{$messages}}</b></p>
        <p>Sau khi tiếp nhận và làm rõ vấn đề trên tôi xin đại diện doanh nghiệp trả lời với bạn như sau: <br>
            <b>{{$replycontent}}</b>
        </p>
        <p>Cảm ơn các bạn đã phản hồi kịp thời cho chúng tôi, chúng tôi hi vọng bạn sẽ đồng hành cùng Song Yến trong thời
            gian sắp tới</p>
        <p>Ngày phản hồi: <b>{{$date}}</b></p>
    </div>
    </div>
@endsection
