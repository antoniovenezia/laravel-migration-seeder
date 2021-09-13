<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>

    <body>

        <div class="movie">
        @foreach($allTrips as $trip)
            <h1>ID: {{ $trip->id }}</h1>
            <h1>Destination: {{ $trip->destination }}</h1>
            <h1>Description {{ $trip->description }}</h1>
            <h1>Trip Agency {{ $trip->tripAgency }}</h1>
            <h1>Price: {{ $trip->price }}</h1>
        @endforeach
        </div>


    </body>

</html>
