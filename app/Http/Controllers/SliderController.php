<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class SliderController extends Controller
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
        $sliders = slider::orderBy('created_at', 'desc')->paginate(10);

        return view('backEnd.slider.manage', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.slider.create');
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
            'slider_name' => 'required|string|max:30',
            'slider_title' => 'required|string|max:150',
            'slider_subtitle' => 'required|string|max:150',
            'slider_image' => 'required|image',
        ]);
        
        if($request->has('slider_image'))
        {
         $path = $request->file('slider_image')->store('slider');        
        }
        $slider = new slider();
        $slider->slider_name = $request->slider_name;
        $slider->slider_title = $request->slider_title;
        $slider->slider_subtitle = $request->slider_subtitle;
        $slider->status = $request->status;
        $slider->image = $path;
        $slider->save();
        Toastr::success('Create Successfully!', 'Notification');
        return redirect(route('slider.manage'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $slider = slider::findOrFail($id);
        $slider->status = $request->status;
        $slider->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('slider.manage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = slider::findOrFail($id);
        return view('backEnd.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'slider_name' => 'required|string|max:30',
            'slider_title' => 'required|string|max:150',
            'slider_subtitle' => 'required|string|max:150',
            'status' => 'required|Boolean',
        ]);
        
        $slider = slider::findOrFail($id);
        
        if($request->has('slider_image'))
        {
            if (file_exists(storage_path("app/public/{$slider->image}")))
            {
               unlink(storage_path("app/public/{$slider->image}"));
            }
            $path = $request->file('slider_image')->store('slider'); 
            $slider->slider_name = $request->slider_name;
            $slider->slider_title = $request->slider_title;
            $slider->slider_subtitle = $request->slider_subtitle;
            $slider->status = $request->status;
            $slider->image = $path;
            $slider->save();
            Toastr::success('Update Successfully!', 'Notification');
            return redirect(route('slider.manage'));
        }
        $slider->slider_name = $request->slider_name;
        $slider->slider_title = $request->slider_title;
        $slider->slider_subtitle = $request->slider_subtitle;
        $slider->status = $request->status;
        $slider->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('slider.manage'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::findOrFail($id);
        
        if (file_exists(storage_path("app/public/{$slider->image}")))
        {
           unlink(storage_path("app/public/{$slider->image}"));
            slider::findOrFail($id)->delete();
        }
        Toastr::success('Delete Successfully!', 'Notification');
        return redirect(route('slider.manage'));
    }
}
