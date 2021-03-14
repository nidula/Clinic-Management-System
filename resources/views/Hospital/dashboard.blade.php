@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 float-left p-3">
            <div class="card">
                <div class="card-header"><h5><strong>Hospital Details</strong></h5></div><br>
                <div class="card-body">
                <div class="form-group row justify-content-center">
                    <img src="/storage/{{ $hospital->image }}" class="w-50"><br><br>
                </div>
                <strong>Name : </strong>{{$user->name}}<br>
                <strong>Email : </strong>{{$user->email}}<br>
                <strong>Contact : </strong>{{$hospital->contact}}<br>
                <strong>Address : </strong>{{$hospital->address}}<br>
                <strong>Sector : </strong>{{$hospital->sector}}<br>
                <strong>Reg No : </strong>{{$hospital->regno}}<br>
                    <a href="/Hospital/profile" class="btn btn-primary col-md-4  float-right">Edit</a><br><br>
                </div>
            </div>
        </div>
        <div class="col-md-7 float-right p-3">
            <div class="card">
                <div class="card-header"><h5><strong>Add Report</strong></h5></div><br>
                <div class="card-body">
                <form method="POST" action="AddReportH" enctype="multipart/form-data">
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
            </div><br><br>
            <div class="card">
                <div class="card-header"><h5><strong>Add Doctor</strong></h5></div><br>
                <div class="card-body">
                <form method="POST" action="AddDocHos" enctype="multipart/form-data">

                    <!-- Updated Section Start-->

                    @if(session('success'))
                    <div class="alert alert-success"><center>{{'Successfully Updated'}}</center></div>
                    @endif

                    @if(session('fail'))
                    <div class="alert alert-danger"><center>{{'Enter Valid Data'}}</center></div>
                    @endif

                    <!-- Updated Section End-->

                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Doctor's Name") }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="name" name="name">
                            @foreach ($doctors as $doctor)
                                <option>{{$doctor->name}}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="docid" class="col-md-4 col-form-label text-md-right">{{ __("Doctor's ID") }}</label>

                            <div class="col-md-6">
                                <input id="docid" type="text" class="form-control" name="docid" value="{{ old('docid') }}" required autocomplete="docid" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Doctor') }}
                                </button>


                            </div>



                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
