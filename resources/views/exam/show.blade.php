@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="row">

  <div class="col-lg-12 mb-4">
    
      <div class="card">
          <div class="card-header">
            {{$lecture->name}} 
          </div>
          <div class="card-body">
            <hr>
            @foreach ($percentage as $key => $item)
                <li class="list-group-item list-group-item-warning" style="color: black;">{{$lecture->lessons->find($key)->name}} - {{$item}}</li>                
            @endforeach
          </p>
          <hr>
            <a href="/" class="btn btn-primary">Ana Sayfa</a>
          </div>
        </div>

  </div>
</div>
</div>
@endsection