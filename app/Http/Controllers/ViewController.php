<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    public function Doc()
    {
        $doctors = DB::table('doctors')
        ->join('users', 'doctors.user_id', '=', 'users.id')
        ->where('users.category','Doctor')
        ->where('doctors.approval','1')
        ->orderBy('users.name', 'ASC')
        ->select('users.name','doctors.specification','doctors.image','doctors.description')
        ->paginate(20);

        return view('/Members/doctors',
        [
        'doctors' => $doctors,
        ]);
    }
    public function FindDoc(Request $request)
    {
        $specification = $request['specification'];
        $doctors = DB::table('doctors')
        ->join('users', 'doctors.user_id', '=', 'users.id')
        ->where('users.category','Doctor')
        ->where('doctors.approval','1')
        ->where('doctors.specification',$specification)
        ->orderBy('users.name', 'ASC')
        ->select('users.name','doctors.specification','doctors.image','doctors.description')
        ->paginate(20);

        return view('/Members/doctors',
        [
        'doctors' => $doctors,
        ]);
    }
    public function Hos()
    {
        $hospitals = DB::table('hospitals')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('users.category','Hospital')
        ->where('hospitals.approval','1')
        ->orderBy('users.name', 'ASC')
        ->select('users.name','hospitals.contact','hospitals.address','hospitals.sector','hospitals.regno','users.email','hospitals.image')
        ->paginate(20);

        return view('/Members/hospitals',
        [
        'hospitals' => $hospitals,
        ]);
    }
    public function Lab()
    {
        $labs = DB::table('labs')
        ->join('users', 'labs.user_id', '=', 'users.id')
        ->where('users.category','Lab')
        ->where('labs.approval','1')
        ->orderBy('users.name', 'ASC')
        ->select('users.name','labs.contact','labs.address','labs.regno','users.email','labs.image')
        ->paginate(20);

        return view('/Members/labs',
        [
        'labs' => $labs,
        ]);
    }
}
