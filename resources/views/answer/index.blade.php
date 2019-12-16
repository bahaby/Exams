@extends('layouts.app')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">Sorular</div>

        <div class="card-body">
            @foreach ($exam->questions as $question)
                <div class="p-2 border">
                    {!!$question->text!!}
                </div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    @foreach ($question->choices as $choice)
                          <label class="btn btn-secondary active">
                            <input type="radio" name="options" id="option1" autocomplete="off"> A
                          </label>
                          <label for="option1" class="btn mr-5">cevap 1</label>
                                
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection