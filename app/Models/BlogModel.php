<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class BlogModel extends Model
{
    public function AllBlogs()
    {
        $sql = DB::table('blogs')->get();
        return $sql;
    }
    public function OneBlog($id)
    {
        $sql = DB::table('blogs')->where('id',$id)->first();
        return $sql;
    }
    public function CountBlog()
    {
        $sql = DB::table('blogs')->count('id');
        return $sql;
    }
    public function addone($name,$content,$contentdetails,$categrories)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('blogs')->insert(
            ['name' => "$name", 'content'=>"$content", 'content_details'=>"$contentdetails", 'categories'=>"$categrories", 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function InserGetId($name,$content,$contentdetails,$categrories)
    {
        
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('blogs')->insertGetId(
            ['name' => "$name", 'content'=>"$content", 'content_details'=>"$contentdetails", 'categories'=>"$categrories", 'created_at'=>"$date"]
        );
        return $sql;
    }
    public function updateone($id,$name,$content,$contentdetails,$categrories)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('blogs')->where('id',"$id")->update(
            ['name' => "$name", 'content'=>"$content", 'content_details'=>"$contentdetails", 'categories'=>"$categrories", 'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('blogs')->delete("$id");
        return $sql;
    }
}
