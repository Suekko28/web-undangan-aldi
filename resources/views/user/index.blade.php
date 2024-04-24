@extends('layouts.app')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y">
            <a class="btn btn-primary mb-3" href="{{ route('nama-undangan-create', ['id' => $undanganAlt1->id]) }}">+ Buat
                Undangan</a>
            @include('layouts.message')
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Undangan Alternative 1</h5>
                <div class="p-3">
                    <div class="mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari...">
                    </div>
                    <div id="nonamaUndangansMessage" class="alert alert-warning" style="display: none;">
                        Nama Undangan tidak ditemukan.
                    </div>
                </div>

                <div class="table-responsive text-nowrap p-3">
                    <form id="deleteForm" action="{{ route('nama-undangan.destroy', ['id' => $undanganAlt1->id]) }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <table class="table table-bordered">
                            <button type="submit" class="btn btn-danger mb-3" id="deleteSelected">Hapus yang
                                Dipilih</button>
                            <thead>
                                <tr class="text-nowrap text-center">
                                    <th><input type="checkbox" id="selectAll"></th>
                                    <th>No</th>
                                    <th>Nama Undangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $namaUndangans->firstItem(); ?>
                                @foreach ($namaUndangans as $item)
                                    <tr class="text-center">
                                        <td><input type="checkbox" class="delete-checkbox" name="selected[]"
                                                value="{{ $item->id }}"></td>
                                        <td scope="row">{{ $i }}</td>
                                        <td scope="row">{{ $item->nama_undangan }}</td>
                                        <td>
                                            <div class="btn-group-vertical">
                                                <a href="{{ url('nama-undangan/' . $item->id) . '/edit' }}"
                                                    class="btn btn-warning mb-2 rounded"><i class="fa fa-pen-to-square"
                                                        style="color:white;"></i></a>
                                                <button class="btn btn-danger delete-btn rounded mb-2"
                                                    namaUndangans-id="{{ $item->id }}"><i
                                                        class="fa fa-trash"></i></button>
                                                <a href="" target="_blank" class="btn btn-primary rounded mb-2">
                                                    <i class="fa fa-link" style="color:white;"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="p-2">{{ $namaUndangans->links() }}</div>
            </div>
        </div>
    </main>

    @include('layouts.footer')

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
        integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
    </script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk menangani pemilihan semua checkbox
    document.getElementById('selectAll').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('.delete-checkbox');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = document.getElementById('selectAll').checked;
        });
    });

    // Menangani klik pada tombol delete
    var deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var itemId = this.getAttribute('namaUndangans-id');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').action =
                        "{{ route('nama-undangan.destroy', ['id' => ':id']) }}"
                        .replace(':id', itemId);
                    document.getElementById('deleteForm').submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                }
            });
        });
    });

    // Menangani penghapusan saat tombol "Hapus yang Dipilih" ditekan
    document.getElementById('deleteSelected').addEventListener('click', function(event) {
        event.preventDefault();

        // Cek apakah ada setidaknya satu checkbox yang dicentang
        var anyChecked = false;
        var checkboxes = document.querySelectorAll('.delete-checkbox');
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                anyChecked = true;
            }
        });

        if (anyChecked) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                    Swal.fire(
                        'Deleted!',
                        'Your files have been deleted.',
                        'success'
                    );
                }
            });
        } else {
            Swal.fire(
                'No checkbox selected',
                'Please select at least one item to delete',
                'error'
            );
        }
    });
});

    </script>
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
