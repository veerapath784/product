<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserType;
use App\User;

class UserController extends Controller
{

    protected $rules = [
        'user_type_id' => 'required',
        'fullname' => 'required|min:3',
        'email' => 'required|email|min:5',
        'password' => 'required|confirmed',
        'address' => 'required|min:5',
        'phone' => 'required|min:5',
    ];

    protected $path = "/admin/user";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create', [
            'userTypes' => UserType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);
        $user = new User();
        $user->user_type_id = $request->input('user_type_id');
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect($this->path);
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
        $data = [
            'user' => $user,
            'userTypes' => UserType::all(),
        ];
        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate($this->rules);
        $user = User::find($id);
        $user->user_type_id = request()->input('user_type_id');
        $user->fullname = request()->input('fullname');
        $user->email = request()->input('email');
        $user->password = bcrypt(request()->input('password'));
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect($this->path);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return response()->json();
    }
}
