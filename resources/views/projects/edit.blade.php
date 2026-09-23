<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
</head>

<body>

    <h1>Edit Project</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="title">Judul Project</label>
        <br>
        <input
            type="text"
            id="title"
            name="title"
            value="{{ $project->title }}"
        >

        <br><br>

        <label for="description">Deskripsi Project</label>
        <br>
        <textarea
            id="description"
            name="description"
            rows="5"
            cols="40"
        >{{ $project->description }}</textarea>

        <br><br>

        <button type="submit">Simpan Perubahan</button>

    </form>

    <br>

    <a href="{{ route('projects.index') }}">
        Kembali
    </a>

</body>
</html>

<!-- Masukin ini full kode -->