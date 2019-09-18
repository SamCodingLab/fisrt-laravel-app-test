<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JHome Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>
    <body>
        
            
            <div class="container"><br>
                <h1>Edit !</h1>
                    <br>
                <form action="{{action('ClientsController@update', [$clients->id])}}" method="post">
                        <div class="form-group">
                                @csrf
                                {{-- @method('PATCH') --}}
                             <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$clients->name}}">
                        </div>
                        @error('name')
                           <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <button type="submit" class="btn btn-danger">Modifié</button>
                </form>
                {{-- <a href="list">Anuulé</a> --}}
            </div>
        </div>
    </body>
</html>
