<?php

namespace App\Http\Controllers\Api;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsContoller extends Controller
{
    public function index(){
      return News::all();
    }

}
