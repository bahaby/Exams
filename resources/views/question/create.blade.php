@extends('layouts.app')

@section('content')
<div class="container-fluid">

        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/question" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group border p-1">
                    <label for="text">Soru Metni</label>
                    <textarea class="form-control" name="text" id="text" rows="3"></textarea>
                    <input type="file" name="image" id="">
                </div>
                <p>Şıklar</p>
                <div class="form-group border p-1">
                    <small id="helpIdA" >A</small>
                    <input type="text" name="choiceAtext" id="" class="form-control" placeholder="" aria-describedby="helpIdA">
                    <input type="file" name="choiceAimage" id="">
                </div>
                
                <div class="form-group border p-1">
                    <small id="helpIdB" >B</small>
                    <input type="text" name="choiceBtext" id="" class="form-control" placeholder="" aria-describedby="helpIdB">
                    <input type="file" name="choiceBimage" id="">
                </div>
                <div class="form-group border p-1">
                    <small id="helpIdC" >C</small>
                    <input type="text" name="choiceCtext" id="" class="form-control" placeholder="" aria-describedby="helpIdC">
                    <input type="file" name="choiceCimage" id="">
                </div>
                <div class="form-group border p-1">
                    <small id="helpIdD" >D</small>
                    <input type="text" name="choiceDtext" id="" class="form-control" placeholder="" aria-describedby="helpIdD">
                    <input type="file" name="choiceDimage" id="">
                </div>
                <p>Doğru Cevap</p>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="answer" id="" value="A" checked>
                    A
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="answer" id="" value="B">
                    B
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="answer" id="" value="C">
                    C
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="answer" id="" value="D">
                    D
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Ekle</button>
            </form>
        </div>
        <div class = "radio">
            <label>
               <input type = "radio" name = "optionsRadios" id = "optionsRadios1" value = "option1" checked> Suits
            </label>
         </div>
         <div class = "radio">
            <label>
               <input type = "radio" name = "optionsRadios" id = "optionsRadios2" value = "option2">
                  House of Cards
            </label>
         </div>
</div>
@endsection