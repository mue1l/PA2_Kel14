@extends('theme.admin.main')
@section('title', 'hasiltani')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
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
                            <a href="{{ route('admin.hasiltani.create') }}" class="btn btn-primary">Tambah</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                @foreach ($hasiltani as $item)
                                    <tr>
                                        <th>Name :</th>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="text">
                                                Deskripsi :
                                            </p>
                                        </th>
                                        <td>{{ $item->deskripsi }}</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.hasiltani.edit', $item->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('admin.hasiltani.destroy', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
