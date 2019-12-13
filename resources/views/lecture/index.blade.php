@extends('layouts.app')

@section('content')
<div class="col-10">

    <div class="list-group col-4">
        @foreach ($lectures as $lecture)
        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">{{$lecture->name}}</a>
        @endforeach
      </div>
</div>
@endsection