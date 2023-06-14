<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <h1>Data Request Surat Pada Masyarakat Desa Sipahutar</h1>
    <table id="dataTableExample" class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Permintaan surat</th>
                <th>Tujuan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($request_surat as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->nomorhp }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->tujuan }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
