<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Image;
use File;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all()->toarray();
        return view('admin.gallery.displayGallery', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.addEditGallery');
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
            
        $destinationPath = public_path('/images/gallery/thumbnails');

        $img = Image::make($image->getRealPath());

        $img->resize(600, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$name);
        
        $destinationPath = public_path('/images/gallery');

        $image->move($destinationPath, $name);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));

       $gallery = new Gallery([
          'title' => $request->get('title'),
          'slug' => strtolower($slug),
          'description' => $request->get('desc'),
          'content' => $request->get('content'),
          'status' => $request->get('status'),
          'homepage' => $request->get('homepage'),
          'image' => $name,
        ]);
       $gallery->save();

       return redirect('/admin/gallery');
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
        $editGallery = Gallery::find($id);
        return view('admin.gallery.addEditGallery', compact('editGallery','id'));
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
        $editGallery = Gallery::find($id);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));
        
        $editGallery->title = $request->get('title');
        $editGallery->slug = $slug;
        $editGallery->description = $request->get('desc');
        $editGallery->content = $request->get('content');
        $editGallery->status = $request->get('status');
        $editGallery->homepage = $request->get('homepage');

        $editGallery->save();
        return redirect('/admin/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Article::find($id);
        File::delete('images/gallery/' . $gallery->image);
        File::delete('images/gallery/thumbnails/' . $gallery->image);
        $gallery->delete();
        return redirect('/admin/gallery');
    }
}
