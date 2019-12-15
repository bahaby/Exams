@extends('layouts.app')

@section('content')
<div class="col-10">

    <div class="list-group col-4">
        @foreach ($lectures as $lecture)
        <form action="{{route('exam')}}" method="post">
          @csrf
          <input type="hidden" name="lecture" value="{{$lecture->id}}">
          <button class="list-group-item list-group-item-action list-group-item-dark">{{$lecture->name}}</button>
        </form>
        @endforeach
      </div>
</div>
@endsection