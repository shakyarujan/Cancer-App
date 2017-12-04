<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Image;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all()->toarray();
        return view('admin.news.displayNews', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.addEditNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('mainImg');
        $fileName = $image->getClientOriginalName();
        $fileExtension = $image->getClientOriginalExtension();
        $name = str_slug($fileName) . str_slug(str_random(5)) . '.' . $fileExtension;
            
        $destinationPath = public_path('/images/news/thumbnails');

        $img = Image::make($image->getRealPath());

        $img->resize(300, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$name);
        
        $destinationPath = public_path('/images/news');

        $image->move($destinationPath, $name);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));

       $news = new News([
          'title' => $request->get('title'),
          'slug' => strtolower($slug),
          'author' => $request->get('author'),
          'description' => $request->get('desc'),
          'date' => $request->get('date'),
          'content' => $request->get('content'),
          'status' => $request->get('status'),
          'homepage' => $request->get('homepage'),
          'image' => $name,
        ]);
       $news->save();

       return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editNews = News::find($id);
        return view('admin.news.addEditNews', compact('editNews','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editNews = News::find($id);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));
        
        $editNews->title = $request->get('title');
        $editNews->slug = $slug;
        $editNews->author = $request->get('author');
        $editNews->description = $request->get('desc');
        $editNews->content = $request->get('content');
        $editNews->date = $request->get('date');
        $editNews->status = $request->get('status');
        $editNews->homepage = $request->get('homepage');

        $editNews->save();
        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        File::delete('images/news/' . $news->image);
        File::delete('images/news/thumbnails/' . $news->image);
        $news->delete();
        return redirect('/admin/news');
    }
}
