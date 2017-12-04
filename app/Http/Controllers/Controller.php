<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Article;
use App\News;
use App\Events;
use App\Gallery;
use DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function admin(){
    	return view('admin.admin');
    }

    public function welcome(){
        $article = DB::table('articles')->where('homepage', '1')->first();
        $news = DB::table('news')->skip(0)->take(3)->get();
        $events = DB::table('events')->skip(0)->take(3)->get();
        $galleries = DB::table('galleries')->skip(0)->take(3)->get();
    	return view('web.welcome', compact('article','news','events','galleries'));
    }

    public function article($slug){
        $article = DB::table('articles')->where('slug', $slug)->first();
    	return view('web.article', compact('article'));
    }
    public function news($slug){
        $news = DB::table('news')->where('slug', $slug)->first();
    	return view('web.news', compact('news'));
    }
    public function event($slug){
        $events = DB::table('events')->where('slug', $slug)->first();
        return view('web.event', compact('events'));
    }
    public function galleries(){
        $galleries = Gallery::all()->toarray();
    	return view('web.gallery', compact('galleries'));
    }
    public function gallery($slug){
        $gallery = DB::table('galleries')->where('slug', $slug)->first();
        return view('web.gallery', compact('gallery'));
    }
    public function contact(){
        return view('web.contact');
    }
}
