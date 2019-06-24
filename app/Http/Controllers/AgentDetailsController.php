<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AgentDetail;
use App\User;
use App\Role;

class AgentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.agentCreate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
            'address'=>'required',
            'contact_no'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:8',
        ]);
        
        $user = User::create(request(['name','address','contact_no', 'email', 'password']));

        $user
            ->roles()
            ->attach(Role::where('name', 'agent')->first());

        $agent=new AgentDetail();
        $agent->name = $request->name;
        $agent->address = $request->address;
        $agent->contact_no = $request->contact_no;
        $agent->email = $request->email;
        $agent->password = $request->password;

        $agent->save();
            
        return redirect()->back()->with('user',$user)->with(['success'=>'Agent Successfully Registered']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
