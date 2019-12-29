@extends('layouts.app')

@section('content')
<div class="col-lg-12">

      <div class="row">
        @foreach ($lectures as $lecture)
        <div class="col-sm-6 mb-3">
          <div class="card">
            <div class="card-header"><b>Ders: </b>{{$lecture->name}}</div>
            <div class="card-body">
              <p class="card-text">{{$lecture->name}} sınavına girmek için başla tuşuna basınız.</p>
              <a href="/lecture/{{$lecture->id}}/exam/create" class="btn btn-primary">Başla</a>
            </div>
          </div>
        </div>
        @endforeach

    </div>

</div>
@endsection