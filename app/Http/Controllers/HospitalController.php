<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hospital;
use Illuminate\Support\Facades\Hash;
Use DB;

class HospitalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $hospital = Hospital::where('user_id', '=', $id)->firstOrFail();
        return view('Hospital.profile',
        ['user' => $user,
        'hospital' => $hospital,
        ]);
    }
    public function show()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $hospital = Hospital::where('user_id', '=', $id)->firstOrFail();
        //$doctors = DB::table('users')->where('category', 'Doctor')->get();

        $doctors = DB::table('doctors')
        ->join('users', 'doctors.user_id', '=', 'users.id')
        ->where('users.category','Doctor')
        ->where('doctors.approval','1')
        ->orderBy('users.name', 'ASC')
        ->get('users.name');

        return view('/hospital/dashboard',
        ['user' => $user,
        'hospital' => $hospital,
        'doctors' => $doctors,
        ]);
    }
    public function add(Request $request)
    {
        $id = Auth()->user()->id;
        $hospital = Hospital::where('user_id', '=', $id)->value('id');
        $docname = $request['name'];
        $doctor = User::where('name', '=', $docname)->value('id');
        $docid = $request['docid'];
        $data = DB::table('doctors')
        ->where('user_id', $doctor)
        ->where('doc_id', $docid)
        ->value('id');

        // Updated Section start

        if($data)
        {
            DB::table('dochos')
            ->insert(['doctor_id' => $data, 'hospital_id' => $hospital]);

           return redirect('Hospital')->with('success','Success');
        }
        else
        {
            return redirect('Hospital')->with('fail','Success');
        }

        // Updated Section end
    }
    protected function edit(Request $request)
    {
        $id=Auth()->user()->id;
        $user = new User;
        $user = User::find(Auth()->user()->id);
        $user ->   email = $request['email'];

        $user->save();

        $hospital = new Hospital;
        $hospital = Hospital::where('user_id', '=', $id)->firstOrFail();
        $hospital -> contact = $request['contact'];
        $hospital -> address = $request['address'];

        if ($request->hasFile('cover')) {
            $imagePath = request('cover')->store('uploads','public');
            $hospital -> image = $imagePath;
            $hospital -> save();
        }
        else{
            $hospital -> save();
        }
        // $imagePath = request('cover')->store('uploads','public');
        // $doctor -> image = $imagePath;

        // $doctor -> save();

        return redirect("/Hospital");
    }
}
