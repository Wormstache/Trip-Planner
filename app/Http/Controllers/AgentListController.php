<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AgentDetail;

class AgentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists=AgentDetail::all();
        return view('admin.agentList')->with('lists',$lists);
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
        //
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
        $list=User::whereHas('roles',function($q){
            $q->where('name','agent');
        })->get();
        return view('admin.agentList')->with('list', $list);
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
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'contact_no'=>'required',
            'email'=>'required|email',
        ]);
            
        $list=AgentDetail::find($id);
        $list->name = $request->name;
        $list->address = $request->address;
        $list->contact_no = $request->contact_no;
        $list->email = $request->email;

        $list->update();
        return redirect('/agentList')->with(['success'=>'Agent Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list=AgentDetail::findorFail($id);
        $list->delete();
        return redirect('/agentList')->with(['success'=>'Agent Successfully Deleted']);
    }
}
