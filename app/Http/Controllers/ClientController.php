<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $newClient = Client::create($request->all());
        return redirect()->route('admin')->with('message', "New client created!");
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('admin')->with('message', "Client: '$client->name' updated!");
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin')->with('message', "Client: '$client->name' deleted!");
    }
}