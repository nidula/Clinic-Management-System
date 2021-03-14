<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated()
{
    $id = auth()->user()->id;

    if(auth()->user()->category=='Doctor')
    {
        $approval = DB::table('doctors')
        ->where('user_id', $id)
        ->value('approval');

        if($approval=='1')
        {
            return redirect('/Doctor');
        }
        else
        {
            return view("WaitCon");
        }
    }
    else if(auth()->user()->category=='Patient')
    {
        return redirect('/Patient');
    }
    else if(auth()->user()->category=='Hospital')
    {
        $approval = DB::table('hospitals')
        ->where('user_id', $id)
        ->value('approval');

        if($approval=='1')
        {
            return redirect('/Hospital');
        }
        else
        {
            return view("WaitCon");
        }
    }
    else if(auth()->user()->category=='Lab')
    {
        $approval = DB::table('labs')
        ->where('user_id', $id)
        ->value('approval');

        if($approval=='1')
        {
            return redirect('/Lab');
        }
        else
        {
            return view("WaitCon");
        }
    }
    else
    {
        return redirect('/home');
    }
}

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
