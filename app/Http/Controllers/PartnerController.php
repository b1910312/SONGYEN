<?php

namespace App\Http\Controllers;

use App\Models\PartnerModel;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $PartnerModel = new PartnerModel();
        $Partners = $PartnerModel->AllPartners();
        $data['partners'] = $Partners;
        return view('admin.partner.list',$data);
    }
    public function add(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $img =  $_FILES['image']['name'];
        $tagert_img =   'uploads/partner/'  . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $tagert_img);
        $phone = $request->phone;
        $address = $request->address;
        $note = $request->note;
        $PartnerModel = new PartnerModel();
        $PartnerModel->addone($name,$img,$email,$phone,$address,$note);
        return redirect()->back();
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $note = $request->note;
        $PartnerModel = new PartnerModel();
        $PartnerModel->updateone($id,$name,$email,$phone,$address,$note);
        return redirect()->back();
    }
    public function updateimage(Request $request)
    {
        $id = $request->id;
        $img =  $_FILES['image']['name'];
        $tagert_img =   'uploads/partner/'  . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $tagert_img);
        $PartnerModel = new PartnerModel();
        $PartnerModel->updateimage($id,$img);
        return redirect()->back();
    }
    public function delete(Request $request)
    {
        $PartnerModel = new PartnerModel();
        $id = $request->id;
        $PartnerModel->deleteone($id);
        return redirect()->back();
    }
}
