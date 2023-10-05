<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ApiController extends Controller
{
    public function ajaxSearch()
    {
        $data  = blogs::search()->get();
        return $data;
    }

}
