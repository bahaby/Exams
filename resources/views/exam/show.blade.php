@extends('layouts.app')

@section('content')

  <div class="col-lg-12 mb-4">
    
      <div class="card">
          <div class="card-header">
            <h4 class="m-0">Genel Not: <span class="badge {{($grade < 45)?'badge-danger':'badge-success'}} m-0">{{$grade}}</span></h4>
          </div>
          <div class="card-body">
            <hr>
            <div>
            {!! $chart->container() !!}
          </div>
          </p>
          <hr>
            <a href="/lecture/{{$lecture->id}}/exam" class="btn btn-primary">Son Sınavlar</a>
          </div>
        </div>

  </div>
{!! $chart->script() !!}
@endsection