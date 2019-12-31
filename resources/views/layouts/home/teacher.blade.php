
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Hoşgeldin {{ Auth::user()->name }}</h1>
      </div>
  
  
      <!-- Content Row -->
      <div class="row">
  
        <div class="col-lg-6 mb-4">
  
          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Sınavlar</h6>
            </div>
            <div class="card-body">
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                src="/img/teacher.svg" alt="">
              </div>
              <p>E-Class bir online sınav sistemidir. İstediğin zaman <b>Sınav Ekle</b>'ye bastığında sınav ekleyebilirsin. </p>
            </div>
          </div>
  
        </div>
  
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
          <!-- Approach -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Öğretmen Bilgileri</h6>
            </div>
            <div class="card-body">
              <p><b>Ad Soyad: </b>{{Auth::user()->name}}</p>
              <p><b>Kullanıcı Adı: </b>{{Auth::user()->username}}</p>
              <p><b>Email: </b>{{Auth::user()->email}}</p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
  