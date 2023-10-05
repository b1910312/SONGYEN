<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class EventModel extends Model
{
    public function AllEvents()
    {
        $sql = DB::table('events')->get();
        return $sql;
    }
    public function OneEvent($id)
    {
        $sql = DB::table('events')->where('id', $id)->first();
        return $sql;
    }
    public function CountEvent()
    {
        $sql = DB::table('events')->count('id');
        return $sql;
    }
    public function addone($name, $timestart, $timeend, $place, $content, $contentdetails)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('events')->insert(
            ['name' => "$name", 'time_start' => "$timestart", 'time_end' => "$timeend", 'place' => "$place", 'content' => "$content", 'content_details' => "$contentdetails", 'created_at' => "$date"]
        );
        return $sql;
    }
    public function updateone($id,$name, $timestart, $timeend, $place, $content, $contentdetails)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('events')->where('id', "$id")->update(
            ['name' => "$name", 'time_start' => "$timestart", 'time_end' => "$timeend", 'place' => "$place", 'content' => "$content", 'content_details' => "$contentdetails", 'updated_at' => "$date"]
        );
        return $sql;
    }
    public function deleteone($id)
    {
        $sql = DB::table('events')->delete("$id");
        return $sql;
    }
    public function InsertGetId($name, $timestart, $timeend, $place,$content,$contentdetails)
    {
        $data = array(
            'name'=>$name,
            'time_start'=>$timestart,
            'time_end'=>$timeend,
            'place'=>$place,
            'content'=>$content,
            'content_details'=>$contentdetails,
        );
        $sql = DB::table('events')->insertGetId($data);
        return $sql;
    }

    public function EventHomePage()
    {
        $sql = DB::table('events')->where('homepage','1')->get();
        return $sql;
    }
}
