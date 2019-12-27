@extends('layouts.app')

@section('content')
{{header("Refresh: 3605; url=/")}}
    <div class="card">
        <div class="card-header baslik">
            
            Sorular
            

            @if (Route::currentRouteName() == 'answer')
            <div class="flipTimer text-center float-right">
            <div class="minutes"></div>
            <div class="seconds"></div>
            </div>
            @endif
        </div>

        <div class="card-body">
        <ul id="page-pagination" class="pagination-lg center"></ul>
        <form id="exam-form" action="/lecture/{{$lecture_id}}/exam/{{$exam->id}}/answer" method="post" class="form">
            @csrf
            @php 
                $i = 0;
                $count = $exam->questions->count(); 
            @endphp
            @foreach ($exam->answers as $answer)
            <div class="page" id="page{{++$i}}">
                @if ($answer->question->image != null)
                    <div class="mt-3 mb-3">
                        <img class="img-thumbnail" src="{{$answer->question->image}}"/>  
                    </div>
                @endif
                <div class="p-2 mt-3 mb-2 list-group-item list-group-item-warning text-dark rounded">
                    <b class="text-primary">{{$i}})</b> {!!$answer->question->text!!}
                </div>
                <div class="row">
                @foreach ($answer->question->choices as $choice)
                    @if ($choice->choice == 'C')
                        </div>
                        <div class="row">
                    @endif
                    <div class="inputGroup col-6">
                        <label class="row"  for="{{$choice->choice}}-{{$answer->id}}">
                            @if ($choice->image != null)
                                <div class="col-8">
                            @else 
                                <div class="col-12">
                            @endif
                            <input id="{{$choice->choice}}-{{$answer->id}}" name="answers[{{$answer->id}}]" value="{{$choice->choice}}" type="radio"/>
                            <label class="choice" for="{{$choice->choice}}-{{$answer->id}}"><b>{{$choice->choice}})</b> {!!$choice->text!!}</label> 
                            @if ($choice->image != null)
                                </div>
                                <div class="col-4">
                                    <label class="choicePic" for="{{$choice->choice}}-{{$answer->id}}">
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
                @if ($count == $i)
                    <button type="submit" class="btn btn-primary btn-block">Tamamla</button>
                @endif
            </div>
            @endforeach
        </form>
        </div>
    </div>
@endsection