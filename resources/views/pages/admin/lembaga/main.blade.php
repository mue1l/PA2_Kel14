@extends('theme.admin.main')
@section('title', 'lembaga')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">

            </ol>
        </nav>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header row">
                        <h6 class="card-title">Data Table</h6>
                        <span>
                            <a href="{{ route('admin.lembaga.create') }}" class="btn btn-primary">Tambah</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lembaga as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->position }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.lembaga.edit', $item->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('admin.lembaga.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        $('#dataTableExample').DataTable({
            "aLengthMenu": [
                [10, 30, 50, -1],
                [10, 30, 50, "All"]
            ],
            "iDisplayLength": 10,
            "language": {
                search: ""
            }
        });
    </script>
@endsection
