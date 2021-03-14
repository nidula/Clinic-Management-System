<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function index()
    {
        //return view('home');
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
}
