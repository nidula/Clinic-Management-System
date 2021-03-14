@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-11 float-right p-3">
            <div class="card">
                <div class="card-header"><h5>Records and Reports</h5></div><br>
                <div class="card-body">
                <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Patients's Name</th>
            <th scope="col">Topic</th>
            <th scope="col">Date/Time</th>
            <th scope="col">Special</th>
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
            @if($row->special)
            <a href="/unspecial/{{$row->id}}"><button type="button"class="btn btn-warning">UnSpecial</button></a>
            @else
            <a href="/special/{{$row->id}}"><button type="button"class="btn btn-success">Special</button></a>  
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
        </div>
    </div>
@endsection