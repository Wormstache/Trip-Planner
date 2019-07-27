<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Contact;
use Illuminate\Support\Facades\Mail;    
use App\Mail\ContactMail;

class PagesController extends Controller
{
    public function master(){
        return view('admin.index');
    }

    public function agent(){
        return view('agent.index');
    }

    public function customer(){
        return view('customer.index');
    }

    public function index(){
        return view('index');
    }

    public function blog(){
        $blogs=Blog::all();
        return view('blog', compact('blogs'));
    }

    public function contact(){
        return view('contact');
    }

    public function contactForm(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
 
        $email=array(
           'name' => $request->name,
           'email' => $request->email,
           'message' => $request->message
        );
        Mail::to('sparktravelplanner@gmail.com')->send(new ContactMail($email));
        return back()->with('success', 'Thanks for contacting us!');
    }

    public function destination(){
        return view('destination');
    }

    public function destinationDetail(){
        return view('destinationDetail');
    }
}
