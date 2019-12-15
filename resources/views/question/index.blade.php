@extends('layouts.app')

@section('content')
<div class="col-10">
    <div class="card">
        <div class="card-header">Sorular</div>

        <div class="card-body">
            @foreach ($questions as $question)
                <div class="p-2 border">
                    {!!$question->text!!}
                </div>
                <div class="row">
                    @foreach ($question->choices as $choice)
                        <div class="col-6 pt-2">
                            <div class="form-group form-inline">
                                <a href="#" class="col-1 list-group-item list-group-item-action active">{{$choice->choice}}</a>
                                <a href="#" class="col-10 list-group-item list-group-item-action">{!!$choice->text!!}</a>

                                
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection