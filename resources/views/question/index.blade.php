@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="float-left">Sorular</h5>
            <a href="/question/create" class="btn btn-primary btn-sm active float-right" role="button" aria-pressed="true">Geri dön</a>

        </div>

        <div class="card-body">




            @php 
                $i = $questions->count();
            @endphp
            @foreach ($questions as $question)
            <div class="card-body mb-3 rounded" style="background-color:aliceblue;">
                @if ($question->image != null)
                    <div class="mt-3 mb-3">
                        <img class="img-thumbnail" src="{{$question->image}}"/>  
                    </div>
                @endif
                <div class="p-2 mt-3 mb-2 list-group-item list-group-item-warning text-dark rounded">
                    <b class="text-primary">{{$i--}})</b> {!!$question->text!!}
                </div>
                <div class="row">
                @foreach ($question->choices as $choice)
                    @if ($choice->choice == 'C')
                        </div>
                        <div class="row">
                    @endif
                    <div class="inputGroup col-6" style="background-color:aliceblue;">
                        <label class="row"  for="{{$choice->choice}}-{{$question->id}}">
                            @if ($choice->image != null)
                                <div class="col-8">
                            @else 
                                <div class="col-12">
                            @endif
                            <input id="{{$choice->choice}}-{{$question->id}}" value="{{$choice->choice}}" />
                            <label class="choice" for="{{$choice->choice}}-{{$choice->id}}"><b>{{$choice->choice}})</b> {!!$choice->text!!}</label> 
                            @if ($choice->image != null)
                                </div>
                                <div class="col-4">
                                    <label class="choicePic" for="{{$choice->choice}}-{{$question->id}}">
                                            <img class="img-thumbnail" src="{{$choice->image}}"/>    
                                    </label> 
                                </div>
                            @else 
                                </div>
                            @endif
                        </label>
                    </div>  

                @endforeach
                </div>
            </div>
            @endforeach


        </div>
    </div>
@endsection