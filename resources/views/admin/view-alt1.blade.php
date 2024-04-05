@extends('layouts.app')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y vh-100">
            <!-- Responsive Table -->
            <div class="row mb-5">
                @foreach ($data as $item)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('storage/images' . $item->banner_img) }}"
                                alt="Card image cap" />
                            <img class="card-img-top" src="{{ Storage::url('public/images/' . $item->banner_img) }}"
                                alt="Card image cap" />

                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_mempelai_laki }}</h5>
                                <h6 class="card-text">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tgl_akad)->format('d-m-Y') }} </h6>
                                <p class="card-text">
                                    {{ $item->alamat_akad }}
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">Open Invitation</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
