<!DOCTYPE html>
<html>
<head>
    <title>Daftar Project</title>
</head>

<body>

    <h1>Daftar Project</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @forelse ($projects as $project)

        <h2>{{ $project->title }}</h2>

        <p>{{ $project->description }}</p>

        <a href="{{ route('projects.show', $project->id) }}">
            Lihat Detail
        </a>

        <br>

        <a href="{{ route('projects.edit', $project->id) }}">
            Edit
        </a>
        
        <br>

        <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
            onsubmit="return confirm('Apakah kamu yakin ingin menghapus project ini?');">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>

        <hr>

    @empty

        <p>Belum ada project.</p>

    @endforelse

    <br>

    <a href="{{ route('projects.create') }}">
        Tambah Project
    </a>

</body>
</html>