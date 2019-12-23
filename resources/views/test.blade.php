@extends('layouts.app')

@section('content')

<div class="container">
  
  <!-- Soru textarea Başlangıç -->
    <div class="soru">
    <i class="fas fa-pencil-alt prefix"></i>
    <label for="textArea" class="sorutextheader">Soru Metnini Giriniz :</label>
    <div class="sorutext">

      <textarea id="textArea" rows="3">

      </textarea>
    </div>
    </div>
     <!-- Soru textarea Bitiş -->
      <!-- Soru resim butonu Başlangıç -->
    <div class="upload-btn-wrapper">
      <button class="btn imgBtn ml-3">Resim Ekle</button>
      <input type="file" name="myfile" />
    </div>
     <!-- Soru resim butonu bitiş -->
      <!-- Soru konu butonu Başlangıç -->
    <div class="dropdown">
      <button class="btn imgBtn dropdown-toggle konusec" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Konu Seç
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Üslü Sayılar</a>
        <a class="dropdown-item" href="#">Köklü Sayılar</a>
        <a class="dropdown-item" href="#">Fonksiyonlar</a>
      </div>
    </div>
     <!-- Soru konu butonu Bitiş -->
    
    <div class="mt-4">
        Doğru Şıkkı İşaretle
     <div class="mt-2">
     <div class="row border rounded m-0">
      <div class="col-1">
          <section class="plan cf">
            <input type="radio" name="radio1" id="a" value="a"><label class="m-0 mt-2" for="a">A</label>
          </section>
      </div>
      <div class="col-10">
        <div class="input-group border m-1 rounded">
          <input type="text" class="form-control m-0 p-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="col-1 upload-btn-wrapper">
        <button class="imgBtn btn m-0 mt-2">img</button>
        <input type="file" name="myfile" />
      </div>
    </div>
    <div class="row border rounded m-0">
      <div class="col-1">
          <section class="plan cf">
            <input type="radio" name="radio1" id="a" value="a"><label class="m-0 mt-2" for="a">A</label>
          </section>
      </div>
      <div class="col-10">
        <div class="input-group border m-1 rounded">
          <input type="text" class="form-control m-0 p-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="col-1 upload-btn-wrapper">
        <button class="imgBtn btn m-0 mt-2">img</button>
        <input type="file" name="myfile" />
      </div>
    </div>
    <div class="row border rounded m-0">
      <div class="col-1">
          <section class="plan cf">
            <input type="radio" name="radio1" id="a" value="a"><label class="m-0 mt-2" for="a">A</label>
          </section>
      </div>
      <div class="col-10">
        <div class="input-group border m-1 rounded">
          <input type="text" class="form-control m-0 p-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
      </div>
      <div class="col-1 upload-btn-wrapper">
        <button class="imgBtn btn m-0 mt-2">img</button>
        <input type="file" name="myfile" />
      </div>
    </div>
  </div>
          
          



  
  </div>
  <!-- Gövde Bitiş -->
@endsection