<!DOCTYPE html>
<html>
<head>
    <title>Tambah Project</title>
</head>
<body>

    <h1>Tambah Project</h1>

    @if ($errors->any())
        <div>
            <h3>Terjadi Error:</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <label>Judul Project:</label><br>
        <input type="text" name="title" value="{{ old('title') }}">
        <br><br>

        <label>Deskripsi:</label><br>
        <textarea name="description">{{ old('description') }}</textarea>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="{{ route('projects.index') }}">
        Kembali ke Daftar Project
    </a>

</body>
</html>