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
            
            <div class="container"><br>
                <h1>Bienvenue !</h1>
                    <br>
                <div class="jumbotron">
                        <h1 class="display-4">Ma CRUD App test Laravel</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-primary btn-lg" href="list" role="button">Voir la list</a>
                      </div>
            </div>

        @endsection
        </div>
    </body>
</html>
