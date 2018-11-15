<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->paginate(10);
        return view('backEnd.service.manage', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.service.create');
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
            'title' => 'required|string|max:30',
            'status' => 'required|boolean',
            'description' => 'required|string|max:184',
            'image' => 'required|image',
        ]);
        
        if($request->has('image'))
        {
         $path = $request->file('image')->store('service');        
        }
        $service = new Service();
        $service->title = $request->title;
        $service->status = $request->status;
        $service->description = $request->description;
        $service->image = $path;
        $service->save();
        Toastr::success('Create Successfully!', 'Notification');
        return redirect(route('service.manage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->status = $request->status;
        $service->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('service.manage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backEnd.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:30',
            'status' => 'required|boolean',
            'description' => 'required|string|max:184',
            'image' => 'image',
        ]);
        $service = Service::findOrFail($id);
        if($request->has('image'))
        {
            if (file_exists(storage_path("app/public/{$service->image}")))
            {
               unlink(storage_path("app/public/{$service->image}"));
            }
         $path = $request->file('image')->store('service');  
         $service->title = $request->title;
         $service->status = $request->status;
         $service->description = $request->description;
         $service->image = $path;
         $service->save();
         Toastr::success('Update Successfully!', 'Notification');
         return redirect(route('service.manage'));      
        }
        $service->title = $request->title;
        $service->status = $request->status;
        $service->description = $request->description;
        $service->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('service.manage'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        if (file_exists(storage_path("app/public/{$service->image}")))
            {
               unlink(storage_path("app/public/{$service->image}"));
               Service::findOrFail($id)->delete();
            }
        Toastr::success('Delete Successfully!', 'Notification');
        return redirect(route('service.manage'));
    }
}
