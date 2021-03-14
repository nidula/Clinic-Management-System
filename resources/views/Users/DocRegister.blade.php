@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Doctor Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="submitdoc" enctype="multipart/form-data">
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
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="docid" class="col-md-4 col-form-label text-md-right">{{ __('Doctor ID') }}</label>

                            <div class="col-md-6">
                                <input id="docid" type="text" class="form-control" name="docid" value="{{ old('docid') }}" required autocomplete="docid" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Doctor Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specification" class="col-md-4 col-form-label text-md-right">{{ __('Specification') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="specification" name="specification" required>
                                <option>Allergist</option>
                                <option>Anesthesiologist</option>
                                <option>Audiologist</option>
                                <option>Cardiologist</option>
                                <option>Dentist</option>
                                <option>Dermatologist</option>
                                <option>Endocrinologist</option>
                                <option>ENT Specialist</option>
                                <option>Epidemiologist</option>
                                <option>Gynecologist</option>
                                <option>Immunologist</option>
                                <option>Infectious Disease Specialist</option>
                                <option>Internal Medicine Specialist</option>
                                <option>Medical Geneticist</option>
                                <option>Microbiologist</option>
                                <option>Neonatologist</option>
                                <option>Neurologist</option>
                                <option>Neurosurgeon</option>
                                <option>Obstetrician</option>
                                <option>Oncologist</option>
                                <option>Orthopedic Surgeon</option>
                                <option>Pediatrician</option>
                                <option>Physiologist</option>
                                <option>Plastic Surgeon</option>
                                <option>Podiatrist</option>
                                <option>Psychiatrist</option>
                                <option>Radiologist</option>
                                <option>Rheumatologist</option>
                                <option>Surgeon</option>
                                <option>Urologist</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
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

                        <input id="doctor" type="hidden" class="form-control" name="category" value="Doctor" required>
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
