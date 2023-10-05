<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\RateModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index()
    {
        $UserModel = new UserModel();
        $BlogModel = new BlogModel();
        $RateModel = new RateModel();
        $Rate = $RateModel->AllRate();
        $User = $UserModel->AllCustomer();
        $Blog = $BlogModel->AllBlogs();
        $data['users'] = $User;
        $data['blogs'] = $Blog;
        $data['rates'] = $Rate;
        return view('admin.blog.rate',$data);
    }
}
