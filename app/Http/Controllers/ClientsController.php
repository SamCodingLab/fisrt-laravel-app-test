<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ClientsController extends Controller
{
    public function list(){
        $clients = Client::all();

        return view('list', [
            'clients' => $clients
        ]);
    }

    public function store(){
        request()->validate([
            'name' =>  'required'
        ]);



        $name = request('name');


        $clients = new Client;
        $clients->name = $name;
        $clients->save();
        return back();
    }
    

    public function edit($id){
        $clients = Client::find($id);
        dd($clients);
        return view('edit');
    } 
}

