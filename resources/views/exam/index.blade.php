@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="row">

  <div class="col-lg-12 mb-4">
    
      <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{$lecture->name}} - Geçmiş Sınavlar.</h5>
            <hr>
              @foreach ($exams as $exam)
              <li class="list-group-item list-group-item-warning" style="color: black;">
                <a href="/lecture/{{$lecture->id}}/exam/{{$exam->id}}">{{$exam->created_at}}</a>
              </li>
              @endforeach
          </p>
        </div>

  </div>
</div>
</div>
@endsection