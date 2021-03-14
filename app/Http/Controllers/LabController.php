<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lab;
use Illuminate\Support\Facades\Hash;

class LabController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $lab = Lab::where('user_id', '=', $id)->firstOrFail();
        return view('Lab.profile',
        ['user' => $user,
        'lab' => $lab,
        ]);
    }
    public function show()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $lab = lab::where('user_id', '=', $id)->firstOrFail();
        return view('/lab/dashboard',
        ['user' => $user,
        'lab' => $lab,
        ]);
    }
    protected function edit(Request $request)
    {
        $id=Auth()->user()->id;
        $user = new User;
        $user = User::find(Auth()->user()->id);
        $user ->   email = $request['email'];

        $user->save();

        $lab = new Lab;
        $lab = Lab::where('user_id', '=', $id)->firstOrFail();
        $lab -> contact = $request['contact'];
        $lab -> address = $request['address'];

        if ($request->hasFile('image')) {
            $imagePath = request('image')->store('uploads','public');
            $lab -> image = $imagePath;
            $lab -> save();
        }
        else{
            $lab -> save();
        }
        // $imagePath = request('cover')->store('uploads','public');
        // $lab -> image = $imagePath;

        // $lab -> save();

        return redirect("/Lab");
}
}
