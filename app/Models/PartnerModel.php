<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class PartnerModel extends Model
{
    public function AllPartners()
    {
        $sql = DB::table('Partners')->get();
        return $sql;
    }
    public function OnePartners($id)
    {
        $sql = DB::table('Partners')->where('id',$id)->first();
        return $sql;
    }
    public function CountPartner()
    {
        $sql = DB::table('partners')->count('id');
        return $sql;
    }
    public function addone($name,$image,$email,$phone,$address,$note)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('Partners')->insert(
            ['name' => "$name", 'image'=>"$image", 'email'=>$email,'phone'=>$phone,'address'=>$address,'note'=>$note, 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function updateone($id,$name,$email,$phone,$address,$note)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('Partners')->where('id',"$id")->update(
            ['name' => "$name", 'email'=>$email,'phone'=>$phone,'address'=>$address,'note'=>$note, 'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function updateimage($id,$img)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('Partners')->where('id',"$id")->update(
            ['image' => "$img", 'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('Partners')->delete("$id");
        return $sql;
    }
}
