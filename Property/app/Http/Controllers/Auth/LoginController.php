<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    // public function redirectTo() {
    //     $user = Auth()->user();
    //     if($user->email =="razashaikh8879@gmail.com"){
    //         return  view('admin');
    //     }
    //     else{
    //         return view('home');
    //     }
        // switch(true) {
        //     case $user->email:
        //         return '/instructor';
        //     case $user->isAdmin():
        //     case $user->isSuperAdmin():
        //         return '/admin';
        //     default:
        //         return '/account';
        // }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
