@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="row">

  <div class="col-12 mb-4">
    
      <div class="card">
          <div class="card-body" >
            <h5 class="card-title">{{$lecture->name}} - Geçmiş Sınavlar.</h5>
            <hr>
              {{-- @foreach ($exams as $exam)
              <li class="list-group-item list-group-item-warning" style="color: black;">
                <a href="/lecture/{{$lecture->id}}/exam/{{$exam->id}}">{{$exam->created_at}}</a>
              </li>
              @endforeach --}}
              <div>
              {!! $chart->container() !!}
            </div>
            <div class="row" style="margin-left: 29px; margin-right: 4px; margin-top: -30px;">
              @foreach ($exams as $exam)
            <a href="/lecture/{{$lecture->id}}/exam/{{$exam->id}}" class=" btn btn-light col-sm text-center">{{$exam->created_at->format('d-m-y')}}</a>
              @endforeach
            </div>
        </div>
  </div>
</div>
</div>
{!! $chart->script() !!}
@endsection