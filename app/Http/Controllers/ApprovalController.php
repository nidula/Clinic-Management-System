<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DoctorConfirmMail;
use App\Mail\HospitalConfirmMail;
use App\Mail\LabConfirmMail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use DB;

class ApprovalController extends Controller
{
    public function doctor($id)
    {
        $id = Crypt::decrypt($id);
        $email = $data=DB::table('users')
        ->where('id', $id)
        ->value('email');

        DB::table('doctors')
        ->where('user_id', $id)
        ->update(['approval' => 1]);

        Mail::to($email)->send(new DoctorConfirmMail());
        return "Docotor has been Approved!";
    }
    public function hospital($id)
    {
        $id = Crypt::decrypt($id);
        $email = $data=DB::table('users')
        ->where('id', $id)
        ->value('email');

        DB::table('hospitals')
        ->where('user_id', $id)
        ->update(['approval' => 1]);

        Mail::to($email)->send(new HospitalConfirmMail());
        return "Hospital has been Approved!";
    }
    public function lab($id)
    {
        $id = Crypt::decrypt($id);
        $email = $data=DB::table('users')
        ->where('id', $id)
        ->value('email');

        DB::table('labs')
        ->where('user_id', $id)
        ->update(['approval' => 1]);

        Mail::to($email)->send(new LabConfirmMail());
        return "Lab has been Approved!";
    }
}
