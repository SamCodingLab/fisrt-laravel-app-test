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
        // dd($clients->name);
        return view('edit', ['clients' => $clients]);
    } 

    public function update($id){
        $name = request('name');


        $clients = Client::find($id);
        
        $clients->name = $name;
        $clients->save();
        return redirect('/list');
    }

    public function delete($id){
        $clients = Client::find($id);
        $clients->delete();
        
        return redirect('/list');

    }

}

