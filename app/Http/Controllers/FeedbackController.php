<?php

namespace App\Http\Controllers;

use App\Models\FeedbackModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class FeedbackController extends Controller
{
    public function index()
    {
        $FeedbackModel = new FeedbackModel();
        $Feedback = $FeedbackModel->AllFeebBack();
        $data['feedbacks'] = $Feedback;
        return view('admin.feedback.list',$data);
    }
    public function SendFeedBack(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $date = date('H:i:s d-m-Y' );
        $subject = $request->subject;
        $messages = $request->message;
        $FeedbackModel = new FeedbackModel();
        $FeedbackModel->addone($name,$email,$subject,$messages);
        Mail::send('emails.sendfb',['name'=>$name,'email'=>$email,'subject'=>$subject,'messages'=>$messages, 'date'=>$date],
        function ($emailsend) use($name,$email,$subject){
            $emailsend->from('SongYen.psy@gmail.com', 'Song Yến');
            $emailsend->to($email,$name);
            $emailsend->subject("[Website_contact_Form] ".$subject);

        });
        return Redirect()->back();

    }
    public function ReplyFeedBack(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $customer = $request->cus;
        $email = $request->email;
        $date = date('H:i:s d-m-Y' );
        $subject = $request->subject;
        $messages = $request->message;
        $reply = $request->reply;
        $customeremail = $request->cusemail;
        Mail::send('emails.replyfb',['customer'=>$customer,'replycontent'=>$reply,'name'=>$name,'email'=>$email,'subject'=>$subject,'messages'=>$messages, 'date'=>$date],function ($email) use ($customeremail,$customer,$subject){
            $email->to($customeremail,$customer)->subject('[Reply] '.$subject);
        });
        $FeedbackModel = new FeedbackModel();
        $FeedbackModel->done($id);
        return Redirect()->back();
    }
}
