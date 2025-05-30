<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Ruangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h2>Daftar Ruangan</h2>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Ruangan</th>
                    <th>Deskripsi</th>
                    <th>Kapasitas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ruangan as $r)
                <tr>
                    <td>{{ $r->nama }}</td>
                    <td>{{ $r->deskripsi }}</td>
                    <td>{{ $r->kapasitas }}</td>
                    <td>{{ $r->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
