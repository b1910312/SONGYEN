<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    public function scopeSearch($query)
    {
        $key  = request('key');
        $qr = $query->where('name','like','%'.$key.'%');
        return $qr;
    }
}
