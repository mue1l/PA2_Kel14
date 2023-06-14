@extends('theme.pengajar.main')
@section('title', 'dashboard')
@section('content')
@section('content')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <h4 class="breadcrumb-item">PENDAFTARAN</h4>
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
                        <h6 class="card-title">Data Pendaftaran</h6>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            @foreach ($pendaftaran as $item)
                                <img style=" width: 1200px;
                                height: 800px;"
                                    src="{{ asset('images/pendaftaran/' . $item->avatar) }}" />
                            @endforeach
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
