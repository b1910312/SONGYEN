<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use App\Models\ThumbnailModel;
use function Ramsey\Uuid\v1;

class BlogController extends Controller
{
    public function index()
    {
        $BlogModel = new BlogModel();
        $Blogs = $BlogModel->AllBlogs();
        $ThumbnailModel = new ThumbnailModel();
        $Thumbnails = $ThumbnailModel->AllThumbnail();
        $data['ThumbNails'] = $Thumbnails;
        $data['blogs'] = $Blogs;
        return view('admin.blog.list',$data);
    }
    public function new()
    {
        return view('admin.blog.new');
    }
    public function edit(Request $request)
    {
        $BlogId = $request->id;
        $BlogModel = new BlogModel();
        $Blog = $BlogModel->OneBlog($BlogId);
        $data['blog'] = $Blog;
        return view('admin.blog.update',$data);
    }
    public function add(Request $request)
    {
        $name = $request->name;
        $cate = $request->cate;
        $content = $request->content;
        $contentdetails  = $request->contentdetails;
        $BlogModel = new BlogModel();
        $img =  $_FILES['thumbnail']['name'];
        $tagert_img =   'uploads/thumbnail/'  . basename($_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $tagert_img);
        $BlogModel->addone($name,$content,$contentdetails,$cate);
        $id = $BlogModel->InserGetId($name,$content,$contentdetails,$cate);
        return redirect()->route('admin.addthumbnail',['post'=>$id,'type'=>1 ,'image'=>$img]);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $cate = $request->cate;
        $content = $request->content;
        $contentdetails  = $request->contentdetails;
        $BlogModel = new BlogModel();
        $BlogModel->updateone($id,$name,$content,$contentdetails,$cate);
        return redirect()->route('admin.blog.home');
    }
    public function delete( Request $request)
    {
        $id = $request->id;
        $BlogModel = new BlogModel();
        $BlogModel->deleteone($id);
        return redirect()->back();
    }
}
