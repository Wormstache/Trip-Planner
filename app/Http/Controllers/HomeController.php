<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'agent', 'customer']);
        if($request->user()->hasRole('admin')){
            return view('admin.index');
        }
        if($request->user()->hasRole('agent')) {
            return view('agent.index');
        }
        if($request->user()->hasRole('customer')) {
            return view('customer.index');
        }
    }
}
