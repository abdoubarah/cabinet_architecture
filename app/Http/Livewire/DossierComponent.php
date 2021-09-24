<?php

namespace App\Http\Livewire;

use App\Models\Dossier;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DossierComponent extends Component
{

    public $toggle = false;



    public function render()
    {
        $dossiers = DB::select("SELECT * FROM `clients` as cli,`dossiers` as doss WHERE cli.id_client = doss.id_client")->get();
        return view('livewire.dossier-component', ["dossiers" => $dossiers]);
    }

    public function toggleVal() {
        $this->toggle = 1 - $this->toggle;
        $this->dispatchBrowserEvent("toggle-value", $this->toggle);
    }


}
