@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 float-left p-3">
            <div class="card">
                <div class="card-header"><h5><strong>Patient Details</strong></h5></div><br>
                <div class="card-body">
                <div class="form-group row justify-content-center">
                    <img src="/storage/{{$patient->image}}" class="w-50"><br><br>
                </div>
                    <strong>Name : </strong>{{$patientname}}<br>
                    <strong>Sex : </strong>{{$patient->sex}}<br>
                    <strong>DOB : </strong>{{$patient->dob}}<br>
                    <strong>Contact : </strong>{{$patient->contact}}<br>
                    <strong>Address : </strong>{{$patient->address}}<br>
                    <strong>Weight : </strong>{{$patient->weight}}<br>
                    <strong>Height : </strong>{{$patient->height}}<br>
                    <strong>Blood Group : </strong>{{$patient->bloodgroup}}<br>
                    <strong>Allergies : </strong>{{$patient->allergies}}<br>
                </div>
                    <div class="text-center">
                    <a href="/Doctor/AllPatientRecords/{{$patient->id}}" class="btn btn-primary col-md-10">Records</a>
                    <a href="/Doctor/AllPatientReports/{{$patient->id}}" class="btn btn-primary col-md-10 mt-2">Reports</a>
                    </div>
                    <br><br>
            </div>
        </div>
        <div class="col-md-7 float-right p-3">
            <div class="card">
                <div class="card-header"><h5><strong>Add Record</strong></h5></div><br>
                <div class="card-body">
                <form method="POST" action="sumbitrecord" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center text-center">
                        @foreach($hospital as $hos)
                            {{ $hos->name }}<input id="hospitalname" type="hidden" class="form-control" name="hospitalname" value="{{ $hos->name }}"><br>
                            {{ $hos->address }}<input id="hospitaladdress" type="hidden" class="form-control" name="hospitaladdress" value="{{ $hos->address }}"><br>
                            {{ $hos->contact }} / {{ $hos->email }}<input id="hospitalcontact" type="hidden" class="form-control" name="hospitalcontact" value="{{ $hos->contact }}"><input id="hospitalemail" type="hidden" class="form-control" name="hospitalemail" value="{{ $hos->email }}"><br>
                            {{ $datetime }}<input id="datetime" type="hidden" class="form-control" name="datetime" value="{{ $datetime }}"><br><br>
                            <input id="hospitalid" type="hidden" class="form-control" name="hospitalid" value="{{ $hospitalid }}">
                        @endforeach
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11">
                                Patient Name :{{ $patientname }}<input id="patient" type="hidden" class="form-control" name="patient" value="{{ $patientname }}"><br>
                                DOB:{{$patient->dob}}<input id="patientage" type="hidden" class="form-control" name="patientage" value="{{$patient->dob}}"><br>
                                <input id="patientid" type="hidden" class="form-control" name="patientid" value="{{ $patient->id }}">
                                <input id="patientemail" type="hidden" class="form-control" name="patientemail" value="{{ $patientemail }}">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11">
                                <input id="topic" type="text" class="form-control" name="topic" placeholder="Topic" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11">
                            <textarea id="record" type="textarea" class="form-control" rows="10" name="record" placeholder="Description/Record" required autofocus></textarea>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                        <div class="col-md-11">
                            <input type="checkbox" class="form-check-input ml-1 mt-3" value="1" name="hide"><label for="reports" class="col-md-12 col-form-label ml-3">{{ __("Hide Record") }}</label>
                            <input type="checkbox" class="form-check-input ml-1 mt-3" value="1" name="special"><label for="reports" class="col-md-12 col-form-label ml-3">{{ __("Special Record") }}</label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11">
                                <div class="text-right">Doctor's Name:{{ $doctorname }}<input id="doctorname" type="hidden" class="form-control" name="doctorname" value="{{ $doctorname }}"></div>
                                <div class="text-right">Description:{{ $doctor->description }}<input id="description" type="hidden" class="form-control" name="description" value="{{ $doctor->description }}"></div>
                            </div>
                        </div>
                        
                        <div class="form-group row float-right mr-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sumit Record') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
