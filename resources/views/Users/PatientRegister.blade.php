@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Patient Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="submitpatient" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                (If the patient is a Dependant please add guardian's Email)
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }}</label>

                            <div class="col-md-6">
                                <input id="nic" type="text" class="form-control" name="nic" value="{{ old('nic') }}" required autocomplete="nic" autofocus>
                                (If the patient is a Dependant please add guardian's NIC)
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                            <input class="form-check-input ml-1" type="radio" name="sex" id="sex" value="Male">
                            <label class="form-check-label ml-4">Male</label><br>
                            <input class="form-check-input ml-1" type="radio" name="sex" id="sex" value="Female">
                            <label class="form-check-label ml-4">Female</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                                (If the patient is a Dependant please add guardian's Contact)
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Weight(Kg)') }}</label>

                            <div class="col-md-6">
                                <input id="weight" type="number" step="any" class="form-control" name="weight" value="{{ old('weight') }}" required autocomplete="weight" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Height(m)') }}</label>

                            <div class="col-md-6">
                                <input id="height" type="number"  step="any" class="form-control" name="height" value="{{ old('height') }}" required autocomplete="height" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bloodgroup" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="bloodgroup" name="bloodgroup" required>
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
                            <input id="allergies" type="text" class="form-control" name="allergies" autocomplete="allergies" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Patient Type') }}</label>

                            <div class="col-md-6">
                            <input class="form-check-input ml-1" type="radio" name="type" id="type" value="Adult">
                            <label class="form-check-label ml-4">Adult</label><br>
                            <input class="form-check-input ml-1" type="radio" name="type" id="type" value="dependent">
                            <label class="form-check-label ml-4">Dependent</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Pin" class="col-md-4 col-form-label text-md-right">{{ __('Choose a Pin') }}</label>

                            <div class="col-md-6">
                                <input id="pin" type="password" inputmode="numeric" maxlength="4" class="form-control" name="pin" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <input id="doctor" type="hidden" class="form-control" name="category" value="Patient" required>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
