<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
Use App\Doctor;
Use App\Patient;
Use App\Hospital;
Use App\Lab;
Use DB;
use App\Mail\DoctorReqMail;
use App\Mail\HospitalReqMail;
use App\Mail\LabReqMail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createdoc(Request $request)
    {
        $user = new User;
        $user -> name = $request['name'];
        $user ->   email = $request['email'];
        $user ->   password = Hash::make($request['password']);
        $user ->   category = $request['category'];

        $user->save();

        $doctor = new Doctor;
        $doctor-> user_id = User::max('id');
        $doctor -> nic = $request['nic'];
        $doctor -> doc_id = $request['docid'];
        $doctor -> contact = $request['contact'];
        $doctor -> specification = $request['specification'];
        $doctor -> address = $request['address'];
        $doctor -> description = $request['description'];

        $doctor -> save();

        $id = User::max('id');
        $enctid = Crypt::encrypt($id);
        $url ="http://127.0.0.1:8000/doctorapproval/$enctid";

        $data = array(
            'url'      =>  $url,
            'name'      =>  $request['name'],
            'email'   =>  $request['email'],
            'nic' => $request['nic'],
            'docid' => $request['docid'],
            'contact' => $request['contact'],
            'specification' => $request['specification'],
            'address' => $request['address'],
            'description' => $request['description'],
        );

        Mail::to('chithwara@gmail.com')->send(new DoctorReqMail($data));
        return view("WaitCon");
    }
    protected function createpatient(Request $request)
    {
        $user = new User;
        $user -> name = $request['name'];
        $user ->   email = $request['email'];
        $user ->   password = Hash::make($request['password']);
        $user ->   category = $request['category'];

        $user->save();

        $patient = new Patient;
        $patient-> user_id = User::max('id');
        $patient -> nic = $request['nic'];
        $patient -> sex = $request['sex'];
        $patient -> dob = $request['dob'];
        $patient -> contact = $request['contact'];
        $patient -> address = $request['address'];
        $patient -> weight = $request['weight'];
        $patient -> height = $request['height'];
        $patient -> bloodgroup = $request['bloodgroup'];
        $patient -> allergies = $request['allergies'];
        $patient -> type = $request['type'];
        $patient -> pin = Hash::make($request['pin']);

        $patient -> save();

        return redirect('/Patient');
    }
    protected function createhospital(Request $request)
    {
        $user = new User;
        $user -> name = $request['name'];
        $user ->   email = $request['email'];
        $user ->   password = Hash::make($request['password']);
        $user ->   category = $request['category'];

        $user->save();

        $hospital = new Hospital;
        $hospital-> user_id = User::max('id');
        $hospital -> contact = $request['contact'];
        $hospital -> address = $request['address'];
        $hospital -> sector = $request['sector'];
        $hospital -> regno = $request['regno'];

        $hospital -> save();

        $id = User::max('id');
        $enctid = Crypt::encrypt($id);
        $url ="http://127.0.0.1:8000/hospitalapproval/$enctid";

        $data = array(
            'url'      =>  $url,
            'name'      =>  $request['name'],
            'email'   =>  $request['email'],
            'regno' => $request['regno'],
            'sector' => $request['sector'],
            'contact' => $request['contact'],
            'address' => $request['address'],
        );

        Mail::to('chithwara@gmail.com')->send(new HospitalReqMail($data));
        return view("WaitCon");
    }

    protected function createlab(Request $request)
    {
        $user = new User;
        $user -> name = $request['name'];
        $user ->   email = $request['email'];
        $user ->   password = Hash::make($request['password']);
        $user ->   category = $request['category'];

        $user->save();

        $lab = new Lab;
        $lab-> user_id = User::max('id');
        $lab -> contact = $request['contact'];
        $lab -> address = $request['address'];
        $lab -> regno = $request['regno'];

        $lab -> save();

        $id = User::max('id');
        $enctid = Crypt::encrypt($id);
        $url ="http://127.0.0.1:8000/labapproval/$enctid";

        $data = array(
            'url'      =>  $url,
            'name'      =>  $request['name'],
            'email'   =>  $request['email'],
            'regno' => $request['regno'],
            'contact' => $request['contact'],
            'address' => $request['address'],
        );

        Mail::to('chithwara@gmail.com')->send(new LabReqMail($data));
        return view("WaitCon");
    }
}
