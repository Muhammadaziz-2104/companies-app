<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function aindex(){
        return view('adminDashboart.index');
    }
    public function abutton(){
        return view('adminDashboart.ui-button');
    }
    public function aalert(){
        return view('adminDashboart.ui-alert');
    }
    public function log_out(){
        return view('user.index');
    }
}
