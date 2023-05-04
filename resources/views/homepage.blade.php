<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista Film</title>

        {{-- Include Assets --}}
        @vite('resources/js/app.js');
    </head>

    <body>
        <div class="container">
            <h1 class="text-center">Lista Film</h1>

            {{-- * Movies Array --}}
            <div class="row row-cols-md-5 row-cols-sm-3 g-4 mt-5">
                @foreach ($movies as $movie)
                <div class="col">
                    <div class="card text-bg-dark h-100">
                        <div class="card-header h-100">
                            <h5 class="card-title">Titolo: {{ $movie -> title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie -> original_title }}</h6>
                        </div>
                        <div class="card-body">
                            <div class="card-nation">Nazionalità: {{ $movie -> nationality }}</div>
                            <div class="card-date">Data di uscita: {{ $movie -> date}}</div>
                        </div>
                        <div class="card-footer">
                            <div class="card-vote">Voto: {{ $movie -> vote }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- * // Movies Array --}}
        </div>
    </body>
</html>
