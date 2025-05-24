@extends('layouts.master')

@section('title', 'HMTGGEOI')

@section('pageContent')

    @include('layouts.breadcrumb', ['title' => 'Alumni', 'subtitle' => 'Dashboard'])
    <div class="card w-100 position-relative overflow-hidden">
        {{-- <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Basic Table</h4>
        </div> --}}
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" id="btnAlumni" data-bs-toggle="modal"
                data-bs-target="#modalAlumni">
                + Tambah Alumni
            </button> @include('layouts.message')
            <div class="search">
                <div class="mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari...">
                </div>
                <div id="noDataMessage" class="alert alert-warning" style="display: none;">
                    Data tidak ditemukan.
                </div>
            </div>
            <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead>
                        <tr class="text-nowrap text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>No Telepon</th>
                            <th>Tahun</th>
                            <th>Created Date</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="text-center">
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">{{$item->name}}</td>
                                <td scope="row">{{$item->npm}}</td>
                                <td scope="row">{{$item->phone}}</td>
                                <td scope="row">{{$item->year}}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y h:i A') }}

                                </td>
                                <td>
                                    <div class="btn-group-horizontal">
                                        <a href="{{ route('alumni.edit', $item->id) }}"
                                            class="btn btn-warning mb-2 rounded"><i class="fa fa-pen-to-square"
                                                style="color:white;"></i></a>
                                        <button class="btn btn-danger delete-btn rounded mb-2"
                                            data-id="{{ $item->id }}"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-2">{{ $data->links() }}</div>
        </div>
    </div>

    <!-- Modal Buat dan Edit Undangan -->
    <div class="modal fade" id="modalAlumni" tabindex="-1" aria-labelledby="modalAlumniLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modalAlumniLabel">Buat/Edit Undangan</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formAlumni" action="{{ route('alumni.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="undanganId">
                        <div class="form-group mb-2">
                            <label for="name">Nama Alumni<span class="mandatory">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama alumni" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="npm">NPM<span class="mandatory">*</span></label>
                            <input type="number" name="npm" id="npm" class="form-control" placeholder="Masukkan NPM" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone">No Telepon<span class="mandatory">*</span></label>
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Masukkan no telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="year">Tahun <span class="mandatory">*</span></label>
                            <input type="number" name="year" id="year" class="form-control" placeholder="Masukkan tahun" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" form="formAlumni">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Hidden form for delete -->
    <form id="deleteForm" method="POST" style="display:none;">
        @csrf
        @method('DELETE')
    </form>

    <script>
        // Event listener untuk tombol "Buat Undangan"
        document.getElementById('btnAlumni').addEventListener('click', function() {
            // Reset form action ke route store dan kosongkan field input
            document.getElementById('formAlumni').reset();
            document.getElementById('formAlumni').action = "{{ route('alumni.store') }}";

            // Ubah title modal jadi "Buat Undangan Baru"
            document.getElementById('modalAlumniLabel').textContent = 'Buat Undangan Baru';
        });

        // Event listener untuk tombol edit
        document.querySelectorAll('.edit-btn').forEach(function(button) {
            button.addEventListener('click', function(event) {
                var id = this.getAttribute('data-id');
                var name = this.getAttribute('data-nama-pasangan');
                var tgl_pernikahan = this.getAttribute('data-tgl-pernikahan');

                // Set form action untuk update
                document.getElementById('formAlumni').action = '/alumni/' + id + '/update';

                // Isi form dengan data dari tombol edit
                document.getElementById('undanganId').value = id;
                document.getElementById('name').value = name;
                document.getElementById('tgl_pernikahan').value = tgl_pernikahan;

                // Ubah title modal jadi "Edit Undangan"
                document.getElementById('modalAlumniLabel').textContent = 'Edit Undangan';

                // Buka modal
                var modal = new bootstrap.Modal(document.getElementById('modalAlumni'));
                modal.show();
            });
        });
    </script>


    <script>
        document.querySelectorAll('.delete-btn').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var itemId = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    text: "Data ini akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#3086d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Set the action URL for the delete form
                        document.getElementById('deleteForm').action =
                            "{{ url('alumni') }}/" + itemId;
                        // Submit the form
                        document.getElementById('deleteForm').submit();
                        Swal.fire({
                            title: 'Terhapus',
                            text: "Data berhasil dihapus",
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });
        });

        // Search functionality
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

            noDataMessage.style.display = found ? 'none' : 'block';
        });
    </script>
@endsection

@section('scripts')
@endsection
