@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 float-left p-3">
            <div class="card">
                <div class="card-header"><strong>Login</strong></div>
                <div class="card-body">
                <form method="POST" action="AddRecord" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="hospital" class="col-md-4 col-form-label text-md-right">{{ __('Choose the Hospital') }}</label>
                            
                            <div class="col-md-6">
                                <select class="form-control" id="hospitalname" name="hospitalname" required>
                                    @foreach($hospitals as $hospital)
                                        <option>{{$hospital->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="patientid" class="col-md-4 col-form-label text-md-right">{{ __('Patient Id') }}</label>

                            <div class="col-md-6">
                                <input id="patientid" type="text" class="form-control" name="patientid" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Pin" class="col-md-4 col-form-label text-md-right">{{ __('Pin') }}</label>

                            <div class="col-md-6">
                            <input id="pin" type="password" inputmode="numeric" maxlength="4" class="form-control" name="pin" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Access Records') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2 float-right p-3">
            <div class="card">
                <div class="card-header"><strong>Dashboard</strong></div><br>
                <div class="card-body">
                    <a href="/Doctor/profile" class="btn btn-primary col-md-12">My Proflie</a><br><br>
                    <a href="/Doctor/PatientRecords" class="btn btn-primary col-md-12">Patient Records</a><br><br>
                    <a href="/Doctor/HiddenRecords" class="btn btn-primary col-md-12">Hidden Records</a><br><br>
                    <a href="/Doctor/SpecialRecords" class="btn btn-primary col-md-12">Special Records</a><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
