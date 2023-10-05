<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ImageModel extends Model
{
    public function GetImage($id)
    {
        $sql = DB::table('image')->where('post',"$id")->get();
        return $sql;
    }
}
