@extends('layouts.app')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y vh-100">
            <!-- Responsive Table -->
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                      </p>
                      <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                          <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                          <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
              </div>
          
            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
        @include('layouts.footer')

        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
            integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
        </script>

    </main>
@endsection
<!-- Content -->
