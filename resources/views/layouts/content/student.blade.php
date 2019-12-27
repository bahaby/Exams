
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
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                src="/img/student.svg" alt="">
            </div>
            <p>E-Class bir online sınav sistemidir. İstediğin zaman<a target="_blank" rel="nofollow"
                href="/exam/create"> Sınav OL </a> 'a bastığında sınava katılabilirsin. Geçmiş notlarını
              takip edebilir grafiklerle konu analizi yapabilirsin. </p>
          </div>
        </div>

      </div>

      <!-- Content Column -->
      <div class="col-lg-6 mb-4">
        <!-- Approach -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kullanıcı Bilgileri</h6>
          </div>
          <div class="card-body">
            <p><b>Öğrenci No:</b> 182802088 </p>
          <p class="mb-0"> <b>Ad Soyad:</b> {{Auth::user()->name}}</p>
            <p></p>
          </div>
        </div>
      </div>
    </div>
