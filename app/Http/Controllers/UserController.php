<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Role;
use App\User;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $user = DB::select("SELECT id,name,email,date_format(created_at,'%d-%M-%Y, %h:%i:%s %p') as created_at,date_format(updated_at,'%d-%M-%Y, %h:%i:%s %p') as updated_at FROM users");
        return view('admin.user-index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$roles = Role::all();
        return view('admin.user-create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $this->validate($request, [
						'name' => 'required',
						'email' => 'required|email|unique:tbl_users,email',
						'password' => 'required|same:confirm-password',
						'roles' => 'required'
					]);


					$input = $request->all();
					$input['password'] = Hash::make($input['password']);
					$user = User::create($input);
					foreach ($request->input('roles') as $key => $value) {
						$user->attachRole($value);
					}
		return back()->with('success','Data Inset successfuly.');

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
