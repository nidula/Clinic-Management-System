@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>My Proflie</strong></div>

                <div class="card-body">
                    <form method="POST" action = "EditDoctor" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name ="id" value="{{$user->id}}">
                        <div class="form-group row justify-content-center">
                            <img src="/storage/{{ $doctor->image }}" class="w-50">
                       </div>
                       <input id="image" type="file" class="form-control col-md-4 float-right" name="cover" value="{{$doctor->image}}"><br><br>

                       <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{$doctor->id}}" required autocomplete="id" autofocus readonly>
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
                                <input id="nic" type="text" class="form-control" name="nic" value="{{$doctor->nic}}" required autocomplete="nic" autofocus readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="textarea" class="form-control" rows="5" name="description" value="{{$doctor->description}}" required autocomplete="description" autofocus>{{$doctor->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="doctorid" class="col-md-4 col-form-label text-md-right">{{ __('Doctor ID') }}</label>

                            <div class="col-md-6">
                                <input id="doctorid" type="text" class="form-control" name="doctorid" value="{{$doctor->doc_id}}" required autocomplete="doctorid" autofocus readonly>
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
                                <input id="contact" type="text" class="form-control" name="contact" value="{{$doctor->contact}}" required autocomplete="contact" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{$doctor->address}}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specification" class="col-md-4 col-form-label text-md-right">{{ __('Specification') }}</label>

                            <div class="col-md-6">
                                <input id="specification" type="text" class="form-control" name="specification" value="{{$doctor->address}}" required autocomplete="specification" autofocus>
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
