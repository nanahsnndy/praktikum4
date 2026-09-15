<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project</title>
</head>
<body>
    <h1>Detail Project</h1>
    <h2>{{ $project->title }}</h2>

    <p>{{ $project->description }}</p>

    <br>

    <a href="{{ route('projects.index') }}">
        Kembali ke Daftar Project
    </a>
</body>
</html>