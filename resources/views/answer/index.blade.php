@extends('layouts.app')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">Sorular</div>

        <div class="card-body">
        <form action="/lecture/{{$lecture_id}}/exam/{{$exam->id}}/answer" method="post">
            @csrf
            @foreach ($exam->answers as $answer)
                <div class="p-2 border">
                    {!!$answer->question->text!!}
                </div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    @foreach ($answer->question->choices as $choice)
                          <label class="btn btn-secondary active">
                          <input type="radio" name="answers[{{$answer->id}}]" id="{{$choice->choice}}-{{$answer->id}}" autocomplete="off" value="{{$choice->choice}}"> {{$choice->choice}}
                          </label>
                          <label for="{{$choice->choice}}-{{$answer->id}}" class="btn mr-5">{{$choice->text}}</label>    
                    @endforeach
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Tamamla</button>
        </form>
        </div>
    </div>
</div>
@endsection