<?php

namespace App\Services;

use App\Models\Client;

class ClientService {

    public function list()
    {
        return Client::with('loans')->get();            
    } 

    public function store(array $clientData)
    {  
        $client = Client::create($clientData);
        return $client;
    }

    public function show($id)
    {  
        $client = Client::findOrFail($id)->with('loans')->get();
        return $client;
    }

    public function update($id, array $clientData)
    {  
        $client = Client::findOrFail($clientData);

        $client->name = $clientData['name'];
        $client->birthday = $clientData['birthday'];
        $client->save();

        return $client;
    }

    public function delete($id)
    {
        $client = Client::findOrFail($id);

        $client->delete();
    }


}