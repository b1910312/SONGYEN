<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ThumbnailModel extends Model
{
    public function AllThumbnail()
    {
        $sql = DB::table('thumbnail')->get();
        return $sql;
    }
    public function OneThumbnail($id,$type)
    {
        $sql = DB::table('thumbnail')->where('post',"$id")->where('typepost',"$type")->first();
        return $sql;
    }
    public function add($post,$type,$image)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('thumbnail')->insert(['post'=>"$post", 'typepost'=>"$type",'image'=>"$image",'created_at'=>"$date"]);
        return $sql;
    }
    public function updateone($post,$type,$image)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('thumbnail')->where('post',"$post")->where('typepost',$type)->update(['image'=>"$image",'updated_at'=>"$date"]);
        return $sql;
    }
    public function deleteblog($post)
    {
        $sql = DB::table('thumbnail')->where('$type','1')->delete("$post");
        return $sql;
    }
    public function deleteevent($post)
    {
        $sql = DB::table('thumbnail')->where('$type','2')->delete("$post");
        return $sql;
    }
}
