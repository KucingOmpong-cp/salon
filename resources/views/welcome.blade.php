@include('web')
        <div class="jumbotron h-static mb-0 d-flex align-items-center text-center hide" id="main">
            <div class="container">
                <h1 class="display-4 text-white">Nama Salon</h1>
                <p class="lead text-white">Tagline Salon</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button" onclick="hide()">Booking Sekarang</a>
                </p>
            </div>
        </div>
        <div class="container h-static d-flex align-items-center align-items-sm-end hide" id="form">
            <div class="row w-100 ml-1">
              <div class="col-12 col-sm-7 d-flex align-items-center">
                <form class="w-100">
                    <div class="row">
                        <div class="col form-group">
                            <label class="text-white" for="formGroupExampleInput">Nama</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Siti Julaeha">
                        </div>
                        <div class="col form-group">
                            <label class="text-white" for="formGroupExampleInput">Nomor Telepon</label>
                            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="08210000000">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label class="text-white" for="formGroupExampleInput">Tanggal Booking</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="15 Januari 2021">
                        </div>
                        <div class="col form-group">
                            <label class="text-white" for="formGroupExampleInput">Waktu Booking</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="13:00">
                        </div>
                      </div>
                      <a href="#" class="btn btn-primary float-right mt-3">Booking Sekarang</a>
                </form>
              </div>
              <div class="col-5 d-none d-sm-block">
                <img class="w-100" src="{{ asset('assets/img/web-home.png') }}" alt="">
              </div>
            </div>
        </div>
        <div class="container h-static d-flex justify-content-center align-items-center" id="print">
            <div class="card">
                <div class="card-header text-center">
                  Terimakasih
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Kode Booking : AS00001233445</h5>
                  <p class="card-text">Tanggal 12 Januari 2021 Jam 13:00</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <script>
            function hide(){
                $('#main').toggleClass('hide');
            }
        </script>
@include('footer')