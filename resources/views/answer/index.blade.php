@extends('layouts.app')

@section('content')
{{header("Refresh: 3605; url=/")}}
    <div class="card">
        <div class="card-header">Sorular</div>

        <div class="card-body">
        <ul id="page-pagination" class="pagination-lg center"></ul>
        <form action="/lecture/{{$lecture_id}}/exam/{{$exam->id}}/answer" method="post" class="form">
            @csrf
            @php 
                $i = 0;
                $count = $exam->questions->count(); 
            @endphp
            @foreach ($exam->answers as $answer)
            <div class="page" id="page{{++$i}}">
                <div class="p-2 border">
                    {{$i}}) {!!$answer->question->text!!}
                </div>
                <div class="row">
                @foreach ($answer->question->choices as $choice)
                    @if ($choice->choice == 'C')
                        </div>
                        <div class="row">
                    @endif
                    <div class="inputGroup col-6">
                        <label class="row"  for="{{$choice->choice}}-{{$answer->id}}">
                            @if ($choice->image != '1')
                                <div class="col-4">
                                    <label class="choicePic" for="{{$choice->choice}}-{{$answer->id}}">
                                            <img class="img-thumbnail" src="{{$choice->image}}"/>    
                                    </label> 
                                </div>
                                <div class="col-8">
                            @else
                                <div class="col-12">
                            @endif
                                <input id="{{$choice->choice}}-{{$answer->id}}" name="answers[{{$answer->id}}]" value="{{$choice->choice}}" type="radio"/>
                                <label class="choice" for="{{$choice->choice}}-{{$answer->id}}">{{$choice->choice}}-) {!!$choice->text!!}</label> 
                            </div>
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