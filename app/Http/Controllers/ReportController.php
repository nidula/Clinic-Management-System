<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Report;
Use DB;
use App\Mail\ReportMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;

class ReportController extends Controller
{
    protected function storeH(Request $request)
    {
        $id=Auth()->user()->id;
        $type="Hospital";
        $report = new Report;
        $report -> patient_id = $request['patientid'];
        $report -> topic = $request['topic'];

        $imagePath = request('file') ->store('reports','public');
        $report -> file = $imagePath;

        $report -> hoslab = $type;
        $report -> hoslab_id = $id;

        $report -> save();

        $file = DB::table('reports')
        ->where('file',$imagePath)
        ->value('id');

        $fileid = Crypt::encrypt($file);

        $patientemail = DB::table('patients')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('patients.id',$request['patientid'])
        ->value('users.email');

        $hospitalname = DB::table('users')
        ->where('id',$id)
        ->value('name');

        $hospitalemail = DB::table('users')
        ->where('id',$id)
        ->value('email');

        $hospitalcontact = DB::table('hospitals')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('users.id',$id)
        ->value('contact');

        $hospitaladdress = DB::table('hospitals')
        ->join('users', 'hospitals.user_id', '=', 'users.id')
        ->where('users.id',$id)
        ->value('address');

        $url ="http://127.0.0.1:8000/viewreport/$fileid";

        $data = array(
            'url'      =>  $url,
            'name'      =>  $hospitalname,
            'email'   =>  $hospitalemail,
            'contact' => $hospitalcontact,
            'address' => $hospitaladdress,
            'topic' => $request['topic'],
        );
        Mail::to($patientemail)->send(new ReportMail($data));
        return redirect('/Hospital');
    }
    protected function storeL(Request $request)
    {
        $id=Auth()->user()->id;
        $type="Lab";
        $report = new Report;
        $report -> patient_id = $request['patientid'];
        $report -> topic = $request['topic'];

        $imagePath = request('file') ->store('reports','public');
        $report -> file = $imagePath;

        $report -> hoslab = $type;
        $report -> hoslab_id = $id;

        $report -> save();

        $file = DB::table('reports')
        ->where('file',$imagePath)
        ->value('id');

        $fileid = Crypt::encrypt($file);

        $patientemail = DB::table('patients')
        ->join('users', 'patients.user_id', '=', 'users.id')
        ->where('patients.id',$request['patientid'])
        ->value('users.email');

        $hospitalname = DB::table('users')
        ->where('id',$id)
        ->value('name');

        $hospitalemail = DB::table('users')
        ->where('id',$id)
        ->value('email');

        $hospitalcontact = DB::table('labs')
        ->join('users', 'labs.user_id', '=', 'users.id')
        ->where('users.id',$id)
        ->value('contact');

        $hospitaladdress = DB::table('labs')
        ->join('users', 'labs.user_id', '=', 'users.id')
        ->where('users.id',$id)
        ->value('address');

        $url ="http://127.0.0.1:8000/viewreportp/$fileid";

        $data = array(
            'url'      =>  $url,
            'name'      =>  $hospitalname,
            'email'   =>  $hospitalemail,
            'contact' => $hospitalcontact,
            'address' => $hospitaladdress,
            'topic' => $request['topic'],
        );
        Mail::to($patientemail)->send(new ReportMail($data));
        return "Success";
    }

    public function viewreport($id)
    {
        $id = Crypt::decrypt($id);
        $report_files = DB::table('reports')
        ->where('id', $id)
        ->value('file');

        return response()->file("storage/$report_files");
    }
    public function view($id)
    {
        $id = Crypt::decrypt($id);
        $report_files = DB::table('reports')
        ->where('report_id', $id)
        ->get('file');

        return $report_files;

    }
    public function patientrephide($id)
    {
        DB::table('reports')
        ->where('id', $id)
        ->update(['patienthide' => 1]);
        
        return redirect("/Patient");
    }
    public function patientrepunhide($id)
    {
        DB::table('reports')
        ->where('id', $id)
        ->update(['patienthide' => 0]);
        
        return redirect("/Patient");
    }
    public function viewreportdoc($id)
    {
        //$id = Crypt::decrypt($id);
        $report_files = DB::table('reports')
        ->where('id', $id)
        ->where('patienthide','0')
        ->value('file');

        return response()->file("storage/$report_files");
    }
}
