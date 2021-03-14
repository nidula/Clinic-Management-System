<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use App\Patient;
Use DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
Use App\Record;
use PDF;
use App\Mail\RecordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class RecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $id = Auth()->user()->id;
        $doctorid = Doctor::where('user_id', '=', $id)->value('id');
        $record = new Record;
        $record -> doctor_id =$doctorid;
        $record -> patient_id = $request['patientid'];
        $record -> hospital_id = $request['hospitalid'];
        $record -> topic = $request['topic'];
        $record -> record = $request['record'];
        $record -> dochide = $request['hide'];
        $record -> special = $request['special'];

        $record -> save();

        $recordid = Record::
        where('patient_id', $request['patientid'])
        ->where('doctor_id', $doctorid)
        ->where('hospital_id', $request['hospitalid'])->max('id');

        $recid = Crypt::encrypt($recordid);

        $patientemail = DB::table('patients')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('patients.id',$request['patientid'])
        ->value('users.email');

        $data ="http://127.0.0.1:8000/RecordPDF/$recid";
        
        Mail::to($patientemail)->send(new RecordMail($data));
        return redirect('/Doctor');
    }
    public function patienthide($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['patienthide' => 1]);
        
        return redirect("/Patient");
    }
    public function patientunhide($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['patienthide' => 0]);
        
        return redirect("/Patient");
    }

    public function view($id)
    {
        $record = DB::table('records')
        ->where('id', $id)
        ->first();

        $doctorid = DB::table('records')
        ->where('id', $id)
        ->value('doctor_id');

        $doctor = DB::table('doctors')
        ->join('users', 'doctors.user_id', '=', 'users.id')
        ->where('doctors.id', $doctorid)
        ->first();

        $hospitalid = DB::table('records')
        ->where('id', $id)
        ->value('hospital_id');

        $hospital = DB::table('hospitals')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('hospitals.id', $hospitalid)
        ->first();

        $patientid = DB::table('records')
        ->where('id', $id)
        ->value('patient_id');

        $patient = DB::table('patients')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('patients.id', $patientid)
        ->first();
        
        return view('/Patient/viewrecord',
            ['hospital' => $hospital,
            'patient' => $patient,
            'doctor' => $doctor,
            'record' => $record,
            ]);
    }
    function pdf($id)
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->getdata($id));
     return $pdf->stream();
    }
    function getdata($id)
    {
        $record = DB::table('records')
        ->where('id', $id)
        ->first();

        $doctorid = DB::table('records')
        ->where('id', $id)
        ->value('doctor_id');

        $doctor = DB::table('doctors')
        ->join('users', 'doctors.user_id', '=', 'users.id')
        ->where('doctors.id', $doctorid)
        ->first();

        $hospitalid = DB::table('records')
        ->where('id', $id)
        ->value('hospital_id');

        $hospital = DB::table('hospitals')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('hospitals.id', $hospitalid)
        ->first();

        $patientid = DB::table('records')
        ->where('id', $id)
        ->value('patient_id');

        $patient = DB::table('patients')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('patients.id', $patientid)
        ->first();
     $output = '
                        <center>
                            <b>'.$hospital->name.'</b><br>
                            '.$hospital->address.'<br>
                            '.$hospital->contact.' / '.$hospital->email.'<br>
                            '.$record->created_at.'<br><br>
                        </center>
                        <hr>
                        
                                Patient Name :'.$patient->name.'<br>
                                Age:'.$patient->dob.'<br>
                        <center>

                                <h4><u>'.$record->topic.'</u></h4>
                        </center>

                        <center>
                            '.$record->record.'
                        </center>

                        <br><br><br>
                        <p align="right">
                        '.$doctor->name.'<br>
                        '.$doctor->description.'
                        </p>
                        ';
     return $output;
    }
    public function special($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['special' => 1]);
        
        return redirect("/Doctor/PatientRecords");
    }
    public function unspecial($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['special' => 0]);
        
        return redirect("/Doctor/PatientRecords");
    }
    public function hide($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['dochide' => 1]);
        
        return redirect("/Doctor/HiddenRecords");
    }
    public function unhide($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['dochide' => 0]);
        
        return redirect("/Doctor/HiddenRecords");
    }
    public function sspecial($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['special' => 1]);
        
        return redirect("/Doctor/SpecialRecords");
    }
    public function sunspecial($id)
    {
        DB::table('records')
        ->where('id', $id)
        ->update(['special' => 0]);
        
        return redirect("/Doctor/SpecialRecords");
    }
    function pdfview($id)
    {
        $recid = Crypt::decrypt($id);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->getdata($recid));
        return $pdf->stream();
    }
}
