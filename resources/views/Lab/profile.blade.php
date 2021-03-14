@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>My Proflie</strong></div>

                <div class="card-body">
                <form method="POST" action = "EditLab" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name ="id" value="{{$user->id}}">
                        <div class="form-group row justify-content-center">
                            <img src="/logo/person.png" class="w-50">
                       </div>
                       <input id="image" type="file" class="form-control col-md-4 float-right" name="image" value="{{$lab->image}}" required autocomplete="image" autofocus><br><br>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autocomplete="name" autofocus readonly>
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
                                <input id="contact" type="text" class="form-control" name="contact" value="{{$lab->contact}}" required autocomplete="contact" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{$lab->address}}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="regno" class="col-md-4 col-form-label text-md-right">{{ __('Reg No') }}</label>

                            <div class="col-md-6">
                                <input id="regno" type="text" class="form-control" name="regno" value="{{$lab->regno}}" required autocomplete="regno" autofocus readonly>
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
