<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Registrasi Anggota</title>
</head>
<body>
    <div>
        <h2>Registrasi Anggota</h2>
        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama : </label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>       
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>       
            <div class="mb-3">
                <label for="foto_profile" class="form-label">Foto Profile : </label>
                <input type="file" class="form-control" id="foto_profile" name="foto_profile" required>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>       
        </form>
    </div>
</body>
</html>