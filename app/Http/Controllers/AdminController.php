<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CategoriesModel;
use App\Models\CommentModel;
use App\Models\CustomerModel;
use App\Models\EventModel;
use App\Models\FeedbackModel;
use App\Models\PartnerModel;
use App\Models\RateModel;
use App\Models\ThumbnailModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index()
    {
        $blogmodel = new BlogModel();
        $usermodel = new UserModel();
        $ratemodel = new RateModel();
        $partnermodel = new PartnerModel();
        $feedbackmodel = new FeedbackModel();
        $categoriesmodel = new CategoriesModel();
        $eventmodel = new EventModel();
        $commentmodel = new CommentModel();
        $customer = new CustomerModel();
        $eventmodel = new EventModel();
        $event = $eventmodel->CountEvent();
        $partners = $partnermodel->CountPartner();
        $users = $usermodel->CountCustomer();
        $member = $usermodel->CountUser();
        $blogs = $blogmodel->CountBlog();
        $rates = $ratemodel->CountRate();
        $feedback = $feedbackmodel->CountFeedback();
        $comment = $commentmodel->CountComment();
        $categories = $categoriesmodel->CountCategories();
        $event = $eventmodel->CountEvent();
        $data['events'] = $event;
        $data['feedbacks'] = $feedback;
        $data['comments'] = $comment;
        $data['categories'] = $categories;
        $data['partners'] = $partners;
        $data['rates'] = $rates;
        $data['blogs'] = $blogs;
        $data['users'] = $users;
        $data['events'] = $event;
        $data['members']= $member;
        return view('admin.index',$data);
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
        return view('admin.proflie',$data);
    }
    public function addThumbnail(Request $request)
    {
        $id = $request->post;
        $type = $request->type;
        $image = $request->image;
        $ThumbnailModel = new ThumbnailModel();
        $ThumbnailModel->add($id,$type,$image);
        return redirect()->route('admin.event.home');
    }
    public function updateThumdnail($post,$type)
    {
        $ThumbnailModel = new ThumbnailModel();
        $img =  $_FILES['thumbnail']['name'];
        $tagert_img =   'uploads/thumbnail/'  . basename($_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $tagert_img);
        $ThumbnailModel->updateone($post,$type,$img);
        if($type == 1){
            return redirect()->route('admin.blog.home');
        }
        else{
            return redirect()->route('admin.event.home');
        }
    }

    public function search()
    {
        return view('admin.search');
    }
    public function decentralization()
    {
        return view('admin.user.decentralization');
    }
    public function statistics()
    {
        return view('admin.statistics.list');
    }
}
