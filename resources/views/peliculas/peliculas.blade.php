<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la búsqueda</title>
</head>
<body>
    <h1>Resultados de la búsqueda</h1>
    <p>Mostrando películas dirigidas por {{ $director }}:</p>
    <ul>
        @forelse ($peliculas as $pelicula)
            <li>{{ $pelicula->titulo }}</li>
        @empty
            <li>No se encontraron películas dirigidas por {{ $director }}</li>
        @endforelse
    </ul>
</body>
</html>
