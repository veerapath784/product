<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'password','address','phone','user_type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userType(){
        return $this->belongsTo(UserType::class);
    }

    public function webLoginPost(Request $request)
{
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ]);


    $remember_me = $request->has('remember_me') ? true : false;


    if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me))
    {
        $user = auth()->user();
        dd($user);
    }else{
        return back()->with('error','your username and password are wrong.');
    }
}
}
