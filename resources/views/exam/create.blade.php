@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class="row">

  <div class="col-lg-12 mb-4">
    
      <div class="card">
          <div class="card-header">
            {{$lecture_name}} 
          </div>
          <div class="card-body">
            <h5 class="card-title">Sınava başlamadan önce bilinmesi gerekenler.</h5>
            <hr>

              <li class="list-group-item list-group-item-warning" style="color: black;">· Sınav Süresi 60 dakika'dır.</li>
              <li class="list-group-item list-group-item-warning" style="color: black;">· 50 Sorudan Oluşmaktadır.</li>
              <li class="list-group-item list-group-item-warning" style="color: black;">· Boş bırakılan sorular yanlış olarak değerlendirilmektedir.</li>
          </p>
          <hr>
            <p class="card-text">Sınava başlamak için aşağıdaki butona tıklayın.</p>
            <a href="/lecture/{{$lecture_id}}/exam/{{$exam_id}}/answer" class="btn btn-primary">Sınava Başla</a>
          </div>
        </div>

  </div>
</div>
</div>
@endsection