<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('about');
    }
//    public function about()
//    {
//        session('leng',$leng);
//        dd($leng);
//        App::setLocale($leng);
//        return redirect('/');
//    }
//    public function index() {
//        return view('user.index');
//    }
//    public function story() {
//        return view('user.story');
//    }
//    public function products() {
//        return view('user.products');
//    }
//    public function faq() {
//        return view('user.faqs');
//    }
//    public function contact() {
//        return view('user.contact');
//    }
}
