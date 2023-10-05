<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoriesModel extends Model
{
    public function AllCategories()
    {
        $sql = DB::table('categories')->get();
        return $sql;
    }
    public function OneCategories($id)
    {
        $sql = DB::table('categories')->where('id',$id)->first();
        return $sql;
    }
    public function CountCategories()
    {
        $sql = DB::table('categories')->count('id');
        return $sql;
    }
    public function addone($name,$explain)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('categories')->insert(
            ['name' => "$name", 'explains'=>"$explain", 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function updateone($id,$name,$explain)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('categories')->where('id',"$id")->update(
            ['name' => "$name", 'explains'=>"$explain", 'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('categories')->delete("$id");
        return $sql;
    }
}
