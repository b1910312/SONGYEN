<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class RateModel extends Model
{
    public function AllRate()
    {   
        $sql = DB::table('rates')->get();
        return $sql;
    }
    public function OneRate($id)
    {
        $sql = DB::table('rates')->where('id',$id)->first();
        return $sql;
    }
    public function CountRate()
    {
        $sql = DB::table('rates')->count('id');
        return $sql;
 
    }
    public function AvgRate($blog)
    {
        $sql = DB::table('rates')->where('blog',"$blog")->avg('number_rate');
        return $sql;
    }
    public function addone($blog,$user,$numberrate)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('rates')->insert(
            ['blog' => "$blog", 'user'=>"$user", 'number_rate'=>"$numberrate", 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('rates')->delete("$id");
        return $sql;
    }
}
