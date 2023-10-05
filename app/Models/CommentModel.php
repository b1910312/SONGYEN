<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CommentModel extends Model
{
    public function AllComment()
    {
        $sql = DB::table('comments')->get();
        return $sql;
    }
    public function ListComment($blog)
    {
        $sql = DB::table('comments')->where('blog',$blog)->where('reply_id',0)->where('status',1)->get();
        return $sql;
    }
    public function RecommentList($blog)
    {
        $sql = DB::table('comments')->where('blog',$blog)->get();
        return $sql;
    }
    public function BlogComment($id)
    {
        $sql = DB::table('comments')->where('blog',$id)->first();
        return $sql;
    }
    public function CountComment()
    {
        $sql = DB::table('comments')->count('id');
        return $sql;
    }
    public function CountUserComment($id)
    {
        $sql = DB::table('comments')->where('id',$id)->count('user');
        return $sql;
    }
    public function CountBLogComment($id)
    {
        $sql = DB::table('comments')->where('blog',$id)->count('id');
        return $sql;
    }
    public function addone($user,$blog,$content)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('comments')->insert(
            ['user' => "$user",'blog'=>$blog, 'content'=>"$content", 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function reply($user,$blog,$content,$replyid)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('comments')->insert(
            ['user' => "$user",'blog'=>$blog, 'content'=>"$content", 'reply_id'=>"$replyid", 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function updateone($id,$user,$blog,$content)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('comments')->where('id',"$id")->update(
            ['user' => "$user",'blog'=>$blog, 'content'=>"$content", 'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('comments')->delete("$id");
        return $sql;
    }
    public function hide($id)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('comments')->where('id',"$id")->update(['status'=>0, 'updated_at'=>"$date"]);
        return $sql;
    }
    public function show($id)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('comments')->where('id',"$id")->update(['status'=>1,'updated_at'=>"$date"]);
        return $sql;
    }
}
