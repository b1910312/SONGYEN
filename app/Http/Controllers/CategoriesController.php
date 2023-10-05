<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $CategoriesModel = new CategoriesModel();
        $Categories = $CategoriesModel->AllCategories();
        $data['categories'] = $Categories;
        return view('admin.blog.cate', $data);
    }
    public function add(Request $request)
    {
        $name = $request->name;
        $explains = $request->explains;
        $CategoriesModel = new CategoriesModel();
        $CategoriesModel->addone($name,$explains);
        return redirect()->back();
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $explains = $request->explains;
        $CategoriesModel = new CategoriesModel();
        $CategoriesModel->updateone($id,$name,$explains);
        return redirect()->back();
    }
        public function delete(Request $request)
        {
            $CategoriesModel = new CategoriesModel();
            $id = $request->id;
            $CategoriesModel->deleteone($id);
            return redirect()->back();
        }    
}
