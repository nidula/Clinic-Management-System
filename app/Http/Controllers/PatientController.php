<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use Illuminate\Support\Facades\Hash;
Use DB;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $patient = Patient::where('user_id', '=', $id)->firstOrFail();

        $patientid = Patient::where('user_id', '=', $id)->value('id');
        //$records = Record::where('patient_id', '=', $patientid)->get();
        $records = DB::table('records')
        ->join('doctors', 'records.doctor_id', '=', 'doctors.id')
        ->join('users', 'doctors.user_id', '=', 'users.id')
        ->where('records.patient_id',$patientid)
        ->select('records.id','records.topic','users.name','records.created_at','records.patienthide')
        ->orderBy('id', 'DESC')
        ->paginate(3);

        $reports = DB::table('reports')
        //->join('report_files', 'records.id', '=', 'report_files.report_id')
        ->where('patient_id',$patientid)
        ->select('reports.id','reports.topic','reports.created_at','reports.patienthide')
        ->orderBy('id', 'DESC')
        ->paginate(3);
        
        return view('/Patient/dashboard',
        [
        'user' => $user,
        'patient' => $patient,
        'records' => $records,
        'reports' => $reports,
        ]);

        //return $records;
    }
    public function index()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $patient = Patient::where('user_id', '=', $id)->firstOrFail();
        return view('Patient.profile',
        ['user' => $user,
        'patient' => $patient,
        ]);
    }
    protected function edit(Request $request)
    {
        $id=Auth()->user()->id;
        $user = new User;
        $user = User::find(Auth()->user()->id);
        $user ->   email = $request['email'];

        $user->save();

        $patient = new Patient;
        $patient = Patient::where('user_id', '=', $id)->firstOrFail();
        $patient -> contact = $request['contact'];
        $patient -> address = $request['address'];
        $patient -> weight = $request['weight'];
        $patient -> height = $request['height'];
        $patient -> bloodgroup = $request['bloodgroup'];
        $patient -> allergies = $request['allergies'];

        if ($request->hasFile('cover')) {
            $imagePath = request('cover')->store('uploads','public');
            $patient -> image = $imagePath;
            $patient -> save();
        }
        else{
            $patient -> save();
        }
        // $imagePath = request('cover')->store('uploads','public');
        // $patient -> image = $imagePath;

        // $patient -> save();

        return redirect("/Patient");
    }
}
