<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud App</title>

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
                    <li>{{$client->name}} <a href="{{action('ClientsController@edit', [$client->id])}}">Modifié</a> <a href="{{action('ClientsController@delete', [$client->id])}}">Supprimé</a></li>
                        @endforeach
                    </ul>
                <form action="list" method="post">
                @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ajouté un nom"/>
                        <br>
                        @error('name')
                           <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Ajouté</button>
                </form>
            </div>

        @endsection
        </div>
    </body>
</html>
