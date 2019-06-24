<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;

class CustomerListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerRole=DB::table('role_user')->where('role_id','3')->pluck('user_id');
        $customers=User::where('id',$customerRole)->get();
        return view('admin.customerList')->with('customers',$customers);
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
        $customer=User::findorFail($id);
        return view('admin.customerList')->with('customer', $customer);
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
            
        $customer=User::find($id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->contact_no = $request->contact_no;
        $customer->email = $request->email;

        $customer->update();
        return redirect('/customerList')->with(['success'=>'Customer Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer=User::findorFail($id);
        $customer->delete();
        return redirect('/customerList')->with(['success'=>'Customer Successfully Deleted']);
    }
}
