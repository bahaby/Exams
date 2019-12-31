@extends('layouts.app')

@section('content')
  @if (Auth::user()->lecture_id == null)
    @include('layouts.home.student')
  @else
    @include('layouts.home.teacher')
  @endif
@endsection