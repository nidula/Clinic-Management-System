@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 float-left p-3">
            <div class="card">
                <div class="card-header"><h5><strong>Lab Details</strong></h5></div><br>
                <div class="card-body">
                <div class="form-group row justify-content-center">
                    <img src="/storage/{{ $lab->image }}" class="w-50"><br><br>
                </div>
                    <strong>Name : </strong>{{$user->name}}<br>
                    <strong>Email : </strong>{{$user->email}}<br>
                    <strong>Contact : </strong>{{$lab->contact}}<br>
                    <strong>Address : </strong>{{$lab->address}}<br>
                    <strong>Reg No : </strong>{{$lab->regno}}<br>
                    <a href="/Lab/profile" class="btn btn-primary col-md-4  float-right">Edit</a><br><br>
                </div>
            </div>
        </div>
        <div class="col-md-7 float-right p-3">
            <div class="card">
                <div class="card-header"><h5><strong>Add Report</strong></h5></div><br>
                <div class="card-body">
                <form method="POST" action="AddReportL" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="patientid" class="col-md-4 col-form-label text-md-right">{{ __("Patient's ID") }}</label>

                            <div class="col-md-6">
                                <input id="patientid" type="text" class="form-control" name="patientid" value="{{ old('patientid') }}" required autocomplete="patientid" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="topic" class="col-md-4 col-form-label text-md-right">{{ __("Topic") }}</label>

                            <div class="col-md-6">
                                <input id="topic" type="text" class="form-control" name="topic" value="{{ old('topic') }}" autocomplete="topic" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">{{ __("Reports") }}</label>

                            <div class="col-md-6">
                            <input id="file" type="file" class="form-control" name="file">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Report') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
