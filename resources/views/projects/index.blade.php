<!DOCTYPE html>
<html>
<head>
    <title>Daftar Project</title>

    <style>
        table {
            width: 80%;
            border-collapse: collapse;
        }

        th {
            background-color: #3498db;
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #3498db;
        }
    </style>
</head>

<body>

    <h1>Daftar Project</h1>

    <table>
        <tr>
            <th>No</th>
            <th>Judul Project</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @forelse ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}">
                        Lihat Detail
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada project.</td>
            </tr>
        @endforelse

    </table>

    <br>

    <a href="{{ route('projects.create') }}">
        Tambah Project
    </a>

</body>
</html>