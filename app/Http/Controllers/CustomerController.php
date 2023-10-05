<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class CustomerController extends Controller
{
    public function index()
    {
        $CustomerModel = new CustomerModel();
        $User = $CustomerModel->AllUser();
        $UsersModel = new UserModel();
        $Customers = $UsersModel->AllCustomer();
        $data['Customers'] = $Customers;
        $data['Users'] = $User;
        return view('admin.user.customer', $data);
    }
    public function add(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $img =  $_FILES['image']['name'];
        $tagert_img =   'uploads/avatar/'  . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $tagert_img);
        $birthday = $request->birth;
        $birth = date("Y-m-d", strtotime($birthday));
        $sex = $request->sex;
        $phone = $request->phone;
        $address = $request->address;
        $password = $request->password;
        $role = $request->role;
        $CustomerModel = new CustomerModel();
        $UsersModel = new UserModel();
        $UsersModel->AddAccount($name, $email, $password, $role);
        $CustomerModel->addone($name, $img, $birth, $sex, $phone, $address, $email);
        return redirect()->back();
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $birthday = $request->birth;
        $birth = date("Y-m-d", strtotime($birthday));
        $sex = $request->sex;
        $phone = $request->phone;
        $address = $request->address;
        $CustomerModel = new CustomerModel();
        $UsersModel = new UserModel();
        $UsersModel->UpdateAccount($name, $email);
        $CustomerModel->updateone($id, $name, $birth, $sex, $phone, $address);
        return redirect()->back();
    }
    public function updateimage(Request $request)
    {
        $id = $request->id;
        $img =  $_FILES['image']['name'];
        $tagert_img =   'uploads/avatar/'  . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $tagert_img);
        $CustomerModel = new CustomerModel();
        $CustomerModel->updateimage($id,$img);
        return redirect()->back();
    }
    function updaterole( Request $request)
    {
        $email = $request->email;
        $UsersModel = new UserModel();
        $UsersModel->SetAdmin($email);
        return redirect()->back();
    }
    public function delete(Request $request)
    {
        $CustomerModel = new CustomerModel();
        $id = $request->id;
        $CustomerModel->deleteone($id);
        return redirect()->back();
    }
}
