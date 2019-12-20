@extends('layouts.app')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">Sorular</div>

        <div class="card-body">
        <form action="/lecture/{{$lecture_id}}/exam/{{$exam->id}}/answer" method="post" class="form">
            @csrf
            @foreach ($exam->answers as $answer)
                <div class="p-2 border">
                    {!!$answer->question->text!!}
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
                                            <img src="/img/emre.jpg"/>    
                                    </label> 
                                </div>
                                <div class="col-8">
                            @else
                                <div class="col-12">
                            @endif
                                <input id="{{$choice->choice}}-{{$answer->id}}" name="answers[{{$answer->id}}]" type="radio"/>
                                <label class="choice" for="{{$choice->choice}}-{{$answer->id}}">{{$choice->choice}}-) {!!$choice->text!!}</label> 
                            </div>
                        </label>
                    </div>  

                @endforeach
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Tamamla</button>
        </form>
        </div>
    </div>
</div>
@endsection