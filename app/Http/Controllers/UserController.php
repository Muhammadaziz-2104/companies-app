<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all($name=null) {
        $ism = $name;
        $users = ['aziz','aaa','bbbb'];

        return view('user.foruser', [
            'username' => $ism,
            'users' => $users
        ]);
    }
    public function show() {
        return view('user.show');
    }
}
