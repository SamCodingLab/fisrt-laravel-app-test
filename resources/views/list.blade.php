
        @extends('layout')

        @section('content')
            
            <div class="container">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                <h1>List de clients...</h1><br>
                    <ul>
                        @foreach ($clients as $client)
                    <li>{{$client->name}} <a href="{{action('ClientsController@edit', [$client->id])}}">Modifié</a> <em><a style="color:red" href="{{action('ClientsController@delete', [$client->id])}}">Supprimé</a></em> </li>
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

        </div>
        @endsection

