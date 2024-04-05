@extends('layouts.app')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <a class="btn btn-primary mb-3" href="{{ url('undangan-alternative1/create') }}">+ Buat Undangan</a>
            @include('layouts.message')
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Undangan Alternative 1</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>No</th>
                                <th>Foto Prewedding</th>
                                <th>Mempelai</th>
                                <th>Tanggal Pernikahan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = $data->firstItem(); ?>
                            @foreach ($data as $item)
                                <tr class="text-center">
                                    <th scope="row">{{ $i }}</th>
                                    <td>
                                        <img src="{{ Storage::url('' . $item->banner_img) }}" width="120" height="120"
                                            alt="Foto Prewedding">
                                    </td>
                                    <td scope="row">{{ $item->nama_mempelai_laki }} &
                                        {{ $item->nama_mempelai_perempuan }}</td>
                                    <td scope="row">
                                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tgl_akad)->format('d-m-Y') }}
                                    </td>
                                    {{-- <td scope="row">
                                        @php
                                            $namaUndanganArray = json_decode($item->nama_undangan);
                                            $namaUndanganString = implode(', ', $namaUndanganArray);
                                            echo $namaUndanganString;
                                        @endphp
                                    </td> --}}
                                    <td scope="row">
                                        <a href="{{ url('undangan-alternative1/' . $item->id) . '/edit' }}"
                                            class="btn btn-warning mb-2"><i class=" fa fa-solid fa-pen-to-square"
                                                style="color:white;"></i></a>
                                        <form action="{{ url('undangan-alternative1/' . $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mb-2"><i
                                                    class="fa fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


        <!--/ Responsive Table -->
        <!-- / Content -->
        @include('layouts.footer')

        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
            integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
        </script>

    </main>
@endsection
<!-- Content -->
