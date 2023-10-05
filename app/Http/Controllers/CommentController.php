<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CommentModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $BlogModel = new BlogModel();
        $UserModel = new UserModel();
        $CommentModel = new CommentModel();
        $Blog = $BlogModel->AllBlogs();
        $data['blogs'] = $Blog;
        $users = $UserModel->AllUser();
        $data['users'] = $users;
        $cmt = $CommentModel->AllComment();
        $data['comments'] = $cmt;
        return view('admin.blog.comment',$data);
    }
    public function addcomment(Request $request)
    {
        $blog = $request->id;
        $email = $request->email;
        $content = $request->comment_content;
        $CommentMode = new CommentModel();
        $UserModel = new UserModel();
        $user = $UserModel->OneAccount($email);
        $customer = $user->email;
        $CommentMode->addone($blog,$customer,$content);
        return Redirect()->back();
    }
    public function hidecomment()
    {
        $cmt = Request()->id;
        $CommentModel = new CommentModel();
        $CommentModel->hide($cmt);
        return Redirect()->back();

    }
    public function showcomment()
    {
        $cmt = Request()->id;
        $CommentModel = new CommentModel();
        $CommentModel->show($cmt);
        return Redirect()->back();

    }
    public function deletecomment()
    {
        $cmt = Request()->id;
        $CommentModel = new CommentModel();
        $CommentModel->deleteone($cmt);
        return Redirect()->back();

    }
    public function replycomment(Request $request)
    {
        $reply_id = $request->id;
        $blog = $request->blog_id;
        $email = $request->email;
        $content = $request->content;
        $CommentMode = new CommentModel();
        $UserModel = new UserModel();
        $user = $UserModel->OneAccount($email);
        $customer = $user->id;
        $CommentMode->reply($customer,$blog,$content,$reply_id);
        return Redirect()->back();
    }
}
