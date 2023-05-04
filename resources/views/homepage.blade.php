<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Watched Movies</title>

        {{-- Include Assets --}}
        @vite('resources/js/app.js');
    </head>

    <body>
        <div class="container">
            <h1 class="text-center">Watched Movies</h1>

            {{-- * Movies Array --}}
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie -> title }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie -> original_title }}</h6>
                      <p class="card-text">{{ $movie -> nationality }}</p>
                      <a href="#" class="card-link">{{ $movie -> date }}</a>
                      <a href="#" class="card-link">{{ $movie -> vote }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
