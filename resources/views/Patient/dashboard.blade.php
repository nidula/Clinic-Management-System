@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-3 float-left p-3">
        <div class="card">
                <div class="card-header"><h5><strong>Patient Details</strong></h5></div><br>
                <div class="card-body">
                <div class="form-group row justify-content-center">
                    <img src="/storage/{{ $patient->image }}" class="w-50"><br><br>
                </div>
                    <strong>ID : </strong>{{ $user->name }}<br>
                    <strong>Name : </strong>{{ $patient->id }}<br>
                    <strong>Email : </strong>{{ $user->email }}<br>
                    <strong>NIC : </strong>{{ $patient->nic }}<br>
                    <strong>Sex : </strong>{{ $patient->sex }}<br>
                    <strong>DOB : </strong>{{ $patient->dob }}<br>
                    <strong>Contact : </strong>{{ $patient->contact }}<br>
                    <strong>Address : </strong>{{ $patient->address }}<br>
                    <strong>Weight : </strong>{{ $patient->weight }}<br>
                    <strong>Height : </strong>{{ $patient->height }}<br>
                    <strong>Blood Group : </strong>{{ $patient->bloodgroup }}<br>
                    <strong>Allergies : </strong>{{ $patient->allergies }}<br>
                    <a href="/Patient/profile" class="btn btn-primary col-md-4  float-right">Edit</a><br><br>
                </div>
            </div>
        </div>
        <div class="col-md-8 float-right p-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5><strong>Records</strong></h5></div><br>
                <div class="card-body">
                <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Doctor's Name</th>
            <th scope="col">Topic</th>
            <th scope="col">Date/Time</th>
            <th scope="col">Hide</th>
            <th scope="col">View</th>
            <th scope="col">PDF View</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            @foreach ($records as $row)    
            <th scope="row">{{ $row->id }}</th>
            <td>{{$row->name}}</td>
            <td>{{$row->topic}}</td>
            <td>{{$row->created_at}}</td>
          <td>
            @if($row->patienthide)
            <a href="/patientunhide/{{$row->id}}"><button type="button"class="btn btn-success">Unhide</button></a>
            @else
            <a href="/patienthide/{{$row->id}}"><button type="button"class="btn btn-warning">Hide</button></a>  
            @endif
          </td>
          <td>
          <a href="/viewrecord/{{$row->id}}"><button type="button"class="btn btn-primary">view</button></a>
          </td>
          <td>
          <a href="/viewrecordPDF/{{$row->id}}"><button type="button"class="btn btn-danger">PDF</button></a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="float-right">
      {{ $records->links() }}
      </div>
                </div>
            </div>
        </div><br><br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5><strong>Reports</strong></h5></div><br>
                <div class="card-body">
                <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Topic</th>
            <th scope="col">Date/Time</th>
            <th scope="col">Hide</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            @foreach ($reports as $row)    
            <th scope="row">{{ $row->id }}</th>
            <td>{{$row->topic}}</td>
            <td>{{$row->created_at}}</td>
          <td>
            @if($row->patienthide)
            <a href="/patientrepunhide/{{$row->id}}"><button type="button"class="btn btn-success">Unhide</button></a>
            @else
            <a href="/patientrephide/{{$row->id}}"><button type="button"class="btn btn-warning">Hide</button></a>  
            @endif
          </td>
          <td>
          <a href="/viewreport/{{$row->id}}"><button type="button"class="btn btn-primary">view</button></a>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="float-right">
      {{ $reports->links() }}
      </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection