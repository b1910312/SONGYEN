<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CustomerModel extends Model
{
    public function AllUser()
    {   
        $sql = DB::table('infors')->get();
        return $sql;
    }
    public function OneCustomer($id)
    {
        $sql = DB::table('infors')->where('id',$id)->first();
        return $sql;
    }
    public function GetMaster()
    {
        $sql = DB::table('infors')->where('master',"1")->orWhere("master","2")->get();
        return $sql;
    }
    public function getInfor($email)
    {
        $sql = DB::table('infors')->where('email',"$email")->first();
        return $sql;
    }
    public function addone($name,$image,$birth,$sex,$phone,$address,$email)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('infors')->insert(
            ['name' => "$name", 'birth'=>"$birth",'image'=>"$image", 'sex'=>"$sex", 'phone'=>"$phone",'address'=>"$address",'email'=>"$email", 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function updateone($id,$name,$birth,$sex,$phone,$address)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('infors')->where('id',"$id")->update(
            ['name' => "$name", 'birth'=>"$birth", 'sex'=>"$sex", 'phone'=>"$phone",'address'=>"$address", 'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function updateimage($id,$img)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('infors')->where('id',"$id")->update(
            ['image' => "$img", 'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('infors')->delete("$id");
        return $sql;
    }
    
}
