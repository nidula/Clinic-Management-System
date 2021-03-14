@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-11 float-right p-3">
            <div class="card">
                <div class="card-header"><h5><strong>Reports</strong></h5></div><br>
                <div class="card-body">
                <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Topic</th>
            <th scope="col">Date/Time</th>
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
          <a href="/viewreportdoc/{{$row->id}}"><button type="button"class="btn btn-primary">view</button></a>
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
@endsection