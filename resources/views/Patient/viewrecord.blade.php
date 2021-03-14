@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h5><strong>Record<strong></h5></div><br>
                <div class="card-body">
                        <div class="row justify-content-center text-center">
                            {{ $hospital->name }}<br>
                            {{ $hospital->address }}<br>
                            {{ $hospital->contact }} / {{ $hospital->email }}<br>
                            {{ $record->created_at }}<br><br>
                        </div>
                        
                        <div class="form-group row justify-content-center">
                            <div class="col-md-11">
                                Patient Name :{{ $patient->name }}<br>
                                Age:{{ $patient->dob }}<br>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11 text-center">
                                {{ $record->topic}}
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11 text-center">
                            {{ $record->record}}
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-11">
                                <div class="text-right">Doctor's Name:{{ $doctor->name }}</div>
                                <div class="text-right">Description:{{ $doctor->description }}</div>
                            </div>
                        </div>
                        <div class="float-right">
                        <a href="/viewrecordPDF/{{$record->id}}"><button type="button"class="btn btn-danger">view PDF</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection