<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class FeedbackModel extends Model
{
    public function CompanyInfor()
    {
        $sql = DB::table('companyinfor')->get();
        return $sql;
    }
    public function AllFeebBack()
    {
        $sql = DB::table('FeedBacks')->get();
        return $sql;
    }
    public function OneFeebBack($id)
    {
        $sql = DB::table('FeedBacks')->where('id',$id)->first();
        return $sql;
    }
    public function CountFeedback()
    {
        $sql = DB::table('feedbacks')->count('id');
        return $sql;
    }
    public function addone($name,$email,$subject,$content)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('FeedBacks')->insert(
            ['name' => "$name", 'email'=>"$email",'subject'=>"$subject",'content'=>"$content",'created_at'=>"$date"]
        );
        return $sql;
    }
    public function updateone($id,$name,$email,$subject,$content)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('FeedBacks')->where('id',"$id")->update(
            ['name' => "$name", 'email'=>"$email",'subject'=>"$subject",'content'=>"$content",'updated_at'=>"$date"]
        );
        return $sql;
    }
    public function done($id)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('FeedBacks')->where('id',"$id")->update(['status'=>1,'replied_at'=>"$date"]);
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('FeedBacks')->delete("$id");
        return $sql;
    }
}
