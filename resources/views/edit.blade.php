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
                <h1>Edit !</h1>
                    <br>
                <form action="list" method="post">
                    <div class="form-control">
                        <input type="text" name="edit" class="form-control">
                    </div>
                </form>
            </div>

        @endsection
        </div>
    </body>
</html>
