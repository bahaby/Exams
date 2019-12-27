@extends('layouts.app')

@section('content')
  @if (Auth::user()->role == 1)
      @include('layouts.content.teacher')
  @else
      @include('layouts.content.student')
  @endif
@endsection