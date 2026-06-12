<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Data Anggota</title>
</head>
<body>
    
    <div class="container mt-4 mx-auto" style="max-width: 75%;">
        <h2 class="mb-4">Daftar Anggota</h2>
        <!-- Tables -->
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($anggotas as $anggota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td> <img src={{ asset('storage/ $anggota->foto_profile')}}</td>
                    <td>{{ $anggota->foto_profile }}</td>
                    <td>show Edit Delete</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Tidak Ada Data Anggota</td>
                </tr>
                
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>