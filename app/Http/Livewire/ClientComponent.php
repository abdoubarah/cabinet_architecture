<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientComponent extends Component
{

    public $nom_client,$cin_client,$tel_client;


    protected $rules = [
        'nom_client' => 'required|min:4',
        'cin_client' => 'required|min:4',
        'tel_client' => 'required|digits:10',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.client-component');
    }

    public function createClient()
    {
        $this->validate($this->rules, [
            'nom_client.required' => "Remplire le champs suivant",
            'cin_client.required' => "Remplire un CIN valide",
            'tel_client.integer' => "Remplire un numero de telephone valide",
        ]);

        if(Client::where("cin_client", "=" ,$this->cin_client)->first() === null) {
            Client::create([
                'nom_client' => $this->nom_client,
                'cin_client' => $this->cin_client,
                'n_tel_client' => $this->tel_client,
            ]);
            // Set Flash Message
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Client bien ajouter"
            ]);
            $this->reset();
       }else {
             // Set Flash Message
             $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=>"Client existe deja"
            ]);
       }

        
    }


}
