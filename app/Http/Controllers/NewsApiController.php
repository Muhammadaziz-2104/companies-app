<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\NewsResource;

class NewsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = News::all();
        return new NewsResource($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->name = $request['name'];
        $news->photo = $request['photo'];
        $news->information = $request['information'];
        $news->status = $request['status'];
        $news->save();
        return 'xammasi yaxshi ishlayabti sorov joylandi va qabul qilindi bazaga tushti';

    }

    /**
     * Display the specified resource.
     */
    public function show(News $newsapi)
    {
            return new NewsResource($newsapi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $newsapi)
    {

//        dd($newsapi['information']);
        $newsapi -> update([
            'name' => $request['name'],
            'information' => $request['information'],
            'photo' => $request['photo'],
            'status' => $request['status']
        ]);
        return 'ozgartirish mufaqiyatli amalga oshirildi';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $newsapi)
    {
        $newsapi->delete();
        return  "ochirildi";
    }
}
