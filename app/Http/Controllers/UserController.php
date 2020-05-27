<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $use =  User::latest()->take(3)->get();
             $user = User::inRandomOrder()->take(5)->get();
            $users = User::all();
            $usershere = User::all();
        return view('users/index', compact('users','user','use','usershere')); 
    
       
    }
public function indexII(Request $request)
{
    $use =  User::latest()->take(3)->get();
    $user = User::inRandomOrder()->take(5)->get();
    $users = User::all();
    $usershere = User::where('name','LIKE', '%'.$request->input('usershere').'%')->get();
    return view('users/index', compact('users','user','use','usershere')); 
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users/create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = new User;
        $table->name = $request->name;
        $table->email = $request->email;
        $table->password = $request->password;
        $table->role_id = $request->roleid;
        $table->save();
        return redirect('/users');
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
        $user = User::find($id); 
        $roles = Role::all();
        return view('users/edit', compact('user', 'roles'));  
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
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
