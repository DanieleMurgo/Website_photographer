<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class CreateClientForm extends Component
{
    public $name;
    public $client;

    protected $rules =[
        'name' => 'required|min:2',
    ];

    public function store()
    {
       $this->validate();
       $this->client = Client::create([
           'name' => $this->name,
       ]);
       return redirect()->route('admin')->with('message', "New client created!");
    }


    public function render()
    {
        return view('livewire.create-client-form');
    }
}