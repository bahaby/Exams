@extends('layouts.app')

@section('content')


  <div class="col-lg-12 mb-4">
    
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">{{$lecture->name}} - Geçmiş Sınavlar.</h5>
        </div>
            <div class="card-body" >
              <hr>
              <div>
                {!! $chart->container() !!}
              </div>
              <div class="row" style="margin-left: 29px; margin-right: 3px; margin-top: -30px;">
                @foreach ($exams as $exam)
              <a href="/lecture/{{$lecture->id}}/exam/{{$exam->id}}" class=" btn btn-light col-sm text-center">{{$exam->created_at->format('d-m-y')}}</a>
                @endforeach
              </div>
            </div>
        </div>
  </div>
{!! $chart->script() !!}
@endsection