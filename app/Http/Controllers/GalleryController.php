<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class GalleryController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::orderBy('created_at', 'desc')->paginate(10);
        return view('backEnd.gallery.manage', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:70',
            'status' => 'required|integer|Boolean',
            'image' => 'required|image',
        ]);
        $gallery = new Gallery();
        
        if($request->has('image'))
        {
         $path = $request->file('image')->store('gallery');  
         $gallery->title = $request->title;
         $gallery->status = $request->status;
         $gallery->image = $path;
         $gallery->save();
         Toastr::success('Create Successfully!', 'Notification');
        return redirect(route('gallery.manage'));      
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request)
    {
        $gallery = Gallery::findOrFail($request->id);

        $gallery->status = $request->status;
        $gallery->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('gallery.manage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('backEnd.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:70',
            'status' => 'required|integer|Boolean',
        ]);
        $gallery = Gallery::findOrFail($id);
        
        if($request->has('image'))
        {
        if (file_exists(storage_path("app/public/{$gallery->image}")))
        {
            unlink(storage_path("app/public/{$gallery->image}"));
        } 
         $path = $request->file('image')->store('gallery');  
         $gallery->title = $request->title;
         $gallery->status = $request->status;
         $gallery->image = $path;
         $gallery->save();
         Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('gallery.manage'));      
        }
         $gallery->title = $request->title;
         $gallery->status = $request->status;
         $gallery->save();
         Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('gallery.manage')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        
        if (file_exists(storage_path("app/public/{$gallery->image}")))
        {
           unlink(storage_path("app/public/{$gallery->image}"));
            gallery::findOrFail($id)->delete();
        }
        Toastr::success('Delete Successfully!', 'Notification');
        return redirect(route('gallery.manage'));
    }
}
