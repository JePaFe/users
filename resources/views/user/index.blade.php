@extends('layouts.admin')

@push('body')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col">
                <h2>Users</h2>
            </div>
            <div class="col text-right">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-2">Create</a>
            </div>
        </div>
        <table class="table table-bordered" id="data-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection

@push('body')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.users.index') !!}',
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'action', orderable: false, searchable: false, width: 1},
                ],
                order: [[0, 'desc']],
            });
        });
    </script>

    <script>
        document.addEventListener('click', function (event) {
            if (!event.target.classList.contains('destroy')) return;

            event.preventDefault(event)

            if (confirm('Are you sure?')) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: event.target.href,
                    success: function () {
                        window.location.href = "/admin/users"
                    }
                })
            }
        }, false);
    </script>
@endpush
