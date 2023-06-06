<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class EditClientForm extends Component
{
    public $clientId;
    public $name;
    public $client;



    protected $rules =[
        'name' => 'required|min:2',
        
    ];

    // public function closeModal() {
    //     $this->emit('closeModal', $this->clientId);
    // }

    public function mount($clientId)
    {
        $client = Client::find($clientId);
        $this->name = $client->name;
        $this->clientId = $clientId;
    }

    public function update()
    {
        $this->validate();
        Client::find($this->clientId)->update([
            'name' => $this->name,
        ]);

        return redirect()->route('admin')->with('message', "Information related $this->name updated!");
     }

    public function render()
    {
        return view('livewire.edit-client-form');
    }
}