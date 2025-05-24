@extends('layouts.master')

@section('title', 'HMTGGEOI')

@section('pageContent')

@include('layouts.breadcrumb', ['title' => 'GEOI Fair', 'subtitle' => 'Dashboard'])
    <div class="card w-100 position-relative overflow-hidden">
        {{-- <div class="px-4 py-3 border-bottom">
            <h4 class="card-title mb-0">Basic Table</h4>
        </div> --}}
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('geoi-fair.create') }}">+ Buat Artikel</a>
            @include('layouts.message')
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
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Created Date</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="text-center">
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>
                                    <img class="img-fluid" src="{{ Storage::url('geoi/' . $item->image) }}"
                                        width="120" height="120" alt="Foto geoi-fair">
                                </td>
                                <td>{{ Str::limit($item->title, 50) }}</td>
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y h:i A') }}

                                </td>
                                <td>
                                    <div class="btn-group-horizontal">
                                        <a href="{{ route('geoi-fair.edit', $item->id) }}"
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

    <!-- Hidden form for delete -->
    <form id="deleteForm" method="POST" style="display:none;">
        @csrf
        @method('DELETE')
    </form>

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
                            "{{ url('geoi-fair') }}/" + itemId;
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
