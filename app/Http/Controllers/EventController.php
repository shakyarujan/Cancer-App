<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use Image;
use File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all()->toarray();
        return view('admin.events.displayEvent', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.addEditEvent');
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
            
        $destinationPath = public_path('/images/events/thumbnails');

        $img = Image::make($image->getRealPath());

        $img->resize(300, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$name);
        
        $destinationPath = public_path('/images/events');

        $image->move($destinationPath, $name);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));

       $events = new Events([
          'title' => $request->get('title'),
          'slug' => strtolower($slug),
          'author' => $request->get('author'),
          'description' => $request->get('desc'),
          'st_date' => $request->get('st_date'),
          'end_date' => $request->get('end_date'),
          'content' => $request->get('content'),
          'status' => $request->get('status'),
          'homepage' => $request->get('homepage'),
          'image' => $name,
        ]);
       $events->save();

       return redirect('/admin/events');
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
        $editEvent = Events::find($id);
        return view('admin.events.addEditEvent', compact('editEvent','id'));
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
        $editEvent = Events::find($id);

        /*for slug*/
        $slug = str_replace(" ", "-", $request->get('title'));
        
        $editEvent->title = $request->get('title');
        $editEvent->slug = $slug;
        $editEvent->author = $request->get('author');
        $editEvent->description = $request->get('desc');
        $editEvent->content = $request->get('content');
        $editEvent->st_date = $request->get('st_date');
        $editEvent->end_date = $request->get('end_date');
        $editEvent->status = $request->get('status');
        $editEvent->homepage = $request->get('homepage');

        $editEvent->save();
        return redirect('/admin/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Events::find($id);
        File::delete('images/events/' . $events->image);
        File::delete('images/events/thumbnails/' . $events->image);
        $events->delete();
        return redirect('/admin/events');
    }
}
