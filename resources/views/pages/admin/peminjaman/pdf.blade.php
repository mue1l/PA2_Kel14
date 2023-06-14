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
    <h1>Data Peminjaman Masyarakat Desa Sipahutar</h1>
    <table id="dataTableExample" class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nama Alat</th>
                <th>Jumlah Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pemulangan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
                <tr>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->user->alamat }}</td>
                    <td>{{ $item->namaalat }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->tanggal_peminjaman }}</td>
                    <td>{{ $item->tanggal_pemulangan }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
