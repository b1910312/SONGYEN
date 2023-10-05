<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CategoriesModel;
use App\Models\CommentModel;
use App\Models\CustomerModel;
use App\Models\EventModel;
use App\Models\FeedbackModel;
use App\Models\ImageModel;
use App\Models\PartnerModel;
use App\Models\RoomModel;
use App\Models\ThumbnailModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }
    public function profile()
    {
        $email = Request()->email;
        $CustomerModel = new CustomerModel();
        $Infor = $CustomerModel->getInfor($email);
        $UserModel = new UserModel();
        $Account = $UserModel->OneAccount($email);
        $data['Account'] = $Account;
        $data['Infor'] = $Infor;
        return view('user.proflie',$data);
    }
    public function about()
    {   
        $RoomModel = new RoomModel();
        $Rooms = $RoomModel->GetAllRoom();
        $data['Rooms'] = $Rooms;
        $CustomerModel = new CustomerModel();
        $Master = $CustomerModel->GetMaster();
        $data['Master'] = $Master;
        return view('user.about',$data);
    }
    public function blog()
    {
        $this->middleware('auth');
        $BlogModel = new BlogModel();
        $CateModel = new CategoriesModel();
        $Blogs = $BlogModel->AllBlogs();
        $ThumbnailModel = new ThumbnailModel();
        $Thumbnail = $ThumbnailModel->AllThumbnail();
        $Cates = $CateModel->AllCategories();
        $data['Thumbnails'] = $Thumbnail;
        $data['Blogs'] = $Blogs;
        $data['Cates'] = $Cates;
        return view('user.blog', $data);
    }
    public function event()
    {
        $EventModel = new EventModel();
        $Events = $EventModel->AllEvents();
        $ThumbnailModel = new ThumbnailModel();
        $Thumbnail = $ThumbnailModel->AllThumbnail();
        $data['Thumbnails'] = $Thumbnail;
        $data['Events'] = $Events;
        return view('user.event',$data);
    }
    public function contact()
    {
        $FeedbackModel = new FeedbackModel();
        $CompanyInfo = $FeedbackModel->CompanyInfor();
        $data['Infors'] = $CompanyInfo;
        return view('user.contact',$data);
    }
    public function blogdetails(Request $request)
    {
        $BlogModel = new BlogModel();
        $CateModel = new CategoriesModel();
        $CommentModel = new CommentModel();
        $UserModel = new CustomerModel();
        $id_blog = $request->id;
        $users = $UserModel->AllUser();
        $Blog = $BlogModel->OneBlog($id_blog);
        $Cates = $CateModel->AllCategories();
        $ThumbnailModel = new ThumbnailModel();
        $Thumbnail = $ThumbnailModel->OneThumbnail($id_blog,1);
        $comments = $CommentModel->ListComment($id_blog);
        $replycomment = $CommentModel->RecommentList($id_blog);
        $CountComment = $CommentModel->CountBlogComment($id_blog);
        $data['countcomment'] = $CountComment;
        $data['Thumbnail'] = $Thumbnail;
        $data['blog'] = $Blog;
        $data['cates'] = $Cates;
        $data['comments'] = $comments;
        $data['Recomments'] = $replycomment;
        $data['countcmt'] = $CountComment;
        $data['users'] = $users;
        return view('user.blogdetails',$data);
    }
    public function eventdetails(Request $request)
    {
        $EventModel = new EventModel();
        $CommentModel = new CommentModel();
        $UserModel = new CustomerModel();
        $ThumbnailModel = new ThumbnailModel();

        $id_blog = $request->id;

        $users = $UserModel->AllUser();
        $Events = $EventModel->OneEvent($id_blog);
        $Thumbnail = $ThumbnailModel->OneThumbnail($id_blog,2);
        $comments = $CommentModel->ListComment($id_blog);
        $replycomment = $CommentModel->RecommentList($id_blog);
        $CountComment = $CommentModel->CountBlogComment($id_blog);

        $data['countcomment'] = $CountComment;
        $data['Thumbnail'] = $Thumbnail;
        $data['Events'] = $Events;
        $data['comments'] = $comments;
        $data['Recomments'] = $replycomment;
        $data['countcmt'] = $CountComment;
        $data['users'] = $users;
        return view('user.eventdetails',$data);
    }
    public function servicedetails()
    {
        return view('user.servicedetails');
    }
    public function mailtocus()
    {
        Mail::send('view',['name'=>'test name for email'],function ($email){
            $email->to(request()->email,request()->name);
        });
    }
}
