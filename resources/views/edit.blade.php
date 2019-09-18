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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                  @endif
                      
                  
                <form action="{{action('ClientsController@update', [$clients->id])}}" method="post">
                        <div class="form-group">
                                @csrf
                                {{-- @method('PATCH') --}}
                             <input type="text" name="name" class="form-control" value="{{$clients->name}}">
                        </div>
                    <button type="submit" class="btn btn-danger">Modifié</button>
                </form>
            </div>
        @endsection
        </div>
    </body>
</html>
