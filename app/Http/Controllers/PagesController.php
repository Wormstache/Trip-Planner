<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
