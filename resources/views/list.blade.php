<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JHome Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        @extends('layout')

        @section('content')
            
            <div class="container">
                <h1>List de clients...</h1><br>
                    <ul>
                        @foreach ($clients as $client)
                            <li>{{$client->client_name}}</li>
                        @endforeach
                    </ul>
                <form action="list" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Ajouté un nom"/>
                    </div>
                    <button class="btn btn-primary">Ajouté</button>
                </form>
            </div>

        @endsection
        </div>
    </body>
</html>
