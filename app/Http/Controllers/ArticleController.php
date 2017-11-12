<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Image;
use File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->toarray();
        return view('admin.article.displayArticle', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.addEditArticle');
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
            
        $destinationPath = public_path('/images/article/thumbnails');

        $img = Image::make($image->getRealPath());

        $img->resize(300, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$name);
        
        $destinationPath = public_path('/images/article');

        $image->move($destinationPath, $name);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));

       $article = new Article([
          'title' => $request->get('title'),
          'slug' => strtolower($slug),
          'description' => $request->get('desc'),
          'content' => $request->get('content'),
          'status' => $request->get('status'),
          'homepage' => $request->get('homepage'),
          'image' => $name,
        ]);
       $article->save();

       return redirect('/admin/article');
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
        $editArticle = Article::find($id);
        return view('admin.article.addEditArticle', compact('editArticle','id'));
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
        $editArticle = Article::find($id);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));
        
        $editArticle->title = $request->get('title');
        $editArticle->slug = $slug;
        $editArticle->description = $request->get('desc');
        $editArticle->content = $request->get('content');
        $editArticle->status = $request->get('status');
        $editArticle->homepage = $request->get('homepage');

        $editArticle->save();
        return redirect('/admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        File::delete('images/article/' . $article->image);
        File::delete('images/article/thumbnails/' . $article->image);
        $article->delete();
        return redirect('/admin/article');

    }



    /* controller for ajax */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function ajaxArticle(Request $request)
    {
        if($request->get('type') == "imgUpload"){

            
        }
    }
}
