<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RoomModel extends Model
{
    public function GetAllRoom()
    {
        $sql = DB::table('room')->get();
        return $sql;
    }
    public function GetRoom($id)
    {
        $sql = DB::table('room')->where('id',"$id")->first();
        return $sql;
    }
}
