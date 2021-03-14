@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>My Proflie</strong></div>

                <div class="card-body">
                    <form method="POST" action = "EditPatient" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name ="id" value="{{$user->id}}">
                        <div class="form-group row justify-content-center">
                            <img src="/storage/{{ $patient->image }}" class="w-50">
                       </div>
                       <input id="image" type="file" class="form-control col-md-4 float-right" name="cover" value="{{$patient->image}}"><br><br>

                       <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{$patient->id}}" required autocomplete="id" autofocus readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autocomplete="name" autofocus readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }}</label>

                            <div class="col-md-6">
                                <input id="nic" type="text" class="form-control" name="nic" value="{{$patient->nic}}" required autocomplete="nic" autofocus readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                            <input id="sex" type="text" class="form-control" name="sex" value="{{$patient->sex}}" required autocomplete="sex" autofocus readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DOB" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="DOB" type="date" class="form-control" name="DOB" value="{{$patient->dob}}" required autocomplete="DOB" autofocus readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="{{$patient->contact}}" required autocomplete="contact" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{$patient->address}}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control" name="weight" value="{{$patient->weight}}" required autocomplete="weight" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Height" class="col-md-4 col-form-label text-md-right">{{ __('Height') }}</label>

                            <div class="col-md-6">
                            <input id="height" type="text" class="form-control" name="height" value="{{$patient->height}}" required autocomplete="height" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bloodgroup" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="bloodgroup" name="bloodgroup" value="{{ $patient->bloodgroup }}" required>
                                <option>{{ $patient->bloodgroup }}</option>
                                <option>--</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O+</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                                <option>O-</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="allergies" class="col-md-4 col-form-label text-md-right">{{ __('Allergies') }}</label>

                            <div class="col-md-6">
                            <input id="allergies" type="text" class="form-control" name="allergies" value="{{$patient->allergies}}" autocomplete="allergies" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Changes') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
