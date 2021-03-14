@extends('layouts.app')

@section('content')
<div style="background-image: url('Logo/bac1.jpg');">
<div class="container">
<br><br><br>
    <div class="row justify-content-center d-flex">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <a href="/Patientregister"><img src="Logo/Patient.png" class="w-100"></a><br>
                    <div class="text-center"><a href="/Patientregister" class="btn btn-primary">Patient Register</a></div>
                </div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                <a href="/Patientregister"><img src="Logo/Doctor.png" class="w-100 ml-3"></a><br>
                    <div class="text-center"><a href="/Docregister" class="btn btn-primary">Doctor Register</a></div>
                </div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <a href="/Patientregister"><img src="Logo/Hospital.png" class="w-100"></a><br>
                    <div class="text-center"><a href="/Hospitalregister" class="btn btn-primary">Hospital Register</a></div>
                </div>
                </div>
        </div>
    </div>

    <div class="row justify-content-center d-flex">
        <div class="col-md-4">
        <div class="card">
                <div class="card-body">
                    <a href="/Patientregister"><img src="Logo/Lab.png" class="w-100"></a><br>
                    <div class="text-center"><a href="/Labregister" class="btn btn-primary">Lab Register</a></div>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                <a href="/Patientregister"><img src="Logo/Doctor.png" class="w-100 ml-3"></a><br>
                    <div class="text-center"><a href="/Docregister" class="btn btn-primary">Nurse Register</a></div>
                </div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <a href="/Patientregister"><img src="Logo/Hospital.png" class="w-100"></a><br>
                    <div class="text-center"><a href="/Hospitalregister" class="btn btn-primary">Pharmasist Register</a></div>
                </div>
                </div>
        </div>
    </div>
</div>
</div>
@endsection
