<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use App\Patient;
Use DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $doctor = Doctor::where('user_id', '=', $id)->firstOrFail();
        return view('Doctor.profile',
        ['user' => $user,
        'doctor' => $doctor,
        ]);
    }
    protected function create(Request $request)
    {
        //
    }
    protected function edit(Request $request)
    {
        $id=Auth()->user()->id;
        $user = new User;
        $user = User::find(Auth()->user()->id);
        $user ->   email = $request['email'];

        $user->save();

        $doctor = new Doctor;
        $doctor = Doctor::where('user_id', '=', $id)->firstOrFail();
        $doctor -> description = $request['description'];
        $doctor -> contact = $request['contact'];
        $doctor -> address = $request['address'];
        $doctor -> specification = $request['specification'];

        if ($request->hasFile('cover')) {
            $imagePath = request('cover')->store('uploads','public');
            $doctor -> image = $imagePath;
            $doctor -> save();
        }
        else{
            $doctor -> save();
        }
        // $imagePath = request('cover')->store('uploads','public');
        // $doctor -> image = $imagePath;

        // $doctor -> save();

        return redirect("/Doctor");
    }
    public function show()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $doctor = Doctor::where('user_id', '=', $id)->value('id');

        $hospitals = DB::table('dochos')
        ->join('hospitals', 'dochos.hospital_id', '=', 'hospitals.id')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('dochos.doctor_id',$doctor)
        ->get();
        
        return view('/Doctor/dashboard',
        [
        'hospitals' => $hospitals,
        ]);
    }
    public function access(Request $request)
    {
        $id = Auth()->user()->id;
        $user = User::find($id);

        $doctor = Doctor::where('user_id', '=', $id)->firstOrFail();
        $doctorid = Doctor::where('user_id', '=', $id)->value('id');
        $doctorname = User::where('id', '=', $id)->value('name');

        $hospitalname = $request['hospitalname'];
        $hospital = DB::table('hospitals')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('users.name',$hospitalname)
        ->get();

        $hospitalid = DB::table('hospitals')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('users.name',$hospitalname)
        ->value('hospitals.id');

        $patientid = $request ['patientid'];

        $patientpin = patient::where('id', '=', $patientid)->value('pin');
        $pin = $request ['pin'];

        $doctor = doctor::where('id','=',$doctorid)->firstOrFail();

        $time = date("Y-m-d H:i:s");

        $patient = patient::where('id', '=', $patientid)->firstOrFail();

        $patientname = DB::table('patients')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('patients.id',$patientid)
        ->value('users.name');

        $patientemail = DB::table('patients')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('patients.id',$patientid)
        ->value('users.email');

        if(Hash::check($pin, $patientpin))
        {
            return view('/Doctor/addrecord',
            ['hospital' => $hospital,
            'hospitalid' => $hospitalid,
            'doctor' => $doctor,
            'doctorname' => $doctorname,
            'datetime' => $time,
            'patient' => $patient,
            'patientname' => $patientname,
            'patientemail' => $patientemail,
            ]);
        }
        else
        {
            return 'Not matched';
        }
    }
    public function all()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $doctor = Doctor::where('user_id', '=', $id)->firstOrFail();

        $doctorid = Doctor::where('user_id', '=', $id)->value('id');
        //$records = Record::where('doctor_id', '=', $doctorid)->get();
        $records = DB::table('records')
        ->join('patients', 'records.patient_id', '=', 'patients.id')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('records.doctor_id',$doctorid)
        ->where('records.patienthide','0')
        ->select('records.id','records.topic','users.name','records.created_at','records.special')
        ->orderBy('id', 'DESC')
        ->paginate(7);
        
        return view('/Doctor/allrecords',
        [
        'user' => $user,
        'doctor' => $doctor,
        'records' => $records,
        ]);

        //return $records;
    }
    public function hidden()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $doctor = Doctor::where('user_id', '=', $id)->firstOrFail();

        $doctorid = Doctor::where('user_id', '=', $id)->value('id');
        //$records = Record::where('doctor_id', '=', $doctorid)->get();
        $records = DB::table('records')
        ->join('patients', 'records.doctor_id', '=', 'patients.id')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('records.doctor_id',$doctorid)
        ->where('records.dochide','1')
        ->select('records.id','records.topic','users.name','records.created_at','records.dochide')
        ->orderBy('id', 'DESC')
        ->paginate(7);
        
        return view('/Doctor/hidden',
        [
        'user' => $user,
        'doctor' => $doctor,
        'records' => $records,
        ]);

        //return $records;
    }
    public function special()
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $doctor = Doctor::where('user_id', '=', $id)->firstOrFail();

        $doctorid = Doctor::where('user_id', '=', $id)->value('id');
        //$records = Record::where('doctor_id', '=', $doctorid)->get();
        $records = DB::table('records')
        ->join('patients', 'records.doctor_id', '=', 'patients.id')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('records.doctor_id',$doctorid)
        ->where('records.special','1')
        ->select('records.id','records.topic','users.name','records.created_at','records.special')
        ->orderBy('id', 'DESC')
        ->paginate(7);
        
        return view('/Doctor/special',
        [
        'user' => $user,
        'doctor' => $doctor,
        'records' => $records,
        ]);

        //return $records;
    }
    public function allpatient($patientid)
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $doctor = Doctor::where('user_id', '=', $id)->firstOrFail();

        //$doctorid = Doctor::where('user_id', '=', $id)->value('id');
        $records = DB::table('records')
        ->join('patients', 'records.patient_id', '=', 'patients.id')
        ->join('users', 'patients.user_id', '=', 'users.id')
        //->where('records.doctor_id',$doctorid)
        ->where('records.patient_id',$patientid)
        ->where('records.patienthide','0')
        ->select('records.id','records.topic','users.name','records.created_at','records.special')
        ->orderBy('id', 'DESC')
        ->paginate(7);
        
        return view('/Doctor/allpatientrecords',
        [
        'records' => $records,
        ]);

        // return $records;

        //return $records;
    }
    public function allpatientrep($patientid)
    {
        $reports = DB::table('reports')
        ->where('patient_id',$patientid)
        ->select('reports.id','reports.topic','reports.created_at','reports.patienthide')
        ->orderBy('id', 'DESC')
        ->paginate(7);
        
        return view('/Doctor/allpatientreports',
        [
        'reports' => $reports,
        ]);
    }
}
