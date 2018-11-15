<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactInfoController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'string',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'inquiry' => 'required|min:10',
            'user_message' => 'required|min:10',
        ]);
        $data = array(
            'name'=>  $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'inquiry'=>$request->inquiry,
            'user_message'=>$request->user_message,
        );
     
        Mail::send('mail/mail', $data, function($message) use ($data) {
           $message->to('admin@admin.com')->subject('User Info');
           $message->from($data['email']);
        });
        return redirect()->back()->with('status', 'Message Send Successfully');

    }

    
}
