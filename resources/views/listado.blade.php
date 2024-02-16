<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Películas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        h1 {
            color: #fff;
            background-color: #e50914;
            padding: 15px;
            text-align: center;
        }

        .pelicula {
            display: flex;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pelicula img {
            width: 150px;
            height: auto;
            object-fit: cover;
        }

        .pelicula-info {
            flex: 1;
            padding: 20px;
        }

        .pelicula-info h2 {
            margin-top: 0;
        }

        .pelicula-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Películas</h1>
        <div class="peliculas">
            @forelse ($arrayPeliculas as $pelicula)
                <div class="pelicula">
                    <img src="{{ $pelicula['poster'] }}" alt="{{ $pelicula['title'] }}">
                    <div class="pelicula-info">
                        <h2>{{ $pelicula['year'] }} ({{ $pelicula['year'] }})</h2>
                        <p>{{ $pelicula['title'] }}</p>
                        <p><strong>Director:</strong> {{ $pelicula['director'] }}</p>
                 
                    </div>
                </div>
            @empty
                <p>No se encontraron películas</p>
            @endforelse
        </div>
        <p><a href="{{ route('create_peliculas') }}">Añadir pelicula</a></p>
    </div>
</body>
</html>

