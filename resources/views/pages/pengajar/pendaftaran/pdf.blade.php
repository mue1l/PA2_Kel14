<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Data Pendaftaran pada Anak PAUD</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Nama Orang Tua</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftaran as $item)
                <tr>
                    <td>{{ $item->nama_anak }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->nama_orangtua }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
