@extends('layouts.app')

@section('content')


  <div class="col-lg-12 mb-4">
    
      <div class="card">
        <div class="card-header">
          <h5 class="card-title float-left">{{$lecture->name}} - Son sınavlar.</h5>
          <div class="dropdown float-right">
            <button class="btn btn-secondary dropdown-toggle bg-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Bütün Sınavlar
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @php $i=$exams->count() @endphp
              @foreach ($exams as $exam)
                <a href="/lecture/{{$lecture->id}}/exam/{{$exam->id}}" class="dropdown-item"><b class="text-primary">{{$i--}}) </b>{{$exam->created_at->format('d-m-y')}}</a>
              @endforeach
            </div>
          </div>
        </div>
            <div class="card-body" >
              <hr>
              <div>
                {!! $chart->container() !!}
              </div>
              <div class="row" style="margin-left: 29px; margin-right: 3px; margin-top: -30px;">
                @foreach ($chartExams as $exam)
              <a href="/lecture/{{$lecture->id}}/exam/{{$exam->id}}" class=" btn btn-light col-sm text-center">{{$exam->created_at->format('d-m-y')}}</a>
                @endforeach
              </div>
            </div>
        </div>
  </div>
{!! $chart->script() !!}
@endsection