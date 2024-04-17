@extends('layouts.app')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <a class="btn btn-primary mb-3" href="{{ url('undangan-alternative1/create') }}">+ Buat Undangan</a>
            @include('layouts.message')
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Undangan Alternative 1</h5>
                <div class="p-3">
                    <div class="mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari...">
                    </div>
                    <div id="noDataMessage" class="alert alert-warning" style="display: none;">
                        Data tidak ditemukan.
                    </div>
                </div>

                <div class="table-responsive text-nowrap p-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-nowrap text-center">
                                <th>No</th>
                                <th>Nama Undangan</th>
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
                                <td scope="row">{{ $item->nama_undangan }}</td>
                                <td>
                                    <img src="{{ Storage::url('' . $item->banner_img) }}" width="120" height="120" alt="Foto Prewedding">
                                </td>
                                <td scope="row">{{ $item->nama_mempelai_laki }} & {{ $item->nama_mempelai_perempuan }}</td>
                                <td scope="row">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tgl_akad)->format('d-m-Y') }}
                                </td>
                                <td scope="row">
                                    <a href="{{ url('undangan-alternative1/' . $item->id) . '/edit' }}" class="btn btn-warning mb-2"><i
                                            class=" fa fa-solid fa-pen-to-square" style="color:white;"></i></a>
                                    <form action="{{ url('undangan-alternative1/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="{{ route('undangan-alt1-home', [
                                                'nama_mempelai_laki' => $item->nama_mempelai_laki,
                                                'nama_mempelai_perempuan' => $item->nama_mempelai_perempuan,
                                                'nama_undangan' => $item->nama_undangan,
                                            ]) }}" target="_blank" class="btn btn-secondary mb-2"><i class=" fa fa-solid fa-link"
                                            style="color:white;"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <div class="p-2">{{ $data->links() }}</div>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('.table tbody tr');
        const noDataMessage = document.getElementById('noDataMessage');

        searchInput.addEventListener('input', function() {
            const searchText = this.value.toLowerCase();
            let found = false;

            tableRows.forEach(function(row) {
                const rowData = row.innerText.toLowerCase();
                if (rowData.includes(searchText)) {
                    row.style.display = '';
                    found = true;
                } else {
                    row.style.display = 'none';
                }
            });

            if (!found) {
                noDataMessage.style.display = 'block';
            } else {
                noDataMessage.style.display = 'none';
            }
        });
    });
</script>


<!-- Content -->
