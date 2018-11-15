<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class LogoController extends Controller
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
        $logos = Logo::orderBy('created_at', 'desc')->paginate(10);
        return view('backEnd.logo.manage', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.logo.create');
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
            'type' => 'required|integer|max:4',
            'status' => 'required|integer|Boolean',
            'image' => 'required|image',
        ]);
        
        if($request->has('image'))
        {
         $path = $request->file('image')->store('logo');        
        }
        
        $logo = new Logo();
        
        $logo->type = $request->type;
        $logo->status = $request->status;
        $logo->image = $path;
        $logo->save();
        Toastr::success('Create Successfully!', 'Notification');
        return redirect(route('logo.manage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $logo = Logo::findOrFail($id);
        $logo->status = $request->status;
        $logo->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('logo.manage'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logos = Logo::findOrFail($id);
        
        return view('backEnd.logo.edit', compact('logos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'type' => 'required|integer|max:4',
            'status' => 'required|integer|Boolean',
        ]);
        $logo = Logo::findOrFail($id);

        if($request->has('image'))
        {
            if (file_exists(storage_path("app/public/{$logo->image}")))
            {
                unlink(storage_path("app/public/{$logo->image}"));
            }
              
            $path = $request->file('image')->store('logo'); 
            $logo->type = $request->type;
            $logo->status = $request->status;
            $logo->image = $path;
            $logo->save();
            Toastr::success('Update Successfully!', 'Notification');
            return redirect(route('logo.manage')); 
        }
        // without image 
        $logo->type = $request->type;
        $logo->status = $request->status;
        $logo->save();
        Toastr::success('Update Successfully!', 'Notification');
        return redirect(route('logo.manage')); 
        
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logo  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        if (file_exists(storage_path("app/public/{$logo->image}")))
        {
            unlink(storage_path("app/public/{$logo->image}"));
        }
        Logo::findOrFail($id)->delete();
        Toastr::success('Delete Successfully!', 'Notification');
        return redirect(route('logo.manage')); 
    }
}
