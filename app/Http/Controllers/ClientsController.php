<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list(){
        $clients = Client::all();

        return view('list', [
            'clients' => $clients
        ]);
    }

    public function store(){
        
        $clients = new Client();
        $clients->name = request('name');
        $clients->save();

        return redirect('list');
    }
}

